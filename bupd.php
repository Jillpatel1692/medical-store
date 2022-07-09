<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projd1";


// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
} 

$sql = "SELECT * FROM medicine";
$result = $link->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Mname = $_POST["medicine"];
  $unit = $_POST["Price"];
  $price = $_POST["Price(per_unit)"];

  $sql = "UPDATE bills SET `medicine`='".$Mname."',`Price`='".$unit."',`price(per unit)`='".$price."'
          WHERE id='".$_GET['bup']."' ";
  if ($link->query($sql) ===  TRUE) {
    header('location:bills.php');
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
  
  $sql1 = mysqli_query($link,"SELECT * FROM bills WHERE id='".$_GET['bup']."'");
  $row = $sql1->fetch_assoc();
?>

<!DOCTYPE html>
<html >
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="text" name="medicine" value='<?php echo $row['medicine']?>'><br>
    <input type="number" name="Price" value='<?php echo $row['Price']?>'><br>
    <input type="number" name="Price(per_unit)" value='<?php echo $row['price(per unit)']?>'><br>
    <button>Update</button>
    </form>
</body>
</html>
