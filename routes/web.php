<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view("index");
});
Route::get('register',function ()
{
    return view("register");
});
Route::get('login', function () {
    return view("login");
});
Route::post('regcustomer',[RegisterController::class,"store"]);
Route::post('authuser', [LoginController::class,"index"]);
// Route::get("/home",function()
// {
//     if (session("name") && session("loginId")) {
//         return view("home");    
//     }else{
//         return view("login");
//     }
    
// });
Route::get("/home",[HomeController::class,"index"]);
Route::get("/logout",function(){
    // echo "<script>alert('".session("name")."');</script>";
    // echo "<script>alert('".session()->has('name')."');</script>";
    if(session()->has('name')){
        session()->pull("name");
        session()->pull("loginId");
       return view("login");
    }
    return view("login");
});

Route::get("userprofile",[UserProfileController::class,"index"]);
Route::post("/edituserprofile",[UserProfileController::class,"store"]);

Route::get('/addproduct', [AddProductController::class,"index"] );
Route::post('/persistproductdetails', [AddProductController::class,"store"] );
Route::get('product/{product_id}',[ProductController::class,"show"]);
Route::get('product/addtocart/{product_id}',[ProductController::class,"addToCart"]);
Route::get("/cart",[CartController::class,"index"]);
Route::get("/cart/deleteitem/{cart_id}",[CartController::class,"deleteCartItem"]);
Route::get("/cart/purchaseitem/{product_id}/{cart_id}",[PurchaseController::class,"store"]);


// admin routes

Route::get('adminhome', function () {
    return view("adminhome");
});
Route::get('/alluserdetails', [AdminController::class,"getAllUserDetails"]);
Route::get('/saledproducts', [AdminController::class,"getAllSaledProducts"]);
Route::get('/allcustomercart',[AdminController::class,"getAllUserCartDetails"]);
Route::get('/totalPrice/{date}',[AdminController::class,'calculateTotalPrice']);

