<?php

$daterange = $_GET['daterange'];

include "./dbh.inc.php";

header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"export.csv\"");

if (!empty($daterange)) {
  $sql = 'SELECT * FROM `kunden` WHERE `anmeldDatum` = "$daterange"';
} else {
  $sql = 'SELECT * FROM `kunden`';
}

$result = mysqli_query($conn, $sql);

if (!empty($daterange)) {
  $sql2 = 'SELECT * FROM `gKunden` WHERE `anmeldDatum` = "$daterange" AND `gkStatus` = "aktiv"';
} else {
  $sql2 = 'SELECT * FROM `gKunden` WHERE `gkStatus` = "aktiv"';
}

$result2 = mysqli_query($conn, $sql2);

while ($row = mysqli_fetch_assoc($result)) {
  echo implode("||", [
    $row["username"],
    $row["anrede"],
    $row["geschlecht"],
    $row["vorname"],
    $row["nachname"],
    $row["geburtsdatum"],
    $row["nationalitat"],
    $row["adresse"],
    $row["plz"],
    $row["stadt"],
    $row["email"],
    $row["telefonnummer"],
    $row["ausweisnummer"],
    $row["anmeldDatum"]
  ]);
  echo "\r\n";
}

while ($row = mysqli_fetch_assoc($result2)) {
  echo implode("||", [
    $row["gkUsername"],
    $row["gkVorname"],
    $row["gkNachname"],
    $row["gkFirmenname"],
    $row["gkRechtform"],
    $row["gkUmsatzsteur"],
    $row["gkSteurnummer"],
    $row["gkAdresse"],
    $row["gkPlz"],
    $row["gkStadt"],
    $row["gkEmail"],
    $row["gkTelefonnummer"],
    $row["gkBonusProzent"],
    $row["anmeldDatum"]
  ]);
  echo "\r\n";
}