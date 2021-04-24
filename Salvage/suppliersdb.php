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
$sql = "INSERT INTO Suppliers (CompanyName, email, pID)
VALUES ('$_POST[cp]', '$_POST[email]', '$_POST[pId]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<div>

