<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Address;
use App\Models\Register;
class UserProfileController extends Controller
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
        return $userdata;
    }
    public function index()
    {   
        if(session()->has('name')){
        // $cartdata = Cart::join("logins","logins.id","=","carts.login_id")->where("carts.login_id","=",$session_loginId)
        // ->join("products","products.id","=","carts.product_id")
        // ->select("carts.cid","products.id","products.image","products.company_name","products.price","products.id")->get();
       //return response()->json($cartdata);
        //return view("userprofile");
        $loginId = session("loginId");
        $userdata = Register::join("logins","logins.id","=","registers.login_id")
        ->join("addresses","addresses.id","=","registers.reg_id")
        ->where("logins.id","=",$loginId)->get();
        // $data = response()->json($userdata);
         return view("userprofile",compact("userdata"));
        }
        else{
            return view("login");
        } 
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
        $data = $request->input();
        $loginId = $data["login_id"];
        $addrId = $data["addr_id"];
        $username = $data['username'];
        $af1 = $data['af1'];
        $af2 = $data['af2'];
        $af3 = $data['af3'];
        $af4 = $data['af4'];
        //echo response()->json($data);
        $updatelogin = Login::where("id",'=',$loginId)->update(['username'=>$username]);
        $updateAddress = Address::where('id','=',$addrId)->update(['field1'=>$af1,'field2'=>$af2,'field3'=>$af3,'field4'=>$af4]);
        //$updateAddress = Address::all();
        if ($updatelogin>0 && $updateAddress >0) {
            //return response()->json(Address::where('id','=',$addrId)->get());
            return redirect("userprofile");
        }
        
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
