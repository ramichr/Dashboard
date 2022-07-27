<?php

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