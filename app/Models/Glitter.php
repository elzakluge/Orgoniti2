<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glitter extends Model
{
    use HasFactory;

    protected $table = 'glitter';
    protected $fillable = [
        'glitter',
    ];
}
