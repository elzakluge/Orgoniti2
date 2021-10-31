<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'url',
        'description',
        'status',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',

    ];
}
