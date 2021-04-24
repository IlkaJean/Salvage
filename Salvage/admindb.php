<?php
include 'adminnav.php';
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

	
// productId
// productName
// productPrice
// productCat
// productImg
// productQuant
$sql = "INSERT INTO Products (productId, productName, productPrice, productCat, productImg, productQuant)
VALUES ('$_POST[id]', '$_POST[name]','$_POST[price]', '$_POST[cat]', '$_POST[img]', '$_POST[quant]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<div>

