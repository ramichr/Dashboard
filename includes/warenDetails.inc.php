<?php
include "dbh.inc.php";

$warenProduktId = htmlentities($_GET['warenProduktId']);
$warenName = htmlentities($_GET['warenName']);
$warenReferenz = htmlentities($_GET['warenReferenz']);

$warenDetailsId = htmlentities($_GET['warenDetailsId']);



if (isset($_GET['add'])) {

  $sql = "INSERT INTO `waren_details` (`warenProduktId`,	`warenReferenz`, `warenStatus`) VALUES ('$warenProduktId', '$warenReferenz', 'Lage')";

  mysqli_query($conn, $sql);
}




if (isset($_GET['update'])) {

  $sql = "UPDATE `waren_details` SET `warenStatus` = 'gekauft' WHERE `warenDetailsId` = '$warenDetailsId'";

  mysqli_query($conn, $sql);
}


if (isset($_GET['delete'])) {

  $sql = "DELETE FROM `waren_details` WHERE `warenDetailsId` = '$warenDetailsId'";

  mysqli_query($conn, $sql);
}


header("Location: ../Detailswahren.php?warenProduktId=$warenProduktId&warenName=$warenName");
exit();