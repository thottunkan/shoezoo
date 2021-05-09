@extends('adminlayout')


@section('content')

<div class="container-fluid" style="margin-top: 100px;">
    <div class="container">
        <h1 class="display-4 text-danger">Add Products  </h1>
        
            
        {{$response = ""}}
        @if ($response != "")
        <h4 class="text-danger font-monospace">{{$response}}</h4> 
        @endif
        
        
        <table class="table ">
            <form action="persistproductdetails" method="POST" enctype="multipart/form-data">
               
                {{ csrf_field() }}
                <tr>
                    
                    <td class="">
                        <img  width="100" height="100" id="print" class="rounded-circle img-fulid" />
                        <input type="text" name="imagecontent" value="image contents" hidden id="imgcontent" class="form-control" />
                    </td>
                    
                </tr>
                
                <tr>
                    <td>
                        <input type="file" name="img" id="img" class="form-control" required/>
                    </td>
                </tr>    
                             
                
                <tr>
                    <td></td>
                    
                </tr>
                <script>
                    
                   var imgContenttf = document.getElementById("imgcontent") ;
                   var viewImage = document.getElementById("print");
                   var  fileselector = document.getElementById("img");
                   var file = fileselector.files[0];
                   var encodeObj = btoa(file+"");
                   var decodeObj = "";
                   fileselector.addEventListener('change',function(event){
                        const filelist = event.target.files;
                        
                        const filecontent = filelist[0];
                        console.log(filecontent);
                        var reader = new FileReader();
                        reader.readAsDataURL(filecontent);
                        var out = "";
                        reader.onload = function(){
                          
                            out = reader.result;
                            imgContenttf.value = out;
                            
                            console.log(out);
                            viewImage.width = "300";
                            viewImage.height = "300";
                            viewImage.src = imgContenttf.value;
                           
                        }

                   });





                    
                </script>
                <tr>
                    <td><input type="text"  required class="form-control" name="company_name" placeholder="Brand name"></td>
                    
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="model_name" placeholder="Product title"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="category" placeholder="Category (Casual/Fromal)"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="price" placeholder="Price"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="sole" placeholder=" Manmade/Machine"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="closure" placeholder="Lace-Up/None"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="shoe_width" placeholder="Medium/Smaller/Larger"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="outer_material" placeholder="Rubber/Leather/Cloth"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="product_dimension" placeholder="Item Dimension Eg 28 x 19 x 10.5 Centemeters"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="date_first_available" placeholder="Date First Avalilable (Eg 18 November 2017)"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="manufacturer" placeholder="Enter Manufacturer names"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="asin" placeholder="ASIN no (Eg B077nBL4M)"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="item_model_number" placeholder="Model no (Eg SD0323G_WHBK0006)"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="department" placeholder="Mens/Ladies"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="packer" placeholder="Packers"></td>
                </tr>
                <tr>
                    <td><input type="text" required class="form-control" name="item_weight" placeholder="Wight (Eg 800g)"></td>
                </tr>
                
                <tr>
                    <td><input type="text" required class="form-control p-5" name="desc" placeholder="Description"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit"  value="Submit" class="btn btn-danger form-control">
                    </td>
                </tr>
                
            </form>
            
        </table>
    </div>
</div>
<script src="/js/plugins/jquery-3.4.1.min.js"></script>
<script src="/js/plugins/parallax.min.js"></script>
<script src="/js/plugins/moment.js"></script>
<script src="/js/plugins/bootstrap.js"></script>
@endsection