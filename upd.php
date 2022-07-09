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

$sql = "SELECT * FROM medicine";
$result = $link->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $unit = $_POST["unit"];
  $price = $_POST["Price"];
  $supplier = $_POST["supplier_name"];
  $company = $_POST["company"];

  $sql = "UPDATE medicine SET `name`='".$name."',`unit`='".$unit."',`price`='".$price."',
          `supplier_name`='".$supplier."',`company`='".$company."' WHERE id='".$_GET['up']."' ";

  if ($link->query($sql) ===  TRUE) {
    header('location:medicine.php');
  } else {
    echo $link->error;
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
  
  $sql1 = mysqli_query($link,"SELECT * FROM medicine WHERE id='".$_GET['up']."'");
  $row = $sql1->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="text" name="name" value='<?php echo $row['name']?>'><br>
    <input type="number" name="unit" value='<?php echo $row['unit']?>'><br>
    <input type="number" name="Price" value='<?php echo $row['price']?>'><br>
    <input type="text" name="supplier_name" value='<?php echo $row['supplier_name']?>'><br>
    <input type="text" name="company" value='<?php echo $row['company']?>'><br>
    
    <button>Update</button>
    </form>
</body>
</html>





