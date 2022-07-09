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

$sql = "SELECT * FROM medicine";
$result = $conn->query($sql);

// Attempt delete query execution
$sql = "DELETE  FROM medicine  WHERE id = '".$_GET['de']."'";
if($conn->query($sql) === TRUE){
    //header('location:Display.php');

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
//mysqli_close($link);
?>