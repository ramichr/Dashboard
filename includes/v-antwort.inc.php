<?php

include 'dbh.inc.php';
include 'functions.inc.php';

$vermittlerId = test_input($_GET['vermittlerId']);
$vUsername = test_input($_GET['vUsername']);
$vPasswort = test_input($_GET['vPasswort']);
$vVorname = test_input($_GET['vVorname']);
$vNachname = test_input($_GET['vNachname']);
$vFirmenname = test_input($_GET['vFirmenname']);
$vRechtform = test_input($_GET['vRechtform']);
$vUmsatzsteur = test_input($_GET['vUmsatzsteur']);
$vSteurnummer = test_input($_GET['vSteurnummer']);
$vAdresse = test_input($_GET['vAdresse']);
$vPlz = test_input($_GET['vPlz']);
$vStadt = test_input($_GET['vStadt']);
$vEmail = test_input($_GET['vEmail']);
$vTelefonnummer = test_input($_GET['vTelefonnummer']);
$BonusProzent = test_input($_GET['BonusProzent']);



if (isset($_GET['accept'])) {
  updateV($conn, $vermittlerId, $BonusProzent);
  sendEmail(
    $vEmail,
    "Ihre Vermittler Antrag",
    "Ihre Vermittler Antrag wurde angenommen <br> Ihre Username: $vUsername. <br> Ihre Passwort: $vPasswort."
  );
  header("Location: ../Vermittlerliste.php");
  exit();
} elseif (isset($_GET['decline'])) {
  deleteV($conn, $vermittlerId);
  sendEmail($vEmail, "Ihre Vermittler Antrag", "
  Leider Ihre Vermittler Antrag wurde abgelehnt.
  ");
  header("Location: ../Vermittlerliste.php");
  exit();
}