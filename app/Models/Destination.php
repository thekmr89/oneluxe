<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function saveUpdateDestination($pageName, $data, $destination)
    {
        $mDestination = new Destination();

        $destionData = Destination::where("destination_name", $destination)->first();
        if (isset($destionData)) {
            $destionData->update([
                "content_one"   => $data["des1content"] ?? $destionData->content_one,
                "content_two"   => $data["des1subcontent"] ?? $destionData->content_two,
                "image_one"     => $data["des1image"] ?? $destionData->image_one,
                "image_two"     => $data["des1secondimage"] ?? $destionData->image_two,
                "l_content"     => $data["lcuntent"] ?? $destionData->l_content,
                "l_image"       => $data["limage"] ?? $destionData->l_image
            ]);

            return true;
        }

        $mDestination->destination_name = $destination;
        $mDestination->content_one      = $data['des1content'] ?? "";
        $mDestination->content_two      = $data['des1subcontent'] ?? "";
        $mDestination->image_one        = $data['des1image'] ?? "";
        $mDestination->image_two        = $data['des1secondimage'] ?? "";
        $mDestination->l_content        = $data['lcuntent'] ?? "";
        $mDestination->l_image          = $data['limage'] ?? "";
        $mDestination->save();
    }


    public function getDestination()
    {
        return Destination::orderBy('id');
    }


    public function getDestinationById($id)
    {
        return Destination::where('id', $id);
    }
}
