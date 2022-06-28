<?php

include 'dbh.inc.php';
include 'functions.inc.php';

$gKundenId = test_input($_GET['gKundenId']);
$gkUsername = test_input($_GET['gkUsername']);
$gkPasswort = test_input($_GET['gkPasswort']);
$gkVorname = test_input($_GET['gkVorname']);
$gkNachname = test_input($_GET['gkNachname']);
$gkFirmenname = test_input($_GET['gkFirmenname']);
$gkRechtform = test_input($_GET['gkRechtform']);
$gkUmsatzsteur = test_input($_GET['gkUmsatzsteur']);
$gkSteurnummer = test_input($_GET['gkSteurnummer']);
$gkAdresse = test_input($_GET['gkAdresse']);
$gkPlz = test_input($_GET['gkPlz']);
$gkStadt = test_input($_GET['gkStadt']);
$gkEmail = test_input($_GET['gkEmail']);
$gkTelefonnummer = test_input($_GET['gkTelefonnummer']);
$BonusProzent = test_input($_GET['BonusProzent']);



if (isset($_GET['accept'])) {
  updateGK($conn, $gKundenId, $BonusProzent);
  sendEmail(
    $gkEmail,
    "Ihre Geschaeftkunde Antrag",
    "Ihre Geschaeftkunde Antrag wurde angenommen <br> Ihre Username: $gkUsername. <br> Ihre Passwort: $gkPasswort."
  );
  header("Location: ../Geshaftkundenliste.php");
  exit();
} elseif (isset($_GET['decline'])) {
  deleteGK($conn, $gKundenId);
  sendEmail($gkEmail, "Ihre Geschaeftkunde Antrag", "
  Leider Ihre Geschaeftkunde Antrag wurde abgelehnt.
  ");
  header("Location: ../Geshaftkundenliste.php");
  exit();
}