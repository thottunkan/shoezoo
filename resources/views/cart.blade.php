@extends('userlayout')
@section('content')
<script src="/js/plugins/jquery-3.4.1.min.js"></script>
<script src="/js/plugins/parallax.min.js"></script>
<script src="/js/plugins/moment.js"></script>
<script src="/js/plugins/bootstrap.js"></script>
    <div class="container" style="margin-top: 100px">
        <h3 class="display-4 text-danger">Your Cart</h3>
        <table class="table table-responsive table-hover text-center bg-light shadow">
        <thead>
            <td><b>Image</b></td>
            <td><b>Brand Name</b></td>
            <td><b>Model Name</b></td>
            <td><b>Casual/Formal</b></td>
            <td><b>Price</b></td>
            <td><b>ASIN</b></td>
            <td><b>Model No</b></td>
            <td></td>
            <td></td>
            
            
        </thead>
        @foreach ($cartdata as $item)
            <tr>
                <td><img class="rounded-circle rounded" src={{$item->image}}  height="150" width="150"></td>
                <td>{{$item->company_name}}</td>
                <td>{{$item->model_name}}</td>
                <td><b>{{$item->category}}</b></td>
                <td><b>{{$item->price}}</b></td>
                <td><b>{{$item->asin}}</b></td>
                <td><b>{{$item->item_model_number}}</b></td>
                
            <td><a href="cart/purchaseitem/{{$item->id}}/{{$item->cid}}" class="btn btn-warning">Purchase </a></td>
            <td><a class="btn btn-danger" href="cart/deleteitem/{{$item->cid}}" onclick="deleteCartItem(event,this)">Delete From Cart</a> </td>

            </tr>
            
            

        @endforeach
       
    </table>
    </div>
@endsection