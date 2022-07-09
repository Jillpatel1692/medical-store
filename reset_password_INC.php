<?php

$email = $_POST['Email'];
require_once("./include/PHPMailer.php");
require_once("./include/SMTP.php");

if(isset($_POST['enter']))
{
    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*1234567890';
    $pass= array();
    $comblen = strlen($comb)-1;
    for($i=0;$i<8;$i++)
    {
        $n = rand(0,$comblen);
        $pass[] = $comb[$n];
    }
    $n_pass=implode($pass);
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projd1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else
  {
      $stmt = $conn->prepare("select * from login where Email = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      if($stmt_result->num_rows > 0)
      {

        
        $sql = "UPDATE login SET Password='$n_pass' WHERE Email='$email'";

        if ($conn->query($sql) === TRUE) {
          echo "Record updated successfully";
        } else {
          echo "Error updating record: " . $conn->error;
        }
        

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0; // for detailed debug output
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->Username = 'jillpatel1692@gmail.com'; // YOUR gmail email
            $mail->Password = '1609jill.'; // YOUR gmail password

            // Sender and recipient settings
            $mail->setFrom('jillpatel1692@gmail.com', 'nnnn');
            $mail->addAddress($email, 'Receiver Name');
            $mail->addReplyTo('jillpatel1692@gmail.com', 'nnnn'); // to set the reply to

            // Setting the email content
            $mail->IsHTML(true);
            $mail->Subject = "Send email using Gmail SMTP and PHPMailer";
            $mail->Body =implode($pass);
            $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

            $mail->send();
            
            // header("Location: ../index.html");
        } catch (Exception $e) {
            echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
        }
        header("Location: login.php");
      }
      else
      {
        echo"<h2>Invalid Email  or Password</h2>";
      }
  }
?>