<!DOCTYPE html>
<html lang="en">
<head>
<style>
   table, th, td {
      background-color : #ADD8E6;
      height : 50px;
      width : 20%;
    }
    body {
          background-image : url("./image/img2.jpg"); 
          
          background-repeat : no-repeat ,repeat;
          background-size: 1800px 800px;
    }
    
  </style>
  <title>MSMS/Bills</title>
</head>
<body>
<p><h1 align="center">Medical Store Management System</h1></p>
<p><h2 align="center">Bills</h2></p>
  <div align="center">
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

$sql = "SELECT * FROM bills";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1 >
  <tr>
  <th> id </th>
  <th> Mname </th>
  <th> unit </th>
  <th> price </th>
   <th> company price</th>
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['id']."</td><td>".$row['medicine']."</td><td>".$row['unit']."</td><td>".$row['price']."</td><td>".$row['company_rs'].
    "</td><td><a href= 'bpdf.php?bup=".$row['id']."'>Print</a>";
    
  }
  
  echo "</table>";
  
  echo"<tr>
  <td> <a href= 'bpdf.php?' >Print</a></td>
  </tr>";
} else {
  echo "0 results";
}



mysqli_close($conn);
?>
</div>
</body>
</html>
