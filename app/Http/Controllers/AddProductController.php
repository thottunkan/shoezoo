<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Response;
use Image;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("addproduct");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //var_dump($request);
        //return response()->json($request->input());
        $data = $request->input();
        $img_data =  $data['imagecontent'];
        //return response()->json($request->input());
        $p = new Product;
        $p->image =  $img_data;

        $p->company_name =  $data['company_name'];
        $p->model_name =  $data['model_name'];
        $p->category =  $data['category'];
        $p->price =  $data['price'];
        $p->sole =  $data['sole'];
        $p->closure =  $data['closure'];
        $p->shoe_width =  $data['shoe_width'];
        $p->outer_material =  $data['outer_material'];
        $p->product_dimension =  $data['product_dimension'];
        $p->date_first_available =  $data['date_first_available'];
        $p->manufacturer =  $data['manufacturer'];
        $p->asin =  $data['asin'];
        $p->item_model_number =  $data['item_model_number'];
        $p->department =  $data['department'];
        $p->packer =  $data['packer'];
        $p->item_weight =  $data['item_weight'];
        $p->desc =  $data['desc'];
        $p->save();
        $response = "Product Added";
        return view("addproduct",compact("response"));
        //$getImage = $request->img;
       
       
        //return Response::make($image->encode('jpeg'));
       
        // $request->validate([
        //     'product_image'=>"required|image|max:2048"
        // ]);

       
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
