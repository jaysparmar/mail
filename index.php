<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//From email address and name
$mail->From = "bharticloud@gmail.com";
$mail->FromName = "Full Name";

//To address and name
$mail->addAddress("bharticloud@outlook.com", "Recepient Name");
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";

// optional
// used only when SMTP requires authentication
$mail->SMTPAuth = true;
$mail->Username = 'bharticloud@gmail.com';
$mail->Password = 'Password';
// $mail->Port = 465;
//Address to which recipient will replys

//CC and BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}