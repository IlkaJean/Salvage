<?php
include 'nav.php';
    //session_start();
  
?>
<head>
<style>
input, label {
  margin: 5px 5px;
}

.form-group {
  margin: 30px auto;
  width: 450px;
}

.form-control {
  float: left;
}

#inputStreet {
  width: 100%;
}

#inputCity {
  width: 50%;
}

#inputState {
  width: 15%;
}

#inputZip {
  width: 28%;
}

#inputCounty {
  width: 45%;
}

#inputCountry {
  width: 50%;
}


</style>
</head>
<body>
<h1>Update Product Details</h1>
<form method="post" action="./pdetailsdb.php">
<div class="form-group">

<input type="text" 
         class="form-control" 
         id="inputZip" 
         placeholder="Product Id" 
         name="pid">
<input type="text" 
         class="form-control" 
         id="inputZip" 
         placeholder="Item Color" 
         name="color">
<input type="text" 
         class="form-control" 
         id="inputZip" 
         placeholder="Size" 
         name="size">

         <!-- <input type="text" 
         class="form-control" 
         id="inputZip" 
         placeholder="Price" 
         name="price">

         <input type="text" 
         class="form-control" 
         id="autocomplete" 
         placeholder="Category"
         name="cat">

<input type="text" 
         class="form-control" 
         id="inputZip" 
         placeholder="/img/image.png" 
         name="img">


<input type="text" 
         class="form-control" 
         id="inputZip" 
         placeholder="Quantity" 
         name="quant"> -->

         <!-- <input type="text" placeholder="Email" name="zip" id="username" required> -->
  
  
         <hr>
         <input type="submit" value="Enter">
</div>
</form>
<a href="./admin.php">Update Products</a><br>
<a href="./pdetails.php">Update Products Details</a><br>
<a href="./suppliers.php">Update Suppliers</a><br>
</body>