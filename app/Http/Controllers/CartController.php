<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Login;
use App\Models\Product;
use App\Models\Register;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has('name')){
            $session_loginId = session("loginId");
            echo $session_loginId;
            $cartdata = Cart::join("logins","logins.id","=","carts.login_id")->where("carts.login_id","=",$session_loginId)
            ->join("products","products.id","=","carts.product_id")
            ->select("carts.cid","products.id","products.image","products.company_name","products.price","products.model_name",
            "products.category","products.asin","products.item_model_number")->get();
            //return response()->json($cartdata);
                return view("cart",compact("cartdata"));
        }else{
            return view("login");
        }        
       
       
    }
    public function deleteCartItem(Request $req,$id)
    {
        $affected = Cart::where("cid","=",$id)->delete();
        return redirect("cart");
        
        //echo $affected;
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
