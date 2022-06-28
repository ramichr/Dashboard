<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


require_once './PHPmailer/Exception.php';
require_once './PHPmailer/PHPMailer.php';
require_once './PHPmailer/SMTP.php';

function kontakt($vorname, $nachname, $email, $telefonnummer, $betriff, $nachricht)
{
  $mail = new PHPMailer(true);

  //Server settings
  $mail->SMTPDebug = 0;
  $mail->isSMTP();
  $mail->SMTPAuth   = true;

  // $mail->Host       = 'smtp.office365.com';
  // $mail->Username   = 'smtp@schnur-partner.de';
  // $mail->Password   = 'Benefit15!!';
  $mail->Host       = 'smtp.gmail.com';
  $mail->Username   = 'investal24.info@gmail.com';
  $mail->Password   = 'ueiuhxtjeudaoqak';
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  // $mail->SMTPSecure = "ssl";
  // $mail->Port       = 465; 

  //Recipients
  $mail->setFrom('investal24.info@gmail.com', 'investal24_support');
  $mail->AddReplyTo($email, $vorname . ' ' . $nachname);
  $mail->addAddress('investal24.info@gmail.com');

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