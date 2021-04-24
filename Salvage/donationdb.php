
<?php
include 'nav.php';
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

$sql = "INSERT INTO Donations (zip, email)
VALUES ('$_POST[zip]','$_POST[email]')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Thank you for your donations, all proceeds of donation goes towards organizations helping to reduce polution.</h1>";
  echo"<h1>Visit our about page to view the organizations we partner with.</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

