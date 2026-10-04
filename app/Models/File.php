<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function findByPageName($pagename)
    {
        return self::where('page_name', $pagename)
            ->get();
    }


    // public function getfile()
    // {  
    // }
}
