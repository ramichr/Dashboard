<?php
$file = $_GET['file'];

include "dbh.inc.php";

$sql = "SELECT `rechnungDatei` FROM `rechnung` WHERE rechnungId = '$file'";

$query = mysqli_query($conn, $sql);

$result = mysqli_fetch_assoc($query);

// $pdf = base64_encode($result['rechnungDatei']);
$pdf = $result['rechnungDatei'];

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename=file.pdf');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
echo $pdf;