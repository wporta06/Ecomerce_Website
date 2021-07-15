<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except(['index', 'show']); //need to be logged in as admin, except seeing index() and show() 
    }
    
    public function showOrdersPanel()
    {
        return view('admin.orders.showorders')->with([
            "orders" => Order::latest()->paginate(100), //to show all orders + budg
            "products" => Product::latest()->paginate(100), //to show budg of number of product
            "sum" => Order::sum('total')
        ]);
    }


    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders_route');
    }


    public function update(Request $request, Order $order)
    {
        $order->update(["delivered"=>1]);
        return redirect()->route('orders_route')->withWarning("DELEVERED");
    }
}
