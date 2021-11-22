<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $featured_products = Product::where('popular', '1')->take(15)->get();
        return view('frontend.index', compact('featured_products'));
    }

    public function category(){
        $category = Category::where('status', '1')->get();
        return view('frontend.category', compact('category'));
    }

}
