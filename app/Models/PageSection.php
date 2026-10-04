<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    use HasFactory;

    /**
     * | Get details of the sections with page name
        | Serial No : 01
     */
    public function getPageSection($pageName)
    {
        return PageSection::where("page_name", $pageName)
            ->where('status', true);
    }
}
