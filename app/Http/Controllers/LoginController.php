<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Register;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $req)
    {
       //return "in login index";
       $data = $req->input();
       $username = $data['username'];
       $password = $data['password'];
      // echo "<h1>username = ".$username."  password = ".$password."</h1>";
    
        $tabledata = Login::where("username",'=',$username)->get();
       
        $getUsername = "";
        $getLoginId = "";
        $getPassword = "";
        foreach($tabledata as $obj){
            $getUsername= $obj->username;
            $getLoginId = $obj->id;
            $getPassword = $obj->password; 
        }
        $getCustomerName = "";
        if ($getUsername) {
            $getCustomerName = Register::where("login_id",'=',$getLoginId)->pluck('name')[0];
        }
        
        
        
        if ($username == $getUsername && $password == $getPassword) {
           
            $req->session()->put("name",$getCustomerName);
            $req->session()->put("loginId",$getLoginId);
            return redirect('home');
            
        }
        else{
            $msg =  "you are an invalid user";
            return redirect("login");
            
        }
       

        // echo "<h1> logi-id = ".$login_id->id."</h1>";
        // //print_r($login_id);
        // foreach($login_id as $id){
        //     echo $id."<br>";
        // }
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
