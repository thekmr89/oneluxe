<?php

$sqlFile = 'C:/Users/Susheel/Downloads/oneluxe_prod.sql';
if (!file_exists($sqlFile)) {
    die("File not found: $sqlFile\n");
}

$dbFile = __DIR__ . '/database/database.sqlite';
$pdo = new PDO("sqlite:" . $dbFile);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("PRAGMA foreign_keys = OFF;");

$handle = fopen($sqlFile, 'r');
if (!$handle) {
    die("Could not open $sqlFile\n");
}

$currentQuery = '';
$inInsert = false;
$insertedCount = 0;
$tableCounts = [];

echo "Starting import of oneluxe_prod.sql into SQLite database...\n";
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

        // Clean MySQL bit syntax: b'1' -> 1, b'0' -> 0
        $cleanQuery = preg_replace("/b'([01])'/", '$1', $currentQuery);

        if (preg_match('/INSERT\s+INTO\s+`?([a-zA-Z0-9_]+)`?/i', $cleanQuery, $m)) {
            $tableName = $m[1];
        } else {
            $tableName = 'unknown';
        }

        try {
            $pdo->exec($cleanQuery);
            $insertedCount++;
            $tableCounts[$tableName] = ($tableCounts[$tableName] ?? 0) + 1;
        } catch (Exception $e) {
            echo "Error inserting into $tableName: " . $e->getMessage() . "\n";
        }
        $currentQuery = '';
    }
}

fclose($handle);
$pdo->commit();
echo "Import finished! Total statement batches: $insertedCount\n";
foreach ($tableCounts as $tbl => $cnt) {
    echo " - $tbl: $cnt batch(es)\n";
}
