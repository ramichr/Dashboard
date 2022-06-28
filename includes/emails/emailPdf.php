<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once './PHPmailer/Exception.php';
require_once './PHPmailer/PHPMailer.php';
require_once './PHPmailer/SMTP.php';

function emailPdf(
  $reciever,
  $subject,
  $template,
  $attachment,
  $attachmentName,
  $page
) {
  $mail = new PHPMailer(true);

  //Server settings
  $mail->SMTPDebug = 0;
  $mail->isSMTP();
  $mail->SMTPAuth   = true;
  // $mail->Host       = 'smtp.office365.com';
  // $mail->Username   = 'smtp@schnur-partner.de';
  // $mail->Password   = 'Benefit15!!';
  // $mail->SMTPSecure = "tls";
  // $mail->Port       = 587;
  $mail->Host       = 'smtp.gmail.com';
  $mail->Username   = 'investal24.info@gmail.com';
  $mail->Password   = 'ueiuhxtjeudaoqak';
  // $mail->SMTPSecure = "ssl";
  // $mail->Port       = 465;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;

  //Recipients
  // $mail->setFrom('smtp@schnur-partner.de', 'investal24');
  $mail->setFrom('investal24.info@gmail.com', 'investal24');
  $mail->addAddress($reciever);
  $mail->addAddress('investal24.info@gmail.com');

  // Attachement
  $mail->addStringAttachment($attachment, $attachmentName);

  //Content
  $mail->isHTML(true);
  $mail->Subject = $subject;

  $mail->Body = $template;
  if ($mail->send()) {
    $page;
  }
}