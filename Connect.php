<?php
$servername = "localhost"; 
$username_server = "root";
$password_server = "";
$db = "career";
$conn = mysqli_connect($servername, $username_server);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>