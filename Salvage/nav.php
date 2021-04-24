<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="./nav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- first nav -->


<h4 class="logo"><a href="./home.php">Salvage</a></h4>


<!-- second nav -->
<div class="topnav" id="myTopnav">
  <!-- <a href="#" >SALVAGE</a> -->
  
  <!-- <a href="#">Blog</a> -->
  <div class="dropdown">
    <button class="dropbtn">Categories
      <i class="fa fa-caret-down"></i>
    </button>

    <!-- part of class animate -->
    <div class="dropdown-content mega-menu "> 
      <ul>
      <li class="title">Clothes</li>
      <li class="animate"><a href="./dresses.php">Dresses</a></li>
      <li class="animate"><a href="./skirts.php">Skirts</a></li>
      <li class="animate"><a href="./tops.php">Tops</a></li> 
      <li class="animate"><a href="./pants.php">Pants</a></li>
     <li class="animate"><a href="./outwear.php">Outwear</a></li> 
      </ul>

      <ul>
      <li class="title">Shoes</li>
      <li class="animate"><a href="">Boots</a></li>
      <li class="animate"><a href="">Sneakers</a></li>
      <li class="animate"><a href="">Heels</a></li>
     <li class="animate"><a href="">Flat Sandals</a></li> 
     <li class="animate"><a href="">Pumps</a></li>
     <li class="animate"><a href="">Flat Shoes</a></li>
      </ul>

       <ul>
      <li class="title">Handbags</li>
      <li class="animate"><a href="">Beach Bags</a></li>
      <li class="animate"><a href="">Mini Bags</a></li>
      <li class="animate"><a href="">Totes</a></li>
     <li class="animate"><a href="">Wallets</a></li> 
     <li class="animate"><a href="">Clutches</a></li>
     <li class="animate"><a href="">Crossbody</a></li>
      </ul>
    
    </div>
  </div> 


  <a href="./donation.php" id="donate">Donate</a>
  <a href="./login.php" target="_blank">Admin Login</a>
  <div class="dropdown" style="float:right;margin:0 0.5%;">
    <button class="dropbtn">USD 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content animate" style="min-width:80px;">
      <a href="#">USD</a>
      <a href="#">RUP</a>
    </div>
  </div> 
  <!-- <a href="#" style="float:right;margin:0 0%;"><i class="fa fa-shopping-cart"></i></a> -->
  <form action="functions.php?page=cart" method="post">
  <button  class= "cart" style="float:right; margin-top:15px; border:none; background-color:#5D4954; font-size:20px; color:white;"><i class="fa fa-shopping-cart"></i></button>
  </form>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>






    <script src="./nav.js"></script>
<?php


?>

</body>
</html>