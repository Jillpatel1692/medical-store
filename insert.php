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

$sql = "SELECT * FROM login";
$result = $link->query($sql);


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["Name"];
  $email = $_POST["Email"];
  $password = $_POST["Password"];

  if($name!=NULL && $email!=NULL && $password!=NULL)
  {
    $sql = "INSERT INTO login ( Username, Email, Password, status)
            VALUES ( '$name' , '$email' , '$password' , 1)";
  }
  else
  {
    echo "Invalid input";
  }

  if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $link->error;
  }

}

//$conn->close();
mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <form method="post">
  <input type="text" name="Name" placeholder="Username"><br>
  <input type="text" name="Email" placeholder="email"><br>
  <input type="text" name="Password" placeholder="Password"><br>
  <button>Sign Up</button>
  </form>
    
</body>
</html>