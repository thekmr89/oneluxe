<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'txn_id',
        'payment_status',
        'payment_method',
        'payment_gateway',
        'auth_id_code',
        'rrn',
        'currency',
        'customer_email',
        'customer_phone',
        'customer_id',
        'amount',
        'captured_amount',
        'refundable_amount',
        'gateway_response',
        'txn_detail',
        'metadata',
        'order_created_at',
        'order_updated_at',
    ];
}
