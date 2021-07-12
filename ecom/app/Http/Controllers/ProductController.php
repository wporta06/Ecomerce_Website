<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // must be loged admin
    public function __construct(){
        $this->middleware('auth:admin')->except(['index','show']); //need to be logged in as admin, except seeing index() and show() 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with([
            "products" => Product::latest()->paginate(10), //get 10 products 
            "categories" => Category::has("products")->get(), // get just category that has product not empty
        ]);
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create')->with([
            'categories' =>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //to add product
        if ($request->has("image")) {
            $file = $request->image;
            $imageName = "images/allproducts/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/allproducts"), $imageName);
            $title = $request->title;

            Product::create([
                "title" => $title,
                "slug" => Str::slug($title),
                "description" => $request->description,
                "price" => $request->price,
                "old_price" => $request->old_price,
                "inStock" => $request->inStock,
                "category_id" => $request->category_id,
                "image" => $imageName,
            ]);
            return redirect()->route("admin.products")->withSuccess("Product added");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
    // to show the product (for user)
    public function show(Product $product){
        //go to folder products in show show.blade.php fille
        return view("products.show")->with([ 
            "product" => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view("admin.products.editproducts")->with([
            "product" => $product,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            "title" => "required|min:3",
            "description" => "required|min:5",
            "image" => "image|mimes:png,jpg,jpeg|max:2048",
            "price" => "required|numeric",
            "category_id" => "required|numeric",
        ]);

        //update data
        if ($request->has("image")) {
            $image_path = public_path("images/allproducts/" . $product->image);
            if (File::exists($image_path)) {
                unlink($image_path);
            }
            $file = $request->image;
            $imageName = "images/allproducts/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/allproducts"), $imageName);
            $product->image = $imageName;
        }
        $title = $request->title;
        $product->update([
            "title" => $title,
            "slug" => Str::slug($title),
            "description" => $request->description,
            "price" => $request->price,
            "old_price" => $request->old_price,
            "inStock" => $request->inStock,
            "category_id" => $request->category_id,
            "image" =>  $product->image,
        ]);
        return redirect()->route("admin.products")
            ->withSuccess("Product updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
         //delete data
         $image_path = public_path("images/allproducts/" . $product->image);
         if (File::exists($image_path)) {
             unlink($image_path);
         }
         $product->delete();
         return redirect()->route("admin.products")
             ->withSuccess("Product deleted");
    }
}
