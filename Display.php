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

$result1 = mysqli_query($conn,"SELECT * FROM login");

$limit = 2;
$total_rows = mysqli_num_rows($result1);  
$total_pages = ceil ($total_rows / $limit);

if (!isset ($_GET['page']) ) { 
  $page_number = 1;  
} else {  
  $page_number = $_GET['page'];      
}    
$initial_page = ($page_number-1) * $limit; 

$sql = "SELECT * FROM login where Status=1 LIMIT  $initial_page,$limit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1>
  <tr>
  <th> Id </th>
  <th> Username </th>
  <th> Email </th>
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['Id']."</td><td>".$row['Username']."</td><td>".$row['Email']."</td><td>
          <a href= './Update.php?id=".$row['Id']."'>Update</a>
          <a href= './Delete.php?un=".$row['Id']."'>Delete</td></tr>";
  }
  
  echo "</table>";
} else {
  echo "0 results";
}

for($page_number = 1; $page_number<= $total_pages; $page_number++) {
  echo '<a href = "Display.php?page=' . $page_number . '">' . $page_number . ' </a>';  
}

mysqli_close($conn);
?>

