<?php
function goldAnkfGutschriftFile(
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
  $file = "
  <!DOCTYPE html>
  <html >
  <head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <body style='font-family:Tahoma;font-size:12px;color: #333333;background-color:#FFFFFF;'>
  <table align='center' border='0' cellpadding='0' cellspacing='0' style='height:842px; width:595px;font-size:12px;'>
    <tr>
      <td valign='top'><table width='100%' cellspacing='0' cellpadding='0'>
          <tr>
            <td valign='bottom' width='5' height='5'><div align='left'><img src='../assets/pdf/logo_investal24.jpg' /></div><br /></td>

            <td width='50%'>&nbsp;</td>
          </tr>
          <br><br><br><br>
        </table>Empfänger: <br/><br/>
        <table width='100%' cellspacing='0' cellpadding='0'>
        <tr>
          <td valign='top' width='35%' style='font-size:12px;'> <strong >" . $vorname . " " . $nachname . "</strong><br />" . $adresse . "<br />
  " . $plz . " " . $stadt . " <br/>Email: " . $email . "<br />Telefon: " . $telefonnummer . "<br />

  </td>
          <td valign='top' width='35%'>
  </td>
          <td valign='top' width='30%' style='font-size:12px;'>Datum: " . $gutschriftDatum . "<br/>Lieferdatum: " . $lieferdatum . "<br/>
      Fälligkeitsdatum: " . $fälligkeitdatum . " <br/>
      
      
      </td>

        </tr>
      </table>
      <br>
      <br>
      <table width='100%' height='100' cellspacing='0' cellpadding='0'>
        <tr align='center'>
          <td>
            <div style='font-size: 14px;font-weight: bold;'>Gutschrift Nr.: " . $gutschriftNum . " </div>
          </td>
        </tr>
        <tr align='center'>
          <td>
            <div style='font-size: 14px;font-weight: bold;'>Auftrag Nr.: " . $auftragNum . " </div>
          </td>
        </tr>
        <tr align='center'>
          <td>
            <div style='font-size: 14px;font-weight: bold;'>Versandart: " . $versandArt . " </div>
          </td>
        </tr>
        </table>
        <br>
  <br>
  <table width='100%' cellspacing='0' cellpadding='2' border='0' bordercolor='#CCCCCC'>
        <tr>

          <td width='35%' bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Beschreibung </strong></td>
          <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Menge (Gramm)</strong></td>
          <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Kurs (€)</strong></td>
          <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Summe (€)</strong></td>
    
          </tr>
        <tr style='display:none;'><td colspan='*'><tr>

  <td valign='top' style='font-size:12px;'>" . $gold . "</td>
  <td valign='top' style='font-size:12px;'>" . $goldMenge . "</td>
  <td valign='top' style='font-size:12px;'>" . $goldKurs . "</td>
  <td valign='top' style='font-size:12px;'>" . $goldSumme . "</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>" . $silber . "</td>
  <td valign='top' style='font-size:12px;'>" . $silberMenge . "</td>
  <td valign='top' style='font-size:12px;'>" . $silberKurs . "</td>
  <td valign='top' style='font-size:12px;'>" . $silberSumme . "</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>" . $platin . "</td>
  <td valign='top' style='font-size:12px;'>" . $platinMenge . "</td>
  <td valign='top' style='font-size:12px;'>" . $platinKurs . "</td>
  <td valign='top' style='font-size:12px;'>" . $platinSumme . "</td>

  </tr><tr>
  <td valign='top' style='font-size:12px;'>" . $palladium . "</td>
  <td valign='top' style='font-size:12px;'>" . $palladiumMenge . "</td>
  <td valign='top' style='font-size:12px;'>" . $palladiumKurs . "</td>
  <td valign='top' style='font-size:12px;'>" . $palladiumSumme . "</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr><tr>

  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>
  <td valign='top' style='font-size:12px;'>&nbsp;</td>

  </tr></td></tr>
      </table>
  <table width='100%' cellspacing='0' cellpadding='2' border='0'>
        <tr>
          <td style='font-size:12px;width:50%;'><strong> </strong></td>
          <td><table width='100%' cellspacing='0' cellpadding='2' border='0'>
    <tr>

    <tr>

      <td  align='right' style='font-size:12px;'><b>Gesamtpreis</b></td>
      <td  align='right' style='font-size:12px;'><b>" . $gesamtPreis . " €</b></td>
    </tr></table>
  </td>

        </tr>

  </table> 

  <br><br><br><br>

  <br><br><br><br>

    <table width='100%' height='50'><tr><td style='font-size:12px;text-align:justify;'></td></tr></table>
      <table  width='100%' cellspacing='0' cellpadding='2'>
        <tr>
          <td width='33%' style='border-top:double medium #CCCCCC;font-size:12px;' valign='top' ><b>Investal24 GmbH</b><br/>
  StNr.:  132/5928/1771<br/>
  USt-IdNr.:  DE264230810<br/>
  </td>
          <td width='33%' style='border-top:double medium #CCCCCC; font-size:12px;' align='center' valign='top'>
  Bundesalle 217<br />
  ,Wuppertal 42327<br/>
  Telefon: (+49) 202 - 6981129<br/>
  </td>

          <td valign='top' width='34%' style='border-top:double medium #CCCCCC;font-size:12px;' align='right'>ST SPK WUPPERTAL<br/> IBAN: DE27 3305 0000 0000 3539 38  <br/>SWIFT/BIC: WUPSDE33XXX <br/>     
  </td>
        </tr>
      </table>
  </td>
    </tr>
  </table>
  </body>
  </html>  
";

  return $file;
}