<html>
    
<head>
<style>
  body {
    background-color : 	 #3385ff;  
  }
  table, th, td {
  background-color : white;
}
  </style>
</head>

  

<body>
<?php

session_start();
if(isset($_SESSION['username']))
{
    echo "<h1 style='text-align:center'> Welcome $_SESSION[username]</h1>" ;
}




// Create connection
$conn = new mysqli("localhost","root","","project1");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
        $limit = 5;  

        $getQuery = "select *from login";    

        $result = mysqli_query($conn, $getQuery);  

        $total_rows = mysqli_num_rows($result);  

        $total_pages = ceil ($total_rows / $limit);

    if (!isset ($_GET['page']) ) {  

            $page_number = 1;  
    
        } else {  

            $page_number = $_GET['page'];      
        }    

        $initial_page = ($page_number-1) * $limit;   


        $getQuery = "SELECT *FROM  login LIMIT " . $initial_page . ',' . $limit;  

        $result = mysqli_query($conn, $getQuery);       

        echo"<table border='1' width='50%'>";
        while ($row = mysqli_fetch_array($result)) {  

            echo "<tr><td>".$row['Username'] . " </td><td> " . $row['Password'] ."</td></tr>";  
    
        }    

        for($page_number = 1; $page_number<= $total_pages; $page_number++) {  

            echo '<a href = "Paging.php?page=' . $page_number . '">' . $page_number . ' </a>';  
    
        }
        ?>
        </body>
        </html>