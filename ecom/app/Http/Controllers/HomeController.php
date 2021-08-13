<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 
      // =============================== cody4 ================================= 
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    
    // show product by category
    public function getProductByCategory(Category $category)
    {
       $products=$category->products()->paginate(20);
       
       return view('products.showproductofcategory')->with([
            "products" =>$products,                       
            "categories" => Category::has("products")->get(), // get just category that has product not empty
       ]);
    }
}
