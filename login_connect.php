<?php
// session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projd1";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  
}

?>

