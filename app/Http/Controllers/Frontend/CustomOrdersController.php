<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Color;
use App\Models\Crystal;
use App\Models\Glitter;
use App\Models\Size;

class CustomOrdersController extends Controller
{
    public function index(){
        $category = Category::all();
        $glitter = Glitter::all();
        $crystal = Crystal::all();
        $color = Color::all();
        $size = Size::all();
        return view('frontend.custom', compact('category', 'glitter', 'crystal', 'color', 'size'));
    } 
}
