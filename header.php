<?php

//session_start();

function make_header() {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jejeti</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .navbar-nav.navbar-center {
        position: absolute;
        left: 50%;
        transform: translatex(-56%);
      }
      .row-footer {
        position: relative;
        left: 50%;
        transform: translatex(-50%);
      }
    </style>
</head>


      
<nav class="navbar navbar-expand-lg navbar-light bg-warning">

  <a class="navbar-brand" href="index.php">
    <img src="jejetilogo.png" width="50" height="50" alt="brand-index-page-link"> Jejeti
  </a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Shop
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Category1</a>
          <a class="dropdown-item" href="#">Category2</a>
          <a class="dropdown-item" href="#">Category3</a>
          <a class="dropdown-item" href="/shopping_cart.php">Shopping Cart</a>
        </div>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-center">
      <li>  
      <!-- Idea: Similar to amazon's search bar will query base on category or all -->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
      </div>


      </li>

    </ul>
    <ul class="nav navbar-nav justify-content-end">
        <li>
          <a href="/shopping_cart.php" style="text-decoration: none;">
            <?php cart_counter(); ?>
          <img width="30" height="30" alt="shopping-cart" src="shopping-cart-solid.svg"/>
          </a>
        </li>
    </ul>
    
  </div>





</nav>








<body>
    





<?php
}


?>