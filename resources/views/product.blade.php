@extends('userlayout')

@section('content')
<script src="/js/plugins/jquery-3.4.1.min.js"></script>
<script src="/js/plugins/parallax.min.js"></script>
<script src="/js/plugins/moment.js"></script>
<script src="/js/plugins/bootstrap.js"></script>
    <div class="container img-fluid" style="width: 800px;margin: auto;">
        <div class="row pt-5 " style=" margin-top: 100px;">
            <div class="col-md-12 img-fluid">
                <div class="grid-item img-fluid">
                    <div class="card shadow img-fluid" style="width: 50rem;">
                        <img class="card-img-top img-fluid" src={{$product->image}} alt="Card image cap">
                        <div class="card-body img-fluid">
                          <h1 class="card-text">{{$product->model_name}}</h1>  
                          
                          <h1 class="h1 display-2">${{$product->price}} </h1>
                          <h3 class="card-text"><b>Brand </b>{{$product->company_name}}</h3>
                          {{-- <a href="#" class="btn btn-dark">Purchase</a> --}}
                        <br>
                          <h3 class="font-monospace">ABOUT THIS ITEM</h3>
                          <ul>
                              <li><b>Category : </b>{{$product->category}}</li>
                              <li><b>Sole : </b>{{$product->sole}}</li>
                              <li><b>Closure : </b>{{$product->closure}}</li>
                              <li><b>Shoe width : </b>{{$product->shoe_width}}</li>
                              <li><b>Outer Material : </b>{{$product->outer_material}}</li>
                              <li><b>Product Dimension : </b>{{$product->product_dimension}}</li>
                              <li><b>Date First Available : </b>{{$product->date_first_available}}</li>
                              <li><b>Manufacturer : </b>{{$product->manufacturer}}</li>
                              <li><b>ASIN : </b>{{$product->asin}}</li>
                              <li><b>Item Model NO : </b>{{$product->item_model_number}}</li>
                              <li><b>Department : </b>{{$product->department}}</li>
                              <li><b>Packer : </b>{{$product->packer}}</li>
                              <li><b>Item weight : </b>{{$product->item_weight}}</li>
                              <li><b>Description : </b>{{$product->desc}}</li>
                          </ul>
                          <div class="text-end">
                          {{-- <a href="/product/{{$product->id}}" class="btn btn-warning form-control ">BUY</a> --}}
                          <br><br>
                          {{-- <a href="/addtocart/{{$product->id}}" class="btn btn-warning form-control ">ADD TO CART ♥ </a> --}}
                          <input type="text" hidden id="hidden" value="{{$product->id}}">  
                          <button class="btn btn-warning form-control" id="addtocart" onclick="addtocart(event)">ADD TO CART</button>
                          <script>
                              function addtocart(){
                                    event.preventDefault(); 
                                    var id = document.getElementById("hidden").value;
                                   // alert("addtocart "+id);
                                    var xhr = new XMLHttpRequest();
                                    var f = new FormData();
                                    f.append("id",id);
                                    var url = "addtocart/"+id;
                                    //alert(url);
                                    xhr.open("GET",url);
                                    console.log(xhr);
                                    xhr.send(f);
                                    xhr.addEventListener("load",function(event){
                                        document.getElementById("addtocart").innerHTML = event.target.responseText;
                                    });
                              }
                          </script>
                          </div>
                          
                        </div>
                      </div>
                   </div>
            </div>
        </div>
    </div><br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid bg-dark pt-5" style="height: 200px;">

    </div>
    
@endsection