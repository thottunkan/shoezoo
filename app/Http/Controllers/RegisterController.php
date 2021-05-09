<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Address;
use App\Models\Register;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("register");
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
      
        $data = $request->input();
        
        
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $username = $data['username'];
        $password = $data['password'];
        $af1 = $data['af1'];
        $af2 = $data['af2'];
        $af3 = $data['af3'];
        $af4 = $data['af4'];
    //     // echo "<h1>".$name."</h1><br>";
    //     // echo "<h1>".$email."</h1><br>";
    //     // echo "<h1>".$phone."</h1><br>";
    //     // echo "<h1>".$username."</h1><br>";
    //     // echo "<h1>".$password."</h1><br>";
    //     // echo "<h1>".$af1."</h1><br>";
    //     // echo "<h1>".$af2."</h1><br>";
    //     // echo "<h1>".$af3."</h1><br>";
    //     // echo "<h1>".$af4."</h1>";
    //    // return response()->json($data, 200);

        $getUsername = Login::where("username",'=',$username)->pluck('username');
        $getLoginId = Login::where("username",'=',$username)->pluck('id');
        
        if ($getUsername->toArray() == array()) {
            
             $login = new Login;
            $login->username = $username;
            $login->password = $password;
            $login->status = "u";
            $login->save();


           $addr = new Address;
           $addr->field1 = $af1;
           $addr->field2 = $af2;
           $addr->field3 = $af3;
           $addr->field4 = $af4;
           $addr->save();

           $register = new Register;
           $register->name = $name;
           $register->email = $email;
           $register->phone = $phone;
           $register->login_id = $login->id;
           $register->addr_id = $addr->id;
           $register->save();
           echo "Registration Successful...";
          

        }else{
            // $request->session()->put("name",$getName);
            // $request->session()->put("loginId",$getLoginId);
            echo "".$getUsername." already exist";
            //return redirect("register");
        }
       

       

        

        // 
        // echo "login id =".$login->id;
        // echo "Address id =".$addr->id;

        // 
        
        //  

        // //  $login->addloginIdToRegister()->save($login->id);
        // //  $addr->addAddrIdToRegister()->save($addr->id);
        //  

        //  $login1 = Login::find(11);
        //  var_dump ($login1->username);
        //  var_dump ($login1->password);
        //  var_dump ($login1->status);
        //  echo "<br>";
        //  $address1 = Address::find(11);
        //  var_dump ($address1->field1);
        //  var_dump ($address1->field2);
        //  var_dump ($address1->field3);
        //  echo "<br>";

         

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
