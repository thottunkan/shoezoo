<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_field()}}">
    
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}

    <title>Register</title>
   
  </head>
  <header>
    <nav  class="container-fluid navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="width:100%"> 
      <a id="brand" class="nav-link h4 font-weight-bold text-white font-monospace" href="/">
          <img data-scroll class="img-fluid rounded-circle" src="img/logo.png" alt="" width="33" height="30" srcset="">
         SHOES ZOO
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div   class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <ul  class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link h6 font-weight-light" href="../views/adminconsole.php"> <span class="sr-only"></span></a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link h6 font-weight-light" href="#about" ></a>
          </li>
          <li class="nav-item">
              <a class="nav-link h6 font-weight-light font-monospace" href="login" >LOGIN</a>
          </li>
        </ul>
        <!-- <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>


  </header>
  <body>
    
  <h3 class="font-monospace"></h3>
<div class="container img-fluid">
    <div class="row bg-danger img-fluid" style="width: 500px;margin:auto;margin-top: 10rem;">
      <div class="col-md-12">
          <table class="table table-borderless">
            <form action="/regcustomer" method="POST">
           
            <thead>
              <td>
                <h1 class="text-white font-monospace">Register</h1>
              </td>
            </thead>
            <p id="csrf" hidden>{{ csrf_token() }}</p>
            <tr>
             
             
              <td><input type="text" required class="form-control" id="name" name="name" placeholder="Name" ></td>
            </tr>
            <tr>
              
              <td><input type="email" required class="form-control" id="email" name="email" placeholder="Email"></td>
            </tr>
            <tr>
              
              <td><input type="text" required class="form-control" id="phone" name="phone" placeholder="Phone"></td>
            </tr>
            <tr>
              
              <td><input type="text" required class="form-control" id="username" name="username" placeholder="Email/Username"></td>
            </tr>
            <tr>
              <td>
                <input type="text" required class="form-control" id="password" name="password" placeholder="Password">
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" required class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" class="form-control" id="af1" name="af1" placeholder="Address Field 1">
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" class="form-control" id="af2" name="af2" placeholder="Address Field 2">
              </td>
            </tr>
            <tr>
              <td>
                <input type="text"  class="form-control" id="af3" name="af3" placeholder="Address Field 3" >
              </td>
            </tr>
            <tr>
              <td>
                <input type="text"  class="form-control" id="af4" name="af4" placeholder="Address Field 4" >
              </td>
            </tr>
            <tr>

              <td>
                <input type="button"  id="registerbtn" value="Register" class="btn btn-dark text-white form-control">
              </td>
            </tr>
          </form>
          <script src="js/plugins/jquery-3.4.1.min.js"></script>
          <script>
              function _(id){
                return document.getElementById(id);
              }
              $(document).ready(function(){
                $("#registerbtn").click(function(){
                   var name = $("#name").val();
                   var email = $("#email").val();
                   var phone = $("#phone").val();
                   var username = $("#username").val();
                   var password = $("#password").val();
                   var cpassword = $("#cpassword").val();
                   var af1 = $("#af1").val();
                   var af2 = $("#af2").val();
                   var af3 = $("#af3").val();
                   var af4 = $("#af4").val();
                   
                   var csrf = $("#csrf").html();
                   alert("csrf "+csrf);
                   
                   $.ajax({
                     headers:{
                       "X-CSRF-TOKEN":csrf
                     },
                     url:"regcustomer"
                     ,
                     method:"POST"
                     ,
                     data:{
                       name:name,
                       email:email,
                       phone:phone,
                       username:username,
                       password:password,
                       af1:af1,
                       af2:af2,
                       af3:af3,
                       af4:af4
                     }  , 
                     success:function (data) {
                        console.log(data);
                        
                         $("#registerbtn").val(data);
                    
                      }               
                   });
                });
              });
              
              
        
          </script>
          </table>
      </div>
    </div>

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
  </body>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  --> --}}
  @extends('javascriptcdn')
  @extends('csscdn')
</html>