<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dnName = "investal_24";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dnName);

if (!$conn) {
  die("Connection failed" . mysqli_connect_error());
}