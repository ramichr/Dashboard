<?php

include "dbh.inc.php";

if (isset($_POST['update'])) {


  $produktId = htmlentities($_POST['produktId']);
  $produktName = htmlentities($_POST['produktName']);
  $kategorie = htmlentities($_POST['kategorie']);
  $gewicht = htmlentities($_POST['gewicht']);
  $referenz = htmlentities($_POST['referenz']);
  $inventor = htmlentities($_POST['inventor']);
  $zusatzInfos = htmlentities($_POST['zusatzInfos']);
  $beschreibung = htmlentities($_POST['beschreibung']);



  $sql = "UPDATE `produkt` 
        SET `produktName` = '$produktName' , 
         `kategorie` = '$kategorie' , 
        `gewicht` = '$gewicht' , 
        `referenz` = '$referenz' , 
        `inventor` = '$inventor' , 
        `zusatzInfos` = '$zusatzInfos' , 
        `beschreibung` = '$beschreibung'
        WHERE produktId = '$produktId';";

  mysqli_query($conn, $sql);

  $total = count($_FILES['images']['tmp_name']);

  for ($i = 0; $i < $total; $i++) {
    $imageTempName = $_FILES['images']['tmp_name'][$i];
    if (!empty($imageTempName)) {
      $image =  addslashes(file_get_contents($imageTempName));

      $sql3 = "INSERT INTO `produkt_images` (`produktId`,	`image`	) VALUES ('$produktId', '$image')";

      mysqli_query($conn, $sql3);
    }
  }
} else {
  $produktId = $_GET['produktId'];
  $produktImageId = $_GET['produktImageId'];

  $sql = "DELETE FROM `produkt_images` WHERE `produktId`='$produktId' AND `produktImageId` = '$produktImageId';";

  mysqli_query($conn, $sql);
}

header("Location:  ../produktbearbeiten.php?produktId=$produktId");
exit();