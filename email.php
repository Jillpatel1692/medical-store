<?php
session_start();
include('./login_connect.php');

require_once("./include/PHPMailer.php");
require_once("./include/SMTP.php");
 require_once("./include/Exception.php");
$sql = "SELECT * FROM login";
$result = $conn->query($sql);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



// passing true in constructor enables exceptions in PHPMailer

$email= $_SESSION['Email'];
$mail = new PHPMailer(true);
try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'jillpatel1692@gmail.com'; // YOUR gmail email
    $mail->Password = 'Jill1609.'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('jillpatel1692@gmail.com', 'Jill');
    $mail->addAddress($email, 'Link has been sent.');
    $mail->addReplyTo('jillpatel1692@gmail.com', 'Jill'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Send email using Gmail SMTP and PHPMailer";
    $mail->Body = "<a href='create_password.php? em=$email'>Create new Password</a>" ;
    $mail->AltBody = 'IWT.';

    $mail->SMTPDebug  = 0;
    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}

?>