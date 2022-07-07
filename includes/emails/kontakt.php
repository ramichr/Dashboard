<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


require_once './PHPmailer/Exception.php';
require_once './PHPmailer/PHPMailer.php';
require_once './PHPmailer/SMTP.php';

require_once './phpdotenv/vendor/autoload.php';

function kontakt($vorname, $nachname, $email, $telefonnummer, $betriff, $nachricht)
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
  $mail->setFrom($_ENV['USERNAME'], 'investal24_support');
  $mail->AddReplyTo($email, $vorname . ' ' . $nachname);
  $mail->addAddress($_ENV['USERNAME']);

  //Content
  $mail->isHTML(true);

  $mail->Subject = $betriff;

  $mail->Body = '<pre style="font-family: arial;">' . $nachricht . '</pre>
  <br>
  <br>
  <br>
  <br>
  <h3>Nachricht von:</h3>
  <b>Vorname:</b> ' . $vorname . '<br>
  <b>Nachname:</b> ' . $nachname . '<br>
  <b>Email:</b> ' . $email . '<br>
  <b>Telefonnummer:</b> ' . $telefonnummer;
  $mail->send();
}
