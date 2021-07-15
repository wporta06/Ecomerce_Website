<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller 
{
    // need to modifie 'guards' and 'providers' in auth.php in config file
    // need to be admin to see index and do logout (except)
    public function __construct(){
        $this->middleware('auth:admin')->except(["showLoginFromofAdmin","checkLoginofAdmin"]); //"auth:admin" mean he must be loged to see m3ada index & logoutAdmin, "guest:admin" can without login as admin
    }


    public function showLoginFromofAdmin(){
        if(auth()->guard('admin')->check()){
            // return redirect('/admindashboard');
            return redirect()->route("products_route");
        }

        return view('admin.auth.login');
    }

    public function checkLoginofAdmin(Request $request){
      
            // for guard we add it in auth.php
        if(auth()->guard("admin")->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ], $request->get("remember"))){
            // return redirect("/admin dashboard"); 
            return redirect()->route("products_route");
        }else{
            // return redirect('/adminlogin');
            return redirect()->route("adminloginform_route");
        }
    }

    // for admin logout
    public function logoutAdmin(){
        auth()->guard('admin')->logout();
        return redirect()->route("adminloginform_route");
    }

// !   ======================
    
}
