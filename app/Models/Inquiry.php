<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    public function saveInquiry($data)
    {
        $mInquiry = new Inquiry();
        $mInquiry->first_name   = $data->Name;
        $mInquiry->last_name    = $data->tLastName;
        $mInquiry->email        = $data->Email;
        $mInquiry->phone        = $data->Phone;
        $mInquiry->message      = $data->textarea1;
        $mInquiry->save();
    }

    public function getInquiry()
    {
        return Inquiry::where("status", 1);
    }
}
