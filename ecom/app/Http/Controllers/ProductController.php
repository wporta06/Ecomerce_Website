<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // must be loged admin
    public function __construct()
    {
        $this->middleware('auth:admin')->except(['index', 'show']); //need to be logged in as admin, except seeing index() and show() 
    }

    // to show product panel (for admin after sign in )
    public function showProductsPanel()
    {   //move this to productcontroller and change rout

        return view('admin.products.showproducts')->with([
            "products" => Product::latest()->paginate(100), //to show all product + budg
            "orders" => Order::latest()->paginate(100)   //to show budg of number of orders

        ]);
    }

    // to show the product (for user after sign in )
    public function show(Product $product)
    {
        //go to folder products in show showproduct.blade.php fille
        return view("products.show")->with([
            "product" => $product
        ]);
    }


    public function create()
    {
        return view('admin.products.createproduct')->with([
            "products" => Product::latest()->paginate(100), //to show product budg
            "orders" => Order::latest()->paginate(100),   //to show orders budg

            'categories' => Category::all(),
        ]);
    }


    public function store(Request $request)
    {
        //for adding product
        if ($request->has("image")) {
            $file = $request->image;
            $theimageName = "images/allproducts/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/allproducts"), $theimageName);
            $title = $request->title;

            Product::create([
                "title" => $title,
                "slug" => Str::slug($title),
                "description" => $request->description,
                "price" => $request->price,
                "old_price" => $request->old_price,
                "inStock" => $request->inStock,
                "category_id" => $request->category_id,
                "image" => $theimageName,
            ]);
            return redirect()->route("products_route")->withSuccess("Product added");
        }
    }

    public function edit(Product $product)
    {
        return view("admin.products.editproduct")->with([
            "theproduct" => $product,
            "thecategories" => Category::all(),

            "products" => Product::latest()->paginate(100), //to show product budg
            "orders" => Order::latest()->paginate(100),   //to show orders budg
        ]);
    }


    public function update(Request $request, Product $product)
    {

        //update data
        if ($request->has("image")) {
            $image_path = public_path("images/allproducts/" . $product->image);
            $file = $request->image;
            $theimageName = "images/allproducts/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/allproducts"), $theimageName);
            $product->image = $theimageName;
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
        return redirect()->route("products_route")->withSuccess("Product updated");
    }


    public function destroy(Product $product)
    {
        //delete data
        $image_path = public_path("images/allproducts/" . $product->image);
        if (File::exists($image_path)) {
            unlink($image_path);
        }
        $product->delete();
        return redirect()->route("products_route")
            ->withSuccess("Product deleted");
    }
}
