<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require("./PHPMailerAutoload.php");

$email = post('email');
$message = post('message');

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mx1.hostinger.vn:2525";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "thangdv@paygamesvn.com";  // SMTP username
$mail->Password = "tiuconhibe"; // SMTP password

$mail->From = "thangdv@paygamesvn.com";
$mail->FromName = "VThang";
$mail->AddAddress("$email");             // name is optional
$mail->AddReplyTo("testemail@paygamesvn.com");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Chao mung den voi paygames";
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>