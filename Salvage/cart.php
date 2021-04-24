<html>
<head>
<!-- <link rel="stylesheet" href="./cart.css"> -->
</head>
<body>
<?php 


?>
<?php 
// session_start();
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $servername = "localhost";
    $username = "root";
    $password = "fredline";
    $database = "salvage";
    $con = new mysqli ($servername, $username, $password, $database);
    try {
    	return new PDO('mysql:host=' . $servername . ';dbname=' . $database. ';charset=utf8', $username, $password);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
?>
<?php
include 'nav.php';
$pdo= pdo_connect_mysql();
$product_id;
$quantity;
// $_SESSION['username'];
// productId, productName, productPrice, productCat, productImg
// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['quantity']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
   
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    // Prepare the SQL statement, we basically are checking if the product exists in our databaser
    $stmt = $pdo->prepare('SELECT * FROM Products WHERE productId = ?');
    $stmt->execute([$_POST['product_id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if ($product && $quantity > 0) {
        // Product exists in database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$product_id] += $quantity;
                //$_SESSION['quantity']=$quantity;
                //$sql = "UPDATE Products SET productQuant=$quantity WHERE productId=$product_id";
                
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    // Prevent form resubmission...
    header('location: functions.php?page=cart');
   
    exit;
}

// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}

// Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('location: functions.php?page=cart');
    exit;
}

// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
// if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
//    header('Location: functions.php?page=login');
//    //$query = "INSERT INTO Orders (  oders, quant) 
//    //VALUES('$product_id;',  '$quantity')";
//      //header('Location: functions.php?page=placeorder');
//     // 
//     //echo $_SESSION['cart'];
// if(isset($_SESSION[$username])){
//     header('Location: functions.php?page=placeorder'); 
// }

//     exit;  
// }


//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';




if(isset($_POST['placeorder']) &&  isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
$_SESSION['go_to_checkout']=True;
header('Location: functions.php?page=placeorder');


//$page = $_SERVER["REQUEST_URI"];
//$_SESSION['page'] = $page;
//echo "http://".$_SERVER['SERVER_NAME'].$_SESSION['page'];

    exit;
}
// else{
//     var_dump( '<pre>' . print_r($_POST, TRUE) . '</pre>');
//     die("END");
// }
// else{
//     die("S");
// }

// if (isset($_SESSION['username'])==true){
//     //header('Location: functions.php?page=cart&username');
//     //$_SESSION['session_copy'] = $_SESSION['cart'];
//     //echo "http://".$_SERVER['SERVER_NAME'].$_SESSION['page'];
//     //$go = "http://".$_SERVER['SERVER_NAME'].$_SESSION['page'];
//     //$_SESSION['username'] = "";
//     header("Location:index.php");
//     //location.reload();
//     exit;
// }


// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
$pPrice = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM Products WHERE productId IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    
    foreach ($products as $product) {
        $pPrice = (float)$product['productPrice'];
        // $SESSION['pPrice']=$pPrice;
        $subtotal += $pPrice * (int)$products_in_cart[$product['productId']];
    }
}
//$SESSION['pPrice']=$pPrice;
$_SESSION['totol']=$subtotal;
?>


<div class="cart content-wrapper">
    <h1>Shopping Cart</h1>
    <form action="functions.php?page=cart"  method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td class="img">
                        <a href="functions.php?page=product&id=<?=$product['productId']?>">
                            <img src="img/<?=$product['productImg']?>" width="50" height="50" alt="<?=$product['productName']?>">
                        </a>
                    </td>
                    <td>
                        <a href="functions.php?page=product&id=<?=$product['productId']?>"><?=$product['productName']?></a>
                        <br>
                        <a href="functions.php?page=cart&remove=<?=$product['productId']?>" class="remove">Remove</a>
                    </td>
                    <td class="price">&dollar;<?=$product['productPrice']?></td>
                    <td class="quantity">
                        <input type="number" name="quantity-<?=$product['productId']?>" value="<?=$products_in_cart[$product['productId']]?>" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    </td>
                    <td class="price">&dollar;<?=$product['productPrice'] * $products_in_cart[$product['productId']]?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <span class="price">&dollar;<?=$subtotal?></span>
        </div>
        <div class="buttons">
            <input type="submit" value="Update" name="update">
            <input type="submit" value="Place Order" name="placeorder"  >
        </div>
    </form>
</div>

</body>

</html>