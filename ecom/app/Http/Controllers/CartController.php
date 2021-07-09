<?php
// this is from package git EP:9
namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // to return cart items
    public function index(){
        return view("cart.index")->with([
            "items" => \Cart::getContent()
        ]);
    }

    // to add item to cart, we use the addtocart package from git 
    public function addProductToCart(Request $request,Product $product){
        \Cart::add(array(
            "id"=> $product->id,
            "name"=> $product->title,
            "price"=> $product->price,
            "quantity"=> $request->qty, //quantity we will get it from the form show.blade.php
            "attributes"=> array(),     // all other data,just if we want to add something else
            "associatedModel"=> $product, //from git doc

        ));
        return redirect()->route("cart.index"); //index.dlade.php in cart folder
    }

    // to update item in cart, we use this code from git doc 
    public function updateProductOnCart(Request $request,Product $product){
        \Cart::update($product->id,array(
            'quantity' => array(
                'relative'=> false, //! get it from git doc 
                'value'=> $request->qty
            ),
        ));
        return redirect()->route("cart.index");
    }

    // remove item from cart, we use this code from git doc 
    public function removeProductFromCart(Product $product){
        \Cart::remove($product->id);
        return redirect()->route("cart.index");
    }
}
