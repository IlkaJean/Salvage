
<?php



 if (isset($_GET['logout'])) {
    
    unset($_SESSION['login_user']);
    session_unset();
    session_destroy();
    header("location: login.php");
}





?>

<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="./nav.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- first nav -->


<h4 class="logo"><a href="./admin.php">Salvage</a></h4>

<!-- second nav -->
<form method="get" action="./adminnav.php">
<div class="topnav" id="myTopnav">


  <div class="dropdown" style="float:right;margin:0 0.5%;">
    <button class="dropbtn" name="logout">Logout
     
    </button>

    </div>
  </div> 
</div>
</form>

</body>
</html>