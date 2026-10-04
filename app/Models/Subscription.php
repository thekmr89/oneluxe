<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public function getSubscription()
    {
        return Subscription::where('status', 1);
    }

    public function saveSubscription($data)
    {
        $mSubscription = new Subscription();
        $mSubscription->name = $data->Name;
        $mSubscription->email = $data->email;
        $mSubscription->save();
    }
}
