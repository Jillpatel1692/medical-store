<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projd1";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if($conn->connect_error){
			die("ERROR: Could not connect. ". mysqli_connect_error());
		}
		
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
		// Taking all 5 values from the form data(input)
		$medicine = $_POST['Medicine'];
		$unit = $_POST['unit'];
		$price = $_POST['price'];
    $company_rs = $_POST['company_rs'];
		$supplier = $_POST['supplier'];
        $company = $_POST['company'];
        $quantity = $_POST['quantity'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO medicine (`name`,`unit`,`price`,`company_rs`,`supplier_name`,`company`,`quantity`) VALUES ('$medicine','$unit','$price','$company_rs','$supplier','$company','$quantity')";
		$result = $conn->query($sql);
		if ($conn->query($sql) ===  TRUE) {
            header('location:home.php');
            echo "Good Job";
          } else {
            echo $conn->error;
          }
    }
		// Close connection
		mysqli_close($conn);
		?>
<html>
<head>
   <title>MSMS/Add medicine</title>
</head>
<body>
<div class="chat-container-one, center" >
        <p><h1 align="center">Medical Store Management System</h1></p>
        <p><h2 align="center">Add Medicine Form</h2></p>
        <Form method="POST">
        
         <input type="text" id="medicine" name="Medicine"class="input" placeholder="medicine"><br>
         <input type="number" id="unit" name="unit" class="input" placeholder="unit"><br>
         <input type="number" id="price" name="price" class="input" placeholder="price"><br>
         <input type="number" id="company_rs" name="company_rs" class="input" placeholder="company_rs"><br>
         <input type="nymer" id="quantity" name="quantity"class="input" placeholder="quantity"><br>
         <input type="text" id="supplier" name="supplier"class="input" placeholder="supplier"><br>
         <input type="text" id="company" name="company"class="input" placeholder="company"><br>
         
       
       <div class="button1">
        <input class="b3"type="submit" class="button1" value="Submit">
      </div>
    </form>
    
    <style>
       
    body {
          background-image : url("./image/img2.jpg"); 
          
          background-repeat : no-repeat ,repeat;
          background-size: 1800px 800px;
    }
  .chat-container-one {
      background-color:palevioletred;
      border-radius: 3%;
      max-width: 30%;
      height: 50%;
      text-align: center;
  }
 
  .center {
    margin: auto;
    width: 30%;
    height: 75%;
    border-radius: 5%;
    border: 1px solid white;
    background-color:#ADD8E6;
    padding: 10px;
  }
  .input[type=text] {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
  }
  .input[type=password] {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
  }
  .button {
    border: 1em;
    border-radius: 0.3em;
    background-color: #ff1ac6;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 6em;
    margin: 4px 2px;
    
  }
  .b3[type=submit]{
    width: 18%;
    height: 4%;
    margin: auto;
    background-color: whitesmoke;
    position: absolute;
    top: 65%;
    left: 40%;
  }
</style>
</body>
</html>
