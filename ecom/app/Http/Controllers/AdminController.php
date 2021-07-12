<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller 
{
    // need to modifie 'guards' and 'providers' in auth.php in config file
    // need to be admin to see index and do logout (except)
    public function __construct(){
        $this->middleware('auth:admin')->except(["showAdminLoginForm","adminLogin"]); //"auth:admin" mean he must be loged to see m3ada index & adminLogout, "guest:admin" can without login as admin
    }

    public function index(){
        return view("admin.index")->with([ //to use them in 
            "products" => Product::all(), //to show the in admin allproduct 
            "orders" => Order::all(),
        ]);
    }

    public function showAdminLoginForm(){
        if(auth()->guard('admin')->check()){
            return redirect('/admin');
        }

        return view('admin.auth.login');
    }

    public function adminLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:4'
        ]);
            // for guard we add it in auth.php
        if(auth()->guard("admin")->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ], $request->get("remember"))){
            // return redirect("/admin");
            return redirect()->route("admin.index");
        }else{
            return redirect('/admin/login');
        }
    }

    // for admin logout
    public function adminLogout(){
        auth()->guard('admin')->logout();
        return redirect()->route("admin.login");
    }

// !   ======================

    public function getProducts(){   //move this to productcontroller and change rout
        
        return view('admin.products.index')->with([
            "products" => Product::latest()->paginate(7)
        ]);
    }

    public function getOrders(){

        return view('admin.orders.index')->with([
            "orders" => Order::latest()->paginate(10)
        ]);

    }


    
}
