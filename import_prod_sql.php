<?php

$sqlFile = 'C:/Users/Susheel/Downloads/oneluxe_prod.sql';
if (!file_exists($sqlFile)) {
    die("SQL file not found at $sqlFile\n");
}

$dbFile = __DIR__ . '/database/database.sqlite';
$pdo = new PDO("sqlite:" . $dbFile);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("PRAGMA foreign_keys = OFF;");

function cleanSqliteString($sql) {
    // 1. Bit literals: b'0' -> 0, b'1' -> 1
    $sql = preg_replace("/b'([01])'/", '$1', $sql);

    // 2. Character state machine to escape single quotes inside strings
    $len = strlen($sql);
    $out = '';
    $inString = false;
    $escaped = false;

    for ($i = 0; $i < $len; $i++) {
        $c = $sql[$i];

        if ($inString) {
            if ($escaped) {
                if ($c === "'") {
                    $out .= "''";
                } elseif ($c === '"') {
                    $out .= '"';
                } elseif ($c === '\\') {
                    $out .= "\\";
                } elseif ($c === 'r') {
                    $out .= "\r";
                } elseif ($c === 'n') {
                    $out .= "\n";
                } elseif ($c === 't') {
                    $out .= "\t";
                } else {
                    $out .= '\\' . $c;
                }
                $escaped = false;
            } elseif ($c === '\\') {
                $escaped = true;
            } elseif ($c === "'") {
                $inString = false;
                $out .= "'";
            } else {
                $out .= $c;
            }
        } else {
            if ($c === "'") {
                $inString = true;
                $out .= "'";
            } else {
                $out .= $c;
            }
        }
    }
    return $out;
}

function convertCreateTable($createSql) {
    $createSql = preg_replace('/\)\s*ENGINE=.*$/is', ')', $createSql);
    $createSql = preg_replace('/\bAUTO_INCREMENT\b/i', '', $createSql);
    $createSql = preg_replace('/\bunsigned\b/i', '', $createSql);
    $createSql = preg_replace('/CHARACTER\s+SET\s+[^\s,)]+/i', '', $createSql);
    $createSql = preg_replace('/COLLATE\s+[^\s,)]+/i', '', $createSql);
    $createSql = preg_replace('/bit\(1\)\s*(NOT\s+NULL)?\s*DEFAULT\s*b\'([01])\'/i', 'INTEGER $1 DEFAULT $2', $createSql);
    $createSql = preg_replace('/bit\(\d+\)/i', 'INTEGER', $createSql);
    $createSql = preg_replace('/\b(tinyint|smallint|mediumint|int|bigint)\s*(\(\d+\))?/i', 'INTEGER', $createSql);
    $createSql = preg_replace('/ON\s+UPDATE\s+current_timestamp(\(\d*\))?/i', '', $createSql);
    $createSql = preg_replace('/current_timestamp\(\d*\)/i', 'CURRENT_TIMESTAMP', $createSql);
    $createSql = preg_replace('/timestamp\(\d*\)/i', 'TIMESTAMP', $createSql);
    // Remove index definitions that SQLite CREATE TABLE doesn't support directly
    $createSql = preg_replace('/,\s*KEY\s+`[^`]+`\s*\([^)]+\)/i', '', $createSql);
    $createSql = preg_replace('/,\s*CONSTRAINT\s+`[^`]+`\s*FOREIGN\s+KEY\s*\([^)]+\)\s*REFERENCES\s+`[^`]+`\s*\([^)]+\)/i', '', $createSql);
    return $createSql;
}

echo "Reading oneluxe_prod.sql...\n";
$content = file_get_contents($sqlFile);

// 1. Recreate tables from the dump so all column additions match production
preg_match_all('/CREATE TABLE `([^`]+)` \((.*?)\) ENGINE=[^;]+;/s', $content, $createMatches, PREG_SET_ORDER);

echo "Found " . count($createMatches) . " tables in dump. Creating SQLite tables...\n";
foreach ($createMatches as $m) {
    $tableName = $m[1];
    $rawCreate = $m[0];
    $sqliteCreate = convertCreateTable($rawCreate);

    try {
        $pdo->exec("DROP TABLE IF EXISTS `$tableName`;");
        $pdo->exec($sqliteCreate);
        echo " - Table `$tableName` ready.\n";
    } catch (Exception $e) {
        echo "Error creating `$tableName`: " . $e->getMessage() . "\n";
    }
}

// 2. Parse and execute INSERT statements
echo "\nImporting data rows...\n";
$handle = fopen($sqlFile, 'r');
$inInsert = false;
$currentQuery = '';
$insertedCounts = [];

$pdo->beginTransaction();
while (($line = fgets($handle)) !== false) {
    $trimmed = trim($line);

    if (str_starts_with($trimmed, 'INSERT INTO')) {
        $inInsert = true;
        $currentQuery = $line;
    } elseif ($inInsert) {
        $currentQuery .= $line;
    }

    if ($inInsert && str_ends_with(rtrim($trimmed), ';')) {
        $inInsert = false;
        $cleanQuery = cleanSqliteString($currentQuery);

        if (preg_match('/INSERT\s+INTO\s+`?([a-zA-Z0-9_]+)`?/i', $cleanQuery, $m)) {
            $tableName = $m[1];
        } else {
            $tableName = 'unknown';
        }

        try {
            $pdo->exec($cleanQuery);
            $insertedCounts[$tableName] = ($insertedCounts[$tableName] ?? 0) + 1;
        } catch (Exception $e) {
            echo "Error inserting into `$tableName`: " . $e->getMessage() . "\n";
            file_put_contents(__DIR__ . "/error_{$tableName}.sql", $cleanQuery);
        }
        $currentQuery = '';
    }
}
fclose($handle);
$pdo->commit();

echo "\n--- Data Import Summary ---\n";
foreach ($insertedCounts as $tbl => $cnt) {
    $totalRows = $pdo->query("SELECT COUNT(*) FROM `$tbl`")->fetchColumn();
    echo " Table `$tbl`: $cnt batch(es) inserted, total $totalRows rows.\n";
}
echo "Import completed successfully!\n";
