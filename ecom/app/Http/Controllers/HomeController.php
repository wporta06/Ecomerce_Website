<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    // public function __construct()
    // {
    //     $this->middleware('auth');    //i comment this
    // }

      // =============================== cody4 ================================= 
    public function index()
    {
        return view('home')->with([
            "products" => Product::latest()->paginate(10), //get 10 products 
            "categories" => Category::has("products")->get(), // get just category that has product not empty
        ]);
    }
    
    // show product by category in home
    public function getProductByCategory(Category $category)
    {
       $products=$category->products()->paginate(10);
       
       return view('home')->with([
            "products" =>$products,                       
            "categories" => Category::has("products")->get(), // get just category that has product not empty
       ]);
    }
}
