<?php 
 //session_start();

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


$result1 = mysqli_query($link,"SELECT * FROM medicine");

$limit = 2;
$total_rows = mysqli_num_rows($result1);  
$total_pages = ceil ($total_rows / $limit);

if (!isset ($_GET['page']) ) { 
  $page_number = 1;  
} else {  
  $page_number = $_GET['page'];      
}    
$initial_page = ($page_number-1) * $limit; 

$sql = "SELECT * FROM medicine  LIMIT  $initial_page,$limit";
$result = $link->query($sql);
if (isset($_post['purchase_btn'])) {
    // $sql = "SELECT * FROM medicine1";
    
    // $name = $_POST["name"];
    // $price = $_POST["Price"];
    // $supplier = $_POST["supplier_name"];
    // $company = $_POST["company"];
    // $unit = $_POST["unit"];
    // $id = $_POST["id"];

    if ($result->num_rows > 0) {
      echo "<table border=1>
      <tr>
      <th> id </th>
      <th> name </th>
      <th> unit </th>
      <th> price</th>
      <th>company price</th>
      <th> supplier name </th>
      <th> company </th>
      <th>upd/del</th>
      </tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td>
        <td>".$row['unit']."</td>
        <td>".$row['price']."</td>
        <td>".$row['company_rs']."</td>
        <td>".$row['supplier name']."</td>
        <td>".$row['company']."</td><td>
              </tr>";
      }
      
      echo "</table>";
    } else {
      echo "0 results";
    }
    
    for($page_number = 1; $page_number<= $total_pages; $page_number++) {
      echo '<a href = "stockpur.php?page=' . $page_number . '">' . $page_number . ' </a>';  
    }
  }
    mysqli_close($link);
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MSMS/Stock</title>
  <style>
      
      table, th, td {
      background-color : #ADD8E6;
    }
    body {
          background-image : url("./image/img2.jpg"); 
          
          background-repeat : no-repeat ,repeat;
          background-size: 1800px 800px;
    }
  </style>
</head>
<body>
<h1 align="center">Medical Store Management System</h1>  
<h2 align="center">stock</h2>  
</body>
</html>

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

$result1 = mysqli_query($conn,"SELECT * FROM medicine");

$limit = 6;
$total_rows = mysqli_num_rows($result1);  
$total_pages = ceil ($total_rows / $limit);

if (!isset ($_GET['page']) ) { 
  $page_number = 1;  
} else {  
  $page_number = $_GET['page'];      
}    
$initial_page = ($page_number-1) * $limit; 

$sql = "SELECT * FROM medicine  LIMIT  $initial_page,$limit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1>
  <tr>
  <th> id </th>
  <th> name </th>
  <th> unit </th>
  <th> price </th>
  <th>company price</th>
  <th> supplier name </th>
  <th> company </th>
  <th> quantity </th>
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['unit']."</td>
    <td>".$row['price']."</td>
    <td>".$row['company_rs']."</td>
    <td>".$row['supplier_name']."</td>
    <td>".$row['company']."</td>
    <td>".$row['quantity']."</tr>";
  }
  
  echo "</table>";
} else {
  echo "0 result";
}

for($page_number = 1; $page_number<= $total_pages; $page_number++) {
  echo "<a href = 'stockpur.php?page=  $page_number'>$page_number </a>";  
}

mysqli_close($conn);
?>