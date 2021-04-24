<?php
include 'nav.php';
// end session adn remove item from cart :) 
//echo '<pre>' . print_r($_SESSION['cart'], TRUE) . '</pre>';
$servername = "localhost";
    $username = "root";
    $password = "fredline";
    $database = "salvage";
    $con = new mysqli ($servername, $username, $password, $database);
    foreach($_SESSION['cart'] as $key => $product):
        //$sql = "UPDATE Products SET productQuant=99 WHERE productId=16";
        echo $product;
        //echo $key;
        $pr = "SELECT productPrice FROM `Products` WHERE productId=$key";
        $result = $conn->query($pr);
        $price;
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              //echo "id: " . $row["productId"]. " - Name: " . $row["productName"]. " " . $row["productPrice"]. "<br>";
              $price = $row["productPrice"];
            }
          } else {
            echo "0 results";
          }
          echo $price;
        // while ($row = mysql_fetch_assoc($query))
        //     $pr= $row['productPrice'];
        // echo $pr;
        //$price=$product* 'Select from Products';
        $sql = ('UPDATE Products SET productQuant = productQuant - '. $product .' WHERE productId = '. $key .' ');
        $sql2 = "INSERT INTO Orders (itemId, quant)
         VALUES ( $key, $product)";
     endforeach; 
     if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE ) {
         echo "Record updated successfully";
       } else {
         echo "Error updating record: " . $conn->error;
       }
       
       $conn->close();
session_unset();
session_destroy();

?>


<div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed</h1>
    <p>Thank you for ordering with us, we'll contact you by email with your order details.</p>
</div>



