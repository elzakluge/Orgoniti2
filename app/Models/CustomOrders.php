<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomOrders extends Model
{
    use HasFactory; 
    protected $table = 'custom_orders';
    protected $fillable = [
        'user_id',
        'category_id',
        'size',
        'color',
        'crystal',
        'glitter',
        'message', 
    ];

    // public function category(){
    //     return $this->belongsTo(Category::class, 'category_id', 'id');
    // }  
}
