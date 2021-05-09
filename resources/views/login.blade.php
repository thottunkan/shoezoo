<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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
<body style="background-color: #e3e6eb;">
    <div class="container-fluid " style="margin-top: 68px;">
        <div class="container" style="margin-top: 300px;">
            <div class="row  img-fluid bg-danger rounded border" style="margin-top:200px;width: 500px;margin: auto;">
               <div class="col">
                   <table class="table table-borderless ">
                       
                       
                       <form method="POST" action="authuser">
                        {{ csrf_field() }}   
                       <thead class="pt-5">
                           <tr>
                               <h2 class="text-white font-monospace">Login</h2>
                           </tr>
                       </thead>
                       <tr>
                            <input type="text"  required class="form-control" name="username" placeholder="Enter username"><br>
                       </tr>
                       <tr>
                            <input type="text" required class="form-control" name="password" placeholder="Enter password"><br>
                       </tr>
                       <tr>
                            <input type="submit" value="Login" class="btn btn-dark form-control">

                       </tr>
                       </form>
                       <tr>

                            <td><a href="register" class="nav-link text-primary">Not a member Register</a></td>
                            <td><a href="" class="nav-link text-primary">Forgot password?</a></td>
                       </tr>
                   </table>
               </div>
            </div>
        </div>
    </div>
</body>
<script src="/js/plugins/jquery-3.4.1.min.js"></script>
<script src="/js/plugins/parallax.min.js"></script>
<script src="/js/plugins/moment.js"></script>
<script src="/js/plugins/bootstrap.js"></script>
@extends('csscdn')
</html>