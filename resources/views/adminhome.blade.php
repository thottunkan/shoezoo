@extends('adminlayout')
@section('content')
<style>
    
</style>
    <div class="container" style="margin-top: 300px;" >
        <div class="row text-center" >
            
            <div class="col-md-6 pt-5" >
                <a href="allcustomercart" class="btn btn-warning form-control p-5">All Cutomer Cart</a>
            </div>
            <div class="col-md-6 pt-5" >
                <a href="saledproducts" class="btn btn-warning form-control p-5">All Saled Products</a>
            </div>
            
        </div>
        <div class="row text-center">
            <div class="col-md-6 pt-5" >
                <a href="alluserdetails" class="btn btn-warning form-control p-5">All User Details</a>
            </div><br>
            <div class="col-md-6 pt-5" >
                <a href="addproduct" class="btn btn-warning form-control p-5">Add Product</a>
            </div>
        </div>
    </div>
@endsection