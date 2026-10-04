<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiService extends Model
{
    use HasFactory;
    protected $guarded = [];

    // 
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    // 
    public function getAll()
    {
        return self::orderBy('id')->get();
    }

    public function getDataById($id)
    {
        return self::where("id", $id);
    }


    public function updateServices($refData, $id)
    {
        $data = self::where("id", $id)->first();
        if ($data) {
        $data->update([
            "image_path"      => $refData["image_path"] ?? $data->image_path,
            "content_value"   => $refData["content_value"] ?? $data->content_value,
            "view_home"       => $refData["view_home"] ?? $data->view_home,
            "heading"         => $refData["heading"] ?? $data->heading,
            "tag_service_page"=> !empty($refData["tag_service_page"])
                                    ? $refData["tag_service_page"]
                                    : $refData["heading"] ?? $data->heading,  
        ]);
    }
    }
}

 