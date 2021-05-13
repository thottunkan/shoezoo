<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Address;
use App\Models\Register;
use App\Models\Purchase;
use App\Models\Product;
use App\Models\Cart;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllUserDetails()
    {
        $userdata = Register::join("logins","logins.id","=","registers.login_id")
        ->join("addresses","addresses.id","=","registers.reg_id")->get();
        return view("userdetails",compact("userdata"));
    }
    public function getAllSaledProducts(Request $req)
    {
        $salesdata = Purchase::join("products","products.id","=","purchases.product_id")
        ->join("registers","registers.login_id","=","purchases.login_id")
        ->join("logins","logins.id","=","registers.login_id")
        ->select("products.image","products.company_name","products.model_name","products.price","registers.name","logins.username","purchases.purchase_date")->get();

       
        return view("saledproducts",compact("salesdata"));
        //return response()->json($totalPrice);
    }
    public function getAllUserCartDetails()
    {
        $cartsdata = Cart::join("products","products.id","=","carts.product_id")
        ->join("registers","registers.login_id","=","carts.login_id")
        ->join("logins","logins.id","=","registers.login_id")
        ->select( "products.image","products.company_name","products.model_name","products.price","registers.name","logins.username")
        ->get();

        return view("allcustomercart",compact("cartsdata"));
    }
    public function calculateTotalPrice($date)
    {
        $salesdata = Purchase::join("products","products.id","=","purchases.product_id")
        ->join("registers","registers.login_id","=","purchases.login_id")
        ->join("logins","logins.id","=","registers.login_id")
        
        ->select("products.image","products.company_name","products.model_name","products.price","registers.name","logins.username")
        ->where("purchases.purchase_date","=",$date)
        ->sum("products.price");
        
        
        return $salesdata;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
