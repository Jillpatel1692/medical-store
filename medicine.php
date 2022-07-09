<!-- <!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>MSMS/Medicine search  Page</title>
    <style>
    table, th, td {
      border: 1px solid;
      border-collapse: collapse;
      background-color : #ADD8E6;
    }
</style>
  </head>
  <body>
  <p><h1 align="center">Medical Store Management System</h1></p>
        <p><h2 align="center">Medicine Page</h2></p>

    <div class="container">
        <div class="row">
            <div class="col-nd-12 at 4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">search filter with id </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-nd-6">

                                <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" name="id" class="form-control" placeholder="Enter ID" required>
                                </div><br>
                                <button type="submit" name="search_id" class="btn btn-primary">Search</button> 
                                </form>

                            </div>
                        </div>
                        <?php
                        $conn = mysqli_connect("localhost", "root",  "", "projd1");
                        if(isset($_POST['search_id']))
                        {
                            $id = $_POST['id'];
                            $query = "SELECT * FROM medicine WHERE CONCAT(id,name,supplier_name,company) LIKE '%$id%'";
                            $query_run = mysqli_query($conn, $query);

                           
                                   
                                
                       
                       
                        ?>
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col"></th>
                                <th scope="col">id</th>
                                <th scope="col">name</th>
                                <th scope="col">unit</th>
                                <th scope="col">price</th>
                                <th scope="col">company price</th>
                                <th scope="col">supplier_name</th>
                                <th scope="col">company</th>
                                <th scope="col">quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                     if(mysqli_num_rows($query_run) > 0)
                                     {
                                         while($row = mysqli_fetch_array($query_run))
                                         {
                                ?>
                                <tr>
                                <th scope="row"></th>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['unit']; ?></td>
                                <td><?php  echo $row['price']; ?></td>
                                <td><?php  echo $row['company_rs']; ?></td>
                                <td><?php  echo $row['supplier_name']; ?></td>
                                <td><?php  echo $row['company']; ?></td>
                                <td><?php  echo $row['quantity']; ?></td>
                                
                                </tr>
                                <tr>
                                <?php
                                        }
                                    }
                                    else 
                                    {
                                        ?>
                                        <tr>
                                            <td colspan='6'>No Data Avaliable</td>
                                    </tr>
                                        <?php

                                    }
                                ?>
                            </tbody>
                        </table>        
                        </div>
                        <?php
                         }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>  



<br>
<br>

<html>
<head>
   <title>MSMS/Medicine Page</title>
</head>
<body>

<!-- <form action="/action_page.php">
      <input type="text" placeholder="Search" name="search">
      <button type="submit">Submit</button>
    </form>  -->
  
</body>
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

$result1 = mysqli_query($conn,"SELECT * FROM medicine");

$limit = 5;
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
  echo "<table class ='center11' border=1>
  <tr>
  <th> id </th>
  <th> name </th>
  <th> unit </th>
  <th> price </th>
  <th>company rs</th>
  <th> supplier name </th>
  <th> company </th>
  <th>quantity</th>
  <th>upd/del</th>
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['unit']."</td><td>".$row['price']."</td><td>".$row['company_rs']."</td><td>".$row['supplier_name']."</td><td>".$row['company']."</td><td>".$row['quantity']."</td><td>
          <a href= './upd.php?up=".$row['id']."'>Update</a>
          <a href= './del.php?de=".$row['id']."'>Delete</td></tr>";
  }
  
  echo "</table>";
} else {
  echo "0 results";
}

for($page_number = 1; $page_number<= $total_pages; $page_number++) {
  echo '<a href = "medicine.php?page=' . $page_number . '">' . $page_number . ' </a>';  
}

mysqli_close($conn);
?>
</div>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
  .center11{
    background-color : #ADD8E6;
    margin-left: 8%;
   
  }
  th, td {
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

</body>
</html>
