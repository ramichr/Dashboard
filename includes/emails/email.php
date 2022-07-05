<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


require_once './PHPmailer/Exception.php';
require_once './PHPmailer/PHPMailer.php';
require_once './PHPmailer/SMTP.php';

function email($reciever, $subject, $template)
{
  $mail = new PHPMailer(true);

  //Server settings
  $mail->SMTPDebug = 0;
  $mail->isSMTP();
  $mail->SMTPAuth   = true;


  $mail->Host       = 'smtp.gmail.com';
  $mail->Username   = 'noreply.investal24@gmail.com';
  $mail->Password   = 'urhiysejuegkphrb';
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;


  //Recipients
  $mail->setFrom('noreply.investal24@gmail.com', 'investal24');
  $mail->addAddress($reciever);

  //Content
  $mail->isHTML(true);

  $mail->Subject = $subject;

  $mail->Body = $template;
  $mail->send();
}
