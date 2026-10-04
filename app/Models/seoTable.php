<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seoTable extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function saveSeo($data, $req)
    {
        $dataFound = seoTable::where('page_name', $req->section)->first();
        if (isset($dataFound)) {
            $dataFound->update([
                "keywords"      => $data['tag'] ?? $dataFound->keywords,
                "tittle"        => $data['tittle'] ?? $dataFound->tittle,
                "description"   => $data['description'] ?? $dataFound->description
            ]);
            return true;
        }

        $mseoTable = new seoTable();
        $mseoTable->page_name   = $req->section;
        $mseoTable->keywords    = $data['tag'] ?? "";
        $mseoTable->tittle      = $data['tittle'] ?? "";
        $mseoTable->description = $data["description"] ?? "";
        $mseoTable->save();
    }

    public function getSeoByPage($pageName)
    {
        return seoTable::where("page_name", $pageName);
    }
}
