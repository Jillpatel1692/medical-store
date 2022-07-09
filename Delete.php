<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projd1";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM login";
$result = $conn->query($sql);
 
// Attempt delete query execution
$sql = "Update login SET Status=0 WHERE Id = '".$_GET['un']."'";
if($conn->query($sql) === TRUE){
    header('location:Display.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>