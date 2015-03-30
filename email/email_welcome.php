<?php

require_once '../include/config.php';
require_once '../include/functions.php';
require_once '../include/process.php';
require("./PHPMailerAutoload.php");

$email = get('email');

ob_start();                      // start capturing output
include("./email_welcome_body.php");   // execute the file
$message = ob_get_contents();    // get the contents from the buffer
ob_end_clean();                  // stop buffering and discard contents


$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mx1.hostinger.vn:2525";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "thangdv@paygamesvn.com";  // SMTP username
$mail->Password = "tiuconhibe"; // SMTP password

$mail->From = "thangdv@paygamesvn.com";
$mail->FromName = "VThang";
$mail->AddAddress("$email");             // name is optional
$mail->AddReplyTo("thangdv@paygamesvn.com");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Chao mung den voi paygames";
$mail->Body = $message;
$mail->AltBody = $message;

if (!$mail->Send()) {
    echo "Message could not be sent. <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit;
}

redirect('../checkout.php');
?>