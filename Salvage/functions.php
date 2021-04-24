<!DOCTYPE html>
<html>
<head>
        <title>Salvage</title>
        <link rel="stylesheet" href="./home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>    

<?php
session_start();


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


// if ($result->num_rows > 0) {
//     // output data of each row
  
//     while($row = $result->fetch_assoc()) {
//         // echo "<br> productId: ". $row["productId"]. " - Name: ". $row["productName"]. " " . $row["productPrice"] . 
//         // " ".$row["productCat"]. " ".$row["productImg"]. "<br>";
//         echo "<div  style='height:400px; width:300px; display=inline'>"."<img style='max-width:100%;
//         max-height:100%;' src=". $row["productImg"]. ">"."<br>".$row["productName"]." </div>";
//         // <a href="Test.html?ID=' . $i . '"> Sample text </a>';
//     }
// } else {
//     echo "0 results";
// }

// $conn->close();

$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';

?>

<!-- output data from database -->
<!-- container section, row does not need to be in for loop -->


</body>
</html