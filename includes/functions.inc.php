<?php

use Mpdf\Mpdf;

require_once __DIR__ . '/mpdf/vendor/autoload.php';

include "emails/email.php";
include "emails/emailPdf.php";

/* ----------------------------------------------------------------------------------------------- */

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function updateGK($conn, $gKundenId, $BonusProzent)
{
  $sql = "UPDATE `gKunden` SET `gkBonusProzent` = '$BonusProzent' , `gkStatus` = 'aktiv' WHERE gKundenId = '$gKundenId';";

  $result = mysqli_query($conn, $sql);

  return $result;
};

function deleteGK($conn, $gKundenId)
{
  $sql = "DELETE FROM `gKunden` WHERE gKundenId = '$gKundenId';";

  $result = mysqli_query($conn, $sql);

  return $result;
};

function updateV($conn, $vermittlerId, $BonusProzent)
{
  $sql = "UPDATE `vermittler` SET `vBonusProzent` = '$BonusProzent' , `vStatus` = 'aktiv' WHERE vermittlerId = '$vermittlerId';";

  $result = mysqli_query($conn, $sql);

  return $result;
};

function deleteV($conn, $vermittlerId)
{
  $sql = "DELETE FROM `vermittler` WHERE vermittlerId = '$vermittlerId';";

  $result = mysqli_query($conn, $sql);

  return $result;
};

function sendEmail($reciever, $subject, $template,)
{
  email($reciever, $subject, $template);
};


function updateGoldankaufAnfrage($conn, $auftragNum)
{

  $sql = "UPDATE `goldankauf_p` SET `status` = 'inactiv' WHERE auftragNum = '$auftragNum';";

  $result = mysqli_query($conn, $sql);

  return $result;
};

function sendEmailGutschriftGoldankauf(
  $vorname,
  $nachname,
  $adresse,
  $plz,
  $stadt,
  $email,
  $telefonnummer,

  $gutschriftNum,
  $gutschriftDatum,
  $lieferdatum,
  $fälligkeitdatum,

  $auftragNum,
  $versandArt,

  $gold,
  $goldMenge,
  $goldKurs,
  $goldSumme,

  $silber,
  $silberMenge,
  $silberKurs,
  $silberSumme,

  $platin,
  $platinMenge,
  $platinKurs,
  $platinSumme,

  $palladium,
  $palladiumMenge,
  $palladiumKurs,
  $palladiumSumme,

  $gesamtPreis
) {

  include "documents/goldAnkfGutschrift.doc.php";

  $mpdf = new Mpdf();

  $mpdf->Bookmark('Start of the document');

  $css = file_get_contents('../assets/pdf/styleAngebot.css');

  $html = goldAnkfGutschriftFile(
    $vorname,
    $nachname,
    $adresse,
    $plz,
    $stadt,
    $email,
    $telefonnummer,

    $gutschriftNum,
    $gutschriftDatum,
    $lieferdatum,
    $fälligkeitdatum,

    $auftragNum,
    $versandArt,

    $gold,
    $goldMenge,
    $goldKurs,
    $goldSumme,

    $silber,
    $silberMenge,
    $silberKurs,
    $silberSumme,

    $platin,
    $platinMenge,
    $platinKurs,
    $platinSumme,

    $palladium,
    $palladiumMenge,
    $palladiumKurs,
    $palladiumSumme,

    $gesamtPreis
  );

  $mpdf->WriteHTML($css, 1);
  $mpdf->WriteHTML($html, 2);
  $pdf = $mpdf->Output('', 'S');

  $email_template = "
  <h2>Gutschrift privat Goldankauf</h2>
  <pre style='font-family: arial;'>
    Guten Tag " . $vorname . " " . $nachname . ",

    die Überprüfung Ihre Antrag wurde abgeschlossen. Bitte teilen Sie uns Ihre Bankverbindung um Ihnen die Gutschrift zu überweisen

    Mit freundlichen Grüße.
    Ihre Investal24 Team.
  </pre>
  ";

  emailPdf(
    $email,
    'Gutschrift privat Goldankauf',
    $email_template,
    $pdf,
    'Gutschrift_privat_Goldankauf-' . $vorname . '_' . $nachname . '.pdf',
    header("Location: ")
  );
};