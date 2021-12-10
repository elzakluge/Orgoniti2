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

    public function viewcategory($url){
        if(Category::where('url', $url)->exists()){
            $category = Category::where('url', $url)->first();
            $products = Product::where('category_id', $category->id)->where('status', '1')->get();
            return view('frontend.products.index', compact('category', 'products'));
        } else{
            return redirect('/')->with('status', "The link is broken, url doesn't exist!");
        }
    }

    public function productview($category_url, $prod_url){
        if(Category::where('url', $category_url)->exists())
        {
            if(product::where('url', 'prod_url')->exists())
            {
                $product = Product::where('url', '$prod_url')->first();
                return view('frontend.products.view', compact('products'));
            }
            else{
                return redirect('/')->with('status', "The link is broken!");
            }
        }
        else{
            return redirect('/')->with('status', "No such category found!");
        }
    }
}
