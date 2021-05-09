
@extends('userLayout')


@section('content')
<script src="/js/plugins/jquery-3.4.1.min.js"></script>
<script src="/js/plugins/parallax.min.js"></script>
<script src="/js/plugins/moment.js"></script>
<script src="/js/plugins/bootstrap.js"></script>
<style>
    .grid-container {
      display: grid;
      grid-template-columns: auto auto auto;
      /* background-color: #2196F3; */
      padding: 10px;
      align-items: center;
      justify-items: center;
      justify-content: space-evenly;
      
    }
    @media only screen and (max-width : 768px ){
        
           .grid-container{
            grid-template-columns: auto;
           }
        
    }
    .grid-item {
      /* background-color: rgba(255, 255, 255, 0.8); */
      /* border: 1px solid rgba(0, 0, 0, 0.8); */
      padding: 20px;
      align-items: center;
      
    }
    .grid-item>.card{
        justify-content: center;
        /* align-items: center; */
        /* background-color: #dc3545; */
        background-color: aliceblue;
        color:black;
        align-content: center;
        /* align-items: center; */
        justify-items: center;
        justify-content: center;
    }
    .grid-item>.card>.btn{
        color: white;
        background-color: black;
    }
    </style>
    <script>
        $(document).ready(function(){
           // alert("hai");
          $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".grid-container .card").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
  
        $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<div class="container-fulid" style="margin: 100px;">
    {{-- <h1>Hello {{session('name')}}</h1> --}}
    <br>
    <div class="container">
        <h2 class="display-4 text-danger">Purchase Product</h2>
        <div class="row">
            <div class="col-md-12">
                <input type="text" placeholder="Search Product" name="search" id="search" class="form-control font-monospace">
            </div>
            
        </div>
        <br>
        <br>
        
        <div class="grid-container img-fluid">

          @if (count($allProducts)>0)
              
            @foreach ($allProducts as $product)
                <div class="grid-item">
                  <div class="card shadow " style="width: 22rem;">
                      <img class="card-img-top" src={{$product->image}} alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">{{$product->company_name}}</h5>
                        <h3 class="">${{$product->price}} </h3>
                        <p class="card-text">{{$product->model_name}}</p>
                        {{-- <a href="#" class="btn btn-dark">Purchase</a> --}}
                        <div class="text-end">
                        <a href="/product/{{$product->id}}" class="link-primary nav-link ">->Read more</a>
                        </div>
                        
                      </div>
                    </div>
                 </div>
            @endforeach
           
            @endif  
            
            
             
          </div>
        
    </div>

</div>

@endsection