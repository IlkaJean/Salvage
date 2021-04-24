<?php
function OpenCon()
 {
 $dbhost = "127.0.0.1";
 $dbuser = "root";
 $dbpass = "fredline";
 $db = "salvage";
 $conn = new mysqli($dbhost, $dbuser, 1, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
