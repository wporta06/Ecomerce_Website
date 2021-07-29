<?php

namespace App\Http\Controllers;

use App\Order;
use Srmklive\PayPal\Services\ExpressCheckout;

use Illuminate\Http\Request;

class OrderConfirmation extends Controller
{
    // must be login to buy
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function handlePayment()
    {
        // $created_at=new Date();
        foreach (\Cart::getContent() as $item) {
            $order = Order::create([
                "user_id" => auth()->user()->id,
                "product_name" => $item->name,
                "qty" => $item->quantity,
                "price" => $item->price,
                "total" => $item->price * $item->quantity,

            ]);
            $created_at = $order->created_at;

            \Cart::clear();
        }

        return view("cart.orderinfo")->with([

            "created_at" => $created_at
        ]);
    }

    //    =========================================
    public function updatee(Request $request, $created_at)
    {
        $orders = Order::where("created_at", $created_at);


        $orders->update([
            "fullname" => $request->fullname,
            "address" => $request->address,
            "phonenumber" => $request->phonenumber,
            "note" => $request->note,
        ]);
        return view("cart.thankyoupage");
    }
}
