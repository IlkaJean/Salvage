<html>
<head>
<link rel="stylesheet" href="./home.css">
</head>
<body>
<?php
include 'nav.php';
// Check to make sure the id parameter is specified in the URL
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

$sql = "SELECT productId, productName, productPrice, productCat, productImg , productQuant FROM Products";
$product = $conn->query($sql);

global $product;
global $pdo;
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {

    // $product = mysql_query("SELECT productId, FROM Products");
    // Prepare statement and execute, prevents SQL injection
    // $pdo = new PDO('mysql:host=localhost;dbname=salvage', $username, $password);
    //$stmt = $pdo->prepare('SELECT * FROM Products WHERE id = ?');

   //$stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    //$product = $stmt->fetch(PDO::FETCH_ASSOC);
   
    // Check if the product exists (array is not empty)
//     if (!$product['productId']) {
//         // Simple error to display if the id for the product doesn't exists (array is empty)
//         exit('Product does not exist!');
//     }
// } else {
//     // Simple error to display if the id wasn't specified
//     exit('Product does not exist!');
// }
}
?>


<div class="product content-wrapper">

 <?php
 
  while ($row = $product->fetch_assoc()){
      if($row['productId']==$_GET['id']){
   ?>
    
        <div >
        <h1 name="product_name" class="name"><?=$row['productName']?></h1>
        <span name = "product_price" class="price">
            &dollar;<?=$row['productPrice']?>
           
        </span>

          <?php echo "<img style='width:300px;
//         height:500px;' src=". $row["productImg"]. ">";?>
<form action="functions.php?page=cart" method="post">
            <input style='width:80px;' type="number" name="quantity" value="1" min="1" max="<?=$row['productQuant']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$row['productId']?>">
            <input type="submit" value="Add To Cart">
        </form>
</div>
     

   <?php
  }}
 ?>

   </div>




</body>
</html>