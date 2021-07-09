<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route for login
Auth::routes();

// Route for home  
Route::get('/', 'HomeController@index')->name('home'); 

// Route for Porduct
Route::resource('products', 'ProductController');
Route::get('products/category/{category}', 'HomeController@getProductByCategory')->name("category.products");

// Route for cards ,(just index that show fast)
Route::get('/cart', 'CartController@index')->name("cart.index");
Route::post('/add/cart/{product}', 'CartController@addProductToCart')->name('add.cart');
Route::put('/update/{product}', 'CartController@updateProductOnCart')->name('update.cart');
Route::delete('/remove/{product}', 'CartController@removeProductFromCart')->name('remove.cart');
