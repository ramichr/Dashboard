<?php

include 'dbh.inc.php';
include 'functions.inc.php';

$vermittlerId = htmlentities($_GET['vermittlerId']);
$vUsername = htmlentities($_GET['vUsername']);
$vPasswort = htmlentities($_GET['vPasswort']);
$vVorname = htmlentities($_GET['vVorname']);
$vNachname = htmlentities($_GET['vNachname']);
$vFirmenname = htmlentities($_GET['vFirmenname']);
$vRechtform = htmlentities($_GET['vRechtform']);
$vUmsatzsteur = htmlentities($_GET['vUmsatzsteur']);
$vSteurnummer = htmlentities($_GET['vSteurnummer']);
$vAdresse = htmlentities($_GET['vAdresse']);
$vPlz = htmlentities($_GET['vPlz']);
$vStadt = htmlentities($_GET['vStadt']);
$vEmail = htmlentities($_GET['vEmail']);
$vTelefonnummer = htmlentities($_GET['vTelefonnummer']);
$BonusProzent = htmlentities($_GET['BonusProzent']);



if (isset($_GET['accept'])) {
  updateV($conn, $vermittlerId, $BonusProzent);
  sendEmail(
    $vEmail,
    "Ihre Vermittler Antrag",
    "Ihre Vermittler Antrag wurde angenommen <br> Ihre Username: $vUsername. <br> Ihre Passwort: $vPasswort."
  );
  header("Location: ../Vemittler.php");
  exit();
} elseif (isset($_GET['decline'])) {
  deleteV($conn, $vermittlerId);
  sendEmail($vEmail, "Ihre Vermittler Antrag", "
  Leider Ihre Vermittler Antrag wurde abgelehnt.
  ");
  header("Location: ../Vemittler.php");
  exit();
}