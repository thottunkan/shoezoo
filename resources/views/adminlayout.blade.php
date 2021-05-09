<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Zoo</title>
</head>

<header>

    <nav  class="container-fluid navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="width:100%"> 
        <a id="brand" class="nav-link font-monospace h4 font-weight-bold text-white font-monospace" href="#">
            <img data-scroll class="img-fluid rounded-circle" src="/img/shoe.jpeg" alt="" width="30" height="40" srcset="">
           SHOES ZOO (Admin Console)
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div   class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
          <ul  class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link h6 font-weight-light" href="../views/adminconsole.php"> <span class="sr-only"></span></a>
            </li>
            <div class="nav-item" >
              <a href="adminhome" class="nav-link font-monospace">ADMIN HOME</a>
            </div>
            <div class="nav-item" >
              <a href="addproduct" class="nav-link font-monospace">ADD PRODUCT</a>
            </div>
            <li class="nav-item">
                <a class="nav-link h6 font-weight-light font-monospace" href="/allcustomercart" >ALL CUSTOMER CART</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h6 font-weight-light font-monospace" href="/saledproducts" >SALED PRODUCTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link h6 font-weight-light font-monospace" href="/alluserdetails" >USER PROFILES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h6 font-weight-light font-monospace" href="/logout" >LOGOUT</a>
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
    @yield('content')
</body>

@extends('csscdn')

</html>