<!-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>MSMS/Medicine search  Page</title>
   
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
                            $query = "SELECT * FROM medicine WHERE id='$id'";
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
                                <td><?php  echo $row['price(per_unit)']; ?></td>
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



