<?php

if (isset($_POST['add'])) {
  $produktUid = uniqid();
  $produktName = htmlentities($_POST['produktName']);
  $beschreibung = htmlentities($_POST['beschreibung']);
  $referenz = htmlentities($_POST['referenz']);
  $inventor = htmlentities($_POST['inventor']);
  $gewicht = htmlentities($_POST['gewicht']);
  $kategorie = htmlentities($_POST['kategorie']);
  $zusatzInfos = htmlentities($_POST['zusatzInfos']);


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
}

header("Location: ../shopliste.php");
exit();