<?php
session_start();
include('./login_connect.php');
$sql = "SELECT * FROM login";
$result = $conn->query($sql);

if (isset($_POST['enter'])) {
  $email = $_POST["Email"];
    
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($email==$row["Email"]){
            $_SESSION['Email'] = $row['Email'];
            echo "<a href = './email.php?id=".$row['Email']."'>Send Mail</a>";
            header('location:email.php');
          }
          else{
            echo "Invalid Id";
          }
        }
      }
    }
  else {
    echo "No email found.";
  }

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
</form>
  <form method="post" action="./reset_password_INC.php">
            <div class="div">
                <table>
                    <tr>
                        <td><input id="text" type="text" name="Email" placeholder="Email" required></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><button id="text1" name="enter">Check</button></td>
                    </tr>
                </table>
            </div>
        </form>
</body>
</html>