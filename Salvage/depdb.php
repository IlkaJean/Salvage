
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

$sql = "INSERT INTO Departments (pId, dep)
VALUES ('$_POST[pId]','$_POST[dep]')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Department table updated successfully!</h1>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

