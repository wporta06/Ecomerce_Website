<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function update(Request $request, Order $order)
    {
        $order->update(["delivered"=>1]);
        return redirect()->route('admin.orders')->withWarning("DELEVERED");
    }

    
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders');
    }
}
