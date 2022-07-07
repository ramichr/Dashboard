<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once './PHPmailer/Exception.php';
require_once './PHPmailer/PHPMailer.php';
require_once './PHPmailer/SMTP.php';

require_once './phpdotenv/vendor/autoload.php';

function emailPdf(
  $reciever,
  $subject,
  $template,
  $attachment,
  $attachmentName,
  $page
) {

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
  $mail->addAddress($_ENV['USERNAME']);

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
