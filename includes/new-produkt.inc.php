<?php

if (isset($_POST['submit'])) {
  $produktUid = uniqid();
  $produktName = $_POST['produktName'];
  $beschreibung = $_POST['beschreibung'];
  $referenz = $_POST['referenz'];
  $inventor = $_POST['inventor'];
  $gewicht = $_POST['gewicht'];
  $kategorie = $_POST['kategorie'];
  $zusatzInfos = $_POST['zusatzInfos'];




  include "dbh.inc.php";

  $sql1 = "INSERT INTO `produkt` (`produktUid`,	`produktName`	, `beschreibung` ,	`referenz` , `inventor` , `gewicht`	,`kategorie` ,`zusatzInfos`	) VALUES ('$produktUid','$produktName','$beschreibung', '$referenz', '$inventor','$gewicht', '$kategorie', '$zusatzInfos')";

  mysqli_query($conn, $sql1);

  $sql2 = "SELECT produktId FROM `produkt` WHERE `produktUid` = '$produktUid'";

  $result = mysqli_query($conn, $sql2);

  $row = mysqli_fetch_assoc($result);

  $produktId = $row['produktId'];

  $total = count($_FILES['images']['tmp_name']);

  for ($i = 0; $i < $total; $i++) {
    $imageTempName = $_FILES['images']['tmp_name'][$i];
    $image =  addslashes(file_get_contents($imageTempName));

    $sql3 = "INSERT INTO `produkt_images` (`produktId`,	`image`	) VALUES ('$produktId', '$image')";

    mysqli_query($conn, $sql3);
  }

  header("Location: ../produktliste.php");
  exit();
}