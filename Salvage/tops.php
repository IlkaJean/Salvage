<!DOCTYPE html>
<html>
<head>
        <title>Salvage</title>
        <link rel="stylesheet" href="./home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>    
<!-- <img src="img/<?php echo $result; ?>.png">  -->
<?php
include 'nav.php';
$servername = "localhost";
$username = "root";
$password = "fredline";
$database = "salvage";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT productId, productName, productPrice, productCat, productImg FROM Products";
$result = $conn->query($sql);

?>

<!-- output data from database -->
<!-- container section, row does not need to be in for loop -->
<div class="cont">

<div class="row">
 <?php
 
  while ($row = $result->fetch_assoc()){
   ?>
    
        <div class="column">
      
        <a href="functions.php?page=product&id=<?=$row['productId']?>">
          <?php 
          if($row["productCat"]=="Tops"){
          echo "<img style='max-width:100%;
//         max-height:100%;' src=". $row["productImg"]. ">"."<br>".$row["productName"]."<br>"."$".$row["productPrice"];?>
      </a>
</div>
     

   <?php
          }
  }
 ?>
   </div>
</div>
 <?php
?>

</body>
</html