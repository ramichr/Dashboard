<?php

require_once __DIR__ . '/phpdotenv/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$serverName = $_ENV['SERVERNAME'];
$dbUsername = $_ENV['DBUSERNAME'];
$dbPassword = $_ENV['DBPASSWORD'];
$dnName = $_ENV['DBNAME'];


$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dnName);

if (!$conn) {
  die("Connection failed" . mysqli_connect_error());
}
