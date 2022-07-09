<!DOCTYPE html>
<html>
<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php


		
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "projd1");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];
		$email=$_REQUEST['Email'];
		$Password = $_REQUEST['pass'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO login(`username`,`Email`,`password`) VALUES ('$username','$email','$Password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3> data stored in a database successfully.";
		} else{
			echo "ERROR: $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
