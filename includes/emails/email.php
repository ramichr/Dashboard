<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


require_once './PHPmailer/Exception.php';
require_once './PHPmailer/PHPMailer.php';
require_once './PHPmailer/SMTP.php';

require_once './phpdotenv/vendor/autoload.php';

function email($reciever, $subject, $template)
{
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();

  $mail = new PHPMailer(true);

  //Server settings
  $mail->SMTPDebug = 0;
  $mail->isSMTP();
  $mail->SMTPAuth   = true;


  $mail->Host       = 'smtp.gmail.com';
  $mail->Username   = $_ENV['USERNAME'];
  $mail->Password   = $_ENV['PASSWORD'];
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;


  //Recipients
  $mail->setFrom($_ENV['USERNAME'], 'investal24');
  $mail->addAddress($reciever);

  //Content
  $mail->isHTML(true);

  $mail->Subject = $subject;

  $mail->Body = $template;
  $mail->send();
}