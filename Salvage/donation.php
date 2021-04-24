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
<form method="post" action="./donationdb.php">
<div class="form-group">
<input type="email" 
         class="form-control" 
         id="autocomplete" 
         placeholder="Email"
         name="email">

<input type="text" 
         class="form-control" 
         id="inputZip" 
         placeholder="Zip Code" 
         name="zip">

         <!-- <input type="text" placeholder="Email" name="zip" id="username" required> -->
  
  
         <!-- <hr> -->
         <input type="submit" value="Donate">
</div>
</form>
</body>