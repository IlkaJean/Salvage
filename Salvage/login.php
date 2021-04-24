<?php
//include 'nav.php';
include 'logindb.php' ;
// end session adn remove item from cart :) 
//session_unset();
//session_destroy();
 if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
//echo '<pre>' . print_r($_POST['username'] ,TRUE) . '</pre>';
// $name = $_POST['username'];
// $_SESSION['username'] =$_POST['username'];
// if(isset($_SESSION['username'])){
//     echo $name;
// }
// else{
//     echo 'username not set';
// }

// echo '<pre>' . print_r($_POST ,TRUE) . '</pre>';
// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
// if(isset($_POST['login_user'])) {
//     $user= $_POST['username'];
//     //$_SESSION['username'] = $_POST['username'];
// }
?>

<!-- <div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed</h1>
    <p>Thank you for ordering with us, we'll contact you by email with your order details.</p>
</div> -->

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./logreg.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<form method="post" action="./login.php">
<?php include('errors.php'); ?>

  <div class="container">
    <h1>Login</h1>
    <p>Login to manage database.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <hr>
    <button type="submit" name="login_user" class="registerbtn">Login</button>
  </div>
  
  <!-- <div class="container signin">
    <p>Don't have an account? <a href="./register.php">Sign Up</a>.</p>
  </div> -->
  
  <div class="container signin">
    <p>Don't have an account? Contact HR department to setup an account.</a>.</p>
  </div>



</form>

</body>
</html>

