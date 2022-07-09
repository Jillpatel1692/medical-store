<html>
<head>
   <title>MSMS/login</title>
</head>
<body>
<div class="chat-container-one, center" >
        <p><h1>Medical Store Management System</h1></p>
        <p><h2>Login Form</h2></p>
        <form method="post">

         <input type="text" id="username" name="Email" class="input" placeholder="UserName"><br>
         <input type="password" id="password" name="password" class="input" placeholder="Password"><br>
       
       <div class="button1">
        <input class="b3" type="submit" class="button1" value="Log In" name="login">
      </div>
    </form>
    <div>
          <a href="#"><a href= "./signup.php"> SIGN UP </a></a><br>
          <a href="#"><a href= "./forget_password.php"> Forgot Password </a></a>
       </div>
       
    <style>
        body {
          background-image: url('./Medical-Wallpapers-HD-Free-download.jpg');
          
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
    height: 70%;
    border-radius: 5%;
    border: 1px solid white;
    background-color: #165fa9;
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
    background-color: white ;
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
    top: 55%;
    left: 40%;
  }
</style>
</body>
</html>

<?php
// session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projd1";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM login WHERE Email = ?");
if(isset($_POST['login']))
{


    $email = $_POST['Email'];
    $Password = $_POST['password'];

   
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            if($stmt_result->num_rows > 0)
            {
                $data = $stmt_result->fetch_assoc(); 
                
                if($Password==$data['Password'])
                {
                  if($data["admin"] == '1'){
                    header('Location:./adminhome.php');
                  }else if($data["admin"] == '0'){
                    header('Location:./homelogin.php');
                  }
                }
                else
                {    
                    header('Location:login.php');       
                }
            }


    // if ($result->num_rows > 0) {
    //   // output data of each row
    //   while($row = $result->fetch_assoc()) {
    //     if($row['username'] &= ["Password"] == $Password){
    //          header('location:homelogin.php');
    //     echo "username:".$row["username"] ."pass:".$row["Password"]. "<br>";
    //   }
    //   else {
    //     echo "wrong password";
    //   }
    // }
    // } else {
    //   echo "0 results";
    // }

}
$conn->close();
?>