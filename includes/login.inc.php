<?php

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $passwort = $_POST["passwort"];

  require_once 'dbh.inc.php';

  if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    $sql = "SELECT * FROM `personal` WHERE username = ?";
  } else {
    $sql = "SELECT * FROM `personal` WHERE email = ?";
  }
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../login.php?error=stmt_failed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, 's', $username);

  mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);

  $num = mysqli_num_rows($result);

  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($passwort === $row['passwort']) {
        session_start();
        $_SESSION["personalId"] = $row["personalId"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["vorname"] = $row["vorname"];
        $_SESSION["nachname"] = $row["nachname"];
        $_SESSION["email"] = $row["email"];
        header("location: ../index.php");
      } else {
        header("location: ../login.php?error=wrong_password");
        exit();
      }
    }
  } else {
    header("location: ../login.php?error=user_dont_exist");
    exit();
  }

  mysqli_stmt_close($stmt);
} else {
  header("location: ../login.php");
  exit();
}