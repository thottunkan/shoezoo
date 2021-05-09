<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Login;
use App\Models\Product;
use App\Models\Register;
use App\Models\Purchase;
class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request,$id,$cid)
    {
        // $cartdata = Cart::join("logins","logins.id","=","carts.login_id")->where("carts.login_id","=",$session_loginId)
        // ->join("products","products.id","=","carts.product_id")
        // ->select("carts.cid","products.id","products.image","products.company_name","products.price","products.id")->get();
       //return response()->json($cartdata);
        //$resp = Cart::join("purchases","purchases.ca")
        $login_id = session("loginId");
        $date = date("Y-m-d");
        echo $date;
        echo "<br>";
        echo " product id = ".$id;
        echo " cart id = ".$cid;
        echo "<br>";
        echo "login id = ".$login_id;
        echo "<br>";
        $purchase = new Purchase;
        $purchase->product_id = $id;
        $purchase->login_id = $login_id;
        $purchase->purchase_date = $date;
        $purchase->save();
        echo "record saved in purchase table<br>";
        Cart::where("cid","=",$cid)->delete();
        echo "item removed from cart";

        echo $id." ltid=".$login_id;
        return redirect("cart");
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
