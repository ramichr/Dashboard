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
  $mail->setFrom('investal24.info@gmail.com', 'investal24');
  $mail->addAddress($reciever);

  //Content
  $mail->isHTML(true);

  $mail->Subject = $subject;

  $mail->Body = $template;
  $mail->send();
}