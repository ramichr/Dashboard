<?php
include "functions.inc.php";
include "dbh.inc.php";


if (isset($_GET['gutschriftErstellen'])) {

  $vorname = $_GET['vorname'];
  $nachname = $_GET['nachname'];
  $email = $_GET['email'];
  $telefonnummer = $_GET['telefonnummer'];
  $adresse = $_GET['adresse'];
  $plz = $_GET['plz'];
  $stadt = $_GET['stadt'];

  $gutschriftNum = "INV-" . uniqid();
  $gutschriftDatum = date("d.m.Y");
  $lieferdatum = date("d.m.Y", strtotime("+1 days"));
  $fälligkeitdatum = date("d.m.Y", strtotime("+14 days"));

  $auftragNum = $_GET['auftragNum'];
  $versandArt = $_GET['versandArt'];

  $gold = $_GET['gold'];
  $goldMenge = $_GET['goldMenge'];
  $goldKurs = $_GET['goldKurs'];
  $goldSumme = (float)$goldMenge * (float)$goldKurs;


  $silber = $_GET['silber'];
  $silberMenge = $_GET['silberMenge'];
  $silberKurs = $_GET['silberKurs'];
  $silberSumme = (float)$silberMenge * (float)$silberKurs;


  $platin = $_GET['platin'];
  $platinMenge = $_GET['platinMenge'];
  $platinKurs = $_GET['platinKurs'];
  $platinSumme = (float)$platinMenge * (float)$platinKurs;


  $palladium = $_GET['palladium'];
  $palladiumMenge = $_GET['palladiumMenge'];
  $palladiumKurs = $_GET['palladiumKurs'];
  $palladiumSumme = (float)$palladiumMenge * (float)$palladiumKurs;

  $gesamtPreis = $goldSumme + $silberSumme + $platinSumme + $palladiumSumme;

  updateGoldankaufAnfrage($conn, $auftragNum);

  sendEmailGutschriftGoldankauf(
    $vorname,
    $nachname,
    $adresse,
    $plz,
    $stadt,
    $email,
    $telefonnummer,

    $gutschriftNum,
    $gutschriftDatum,
    $lieferdatum,
    $fälligkeitdatum,

    $auftragNum,
    $versandArt,

    $gold,
    $goldMenge,
    $goldKurs,
    $goldSumme,

    $silber,
    $silberMenge,
    $silberKurs,
    $silberSumme,

    $platin,
    $platinMenge,
    $platinKurs,
    $platinSumme,

    $palladium,
    $palladiumMenge,
    $palladiumKurs,
    $palladiumSumme,

    $gesamtPreis
  );
}