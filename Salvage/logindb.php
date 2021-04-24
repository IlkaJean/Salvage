<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'fredline', 'salvage');



// LOGIN USER
//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
//echo '<pre>' . print_r($_POST, TRUE) . '</pre>';
if (isset($_POST['login_user'])) {
    
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['psw']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    // echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM Admins WHERE username='$username' AND password='$password' ";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            if(isset($_SESSION['username'])){
                header('location: functions.php?page=admin');
            }
        //$_SESSION['username'] = $username;
          //$_SESSION['success'] = "You are now logged in";
          header('location: functions.php?page=admin');
         
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>