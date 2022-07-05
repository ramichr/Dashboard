<?php


if (isset($_POST['add'])) {
  $name = htmlentities($_POST['name']);
  $barcode = htmlentities($_POST['barcode']);
  $gewicht = htmlentities($_POST['gewicht']);
  $bestand = htmlentities($_POST['bestand']);
  $kategorie = htmlentities($_POST['kategorie']);

  include "dbh.inc.php";

  $sql1 = "INSERT INTO `waren` (`warenName`,	`warenGewicht`	, `warenKategorie` ,	`warenBarcode` , `warenBestand` ) VALUES ('$name','$gewicht','$kategorie', '$barcode', '$bestand')";

  mysqli_query($conn, $sql1);
}

header("Location: ../wahren.php");
exit();
