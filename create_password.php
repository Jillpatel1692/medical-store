<?php
session_start();
include('./login_connect.php');
$sql = "SELECT * FROM login";
$result = $conn->query($sql);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $password = $_POST["Password"];
  $c_password = $_POST["C_Password"];
  // echo $_SESSION['Email'];
  if(isset($_POST['create']))
  {
    if($password==$c_password){
      $sql = "UPDATE login SET Password='".$password."'
                            WHERE Email='".$_GET['em']."' ";
    }
    else
    {
      echo "Password doesn't match";
    }
  }
  else
  {
    echo "Invalid input";
  }
  
  if ($conn->query($sql) === TRUE) {
    header('location:login.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }

}
$conn->close();
?>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <form method="POST">
            <div class="div">
                <table>
                    <tr>
                        <td>Create new password</td>
                    </tr>
                    <tr>
                        <td><input type="password" id="text" name="Password"  required></td>
                    </tr>
                    <tr>
                        <td>Confirm new password</td>
                    </tr>
                    <tr>
                        <td><input type="password" id="text" name="C_Password"  required></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><button name="create" id="text1">Submit</button></td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</html>