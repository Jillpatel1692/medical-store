<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";


// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
} 

$sql = "SELECT * FROM login";
$result = $link->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_id = $_GET["id"];
  $name = $_POST["Name"];
  $email = $_POST["Email"];
  $password = $_POST["Password"];
  $sql = "UPDATE login SET UserName='".$name."',Email='".$email."',Password='".$password."' WHERE Id='".$_GET['id']."'";
  if ($link->query($sql) === TRUE) {
    header('location:Display.php');
  } else {
    echo "Error updating record: " . $link->error;
  }
}
/*value=<?php echo"UserId"?>*/


$link->close();
?>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project1";
  
  // Create connection
  $link = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
  } 
  
  $sql1 = mysqli_query($link,"SELECT * FROM login WHERE Id='".$_GET['id']."'");
  $row = $sql1->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="text" name="Name" value='<?php echo $row['Username']?>'><br>
    <input type="text" name="Email" value='<?php echo $row['Email']?>'><br>
    <input type="text" name="Password" value='<?php echo $row['Password']?>'><br>
    <button>Update</button>
    </form>
</body>
</html>
<?php




