<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'total',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'postalcode',
        'status',
        'message',
        'tracking_nr',
    ];
}
