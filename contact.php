<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail=new PHPMailer(true);

      $mail->isSMTP();
      $mail->SMTPAuth = true;
      $mail->host = "smtp.example.com";
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      $mail->Username = 'omkarbrassproduct@gmail.com';
      $mail->Password = '1452765400744458OMKAR';


      $mail->setFrom($email, $name);
      $mail->addAddress("omkarbrassproduct@gmail.com", "Omkar");

      $mail->isHTML(true);
      $mail->Subject = $subject;

      $mail->Body = $message;

      $mail->send();

?>
