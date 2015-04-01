<?php

require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require("./PHPMailerAutoload.php");

$email = post('email');
$subject = post('subject');
$title = post('title');
$message_body = post('message');

ob_start();                      // start capturing output
include("./email_admin_send_body.php");   // execute the file
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

$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = $message;

if (!$mail->Send()) {
    echo "Message could not be sent. <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
}

echo "Message has been sent";
redirect("../email_admin_send.php")
?>