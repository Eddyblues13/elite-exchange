<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'packages';
    protected $fillable =
    [
        'user_id',
        'sender_name',
        'sender_phone',
        'sender_email',
        'sender_address',
        'receiver_name',
        'receiver_phone',
        'receiver_email',
        'receiver_address',
        'parcel_description',
        'dispatch_location',
        'current_location',
        'locale',
        'parcel_status',
        'dispatch_date',
        'delivery_date',
        'tracking_number',

    ];
}
