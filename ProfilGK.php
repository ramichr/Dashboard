<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if (isset($_GET['submit'])) {
    $gKundenId = test_input($_GET['gKundenId']);
    $gkUsername = test_input($_GET['gkUsername']);
    $gkPasswort = test_input($_GET['gkPasswort']);
    $gkVorname = test_input($_GET['gkVorname']);
    $gkNachname = test_input($_GET['gkNachname']);
    $gkFirmenname = test_input($_GET['gkFirmenname']);
    $gkRechtform = test_input($_GET['gkRechtform']);
    $gkUmsatzsteur = test_input($_GET['gkUmsatzsteur']);
    $gkSteurnummer = test_input($_GET['gkSteurnummer']);
    $gkAdresse = test_input($_GET['gkAdresse']);
    $gkPlz = test_input($_GET['gkPlz']);
    $gkStadt = test_input($_GET['gkStadt']);
    $gkEmail = test_input($_GET['gkEmail']);
    $gkTelefonnummer = test_input($_GET['gkTelefonnummer']);
    $gkStatus = test_input($_GET['gkStatus']);
    $gkBonusProzent = test_input($_GET['gkBonusProzent']);
  }

  include "includes/dbh.inc.php";

  $sql = "SELECT `gkAusweis`, `gkFirmenausweis` FROM `gkunden` WHERE gKundenId = '$gKundenId';";
  $result = mysqli_query($conn, $sql);


  $sql1 = "SELECT * FROM `anlage_plan` AS ap INNER JOIN `rechnung` AS r
          ON ap.bestellungNum = r.rechnungNum
          WHERE ap.gKundenId = '$gKundenId';";
  $result1 = mysqli_query($conn, $sql1);


  $sql2 = "SELECT * FROM `goldkonto_plan` AS sp INNER JOIN `rechnung` AS r
          ON sp.bestellungNum = r.rechnungNum
          WHERE sp.gKundenId = '$gKundenId';";
  $result2 = mysqli_query($conn, $sql2);


  $sql3 = "SELECT * FROM `shop_bestellung` AS s INNER JOIN `rechnung` AS r 
          ON s.uberweisungsId = r.rechnungNum
          INNER JOIN `produkt` AS p
          ON s.produktId = p.produktId
          WHERE s.gKundenId = '$gKundenId';";
  $result3 = mysqli_query($conn, $sql3);

  $sql4 = "SELECT * FROM `rechnung` AS r INNER JOIN `gKunden` AS gk 
          ON r.gKundenId = gk.gKundenId
          WHERE gk.gKundenId = '$gKundenId';";
  $result4 = mysqli_query($conn, $sql4);

?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Profil G_Kunden';
  include 'layout/head.php'
  ?>


<body>


  <!--start wrapper-->
  <div class="wrapper">

    <?php include 'layout/menu.php' ?>

    <?php include 'layout/header.php' ?>

    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Dashboard</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Auftrag G.K:</li>
              </ol>
            </nav>
          </div>

        </div>


        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 row-cols-xl-12 row-cols-xxl-12">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body text-center">

                <div class="mt-4">
                  <h4 class="mb-1"><?= $gkVorname . ' ' . $gkNachname ?></h4>
                  <h5 class="mb-0"><?= $gkFirmenname . ' ' . $gkRechtform ?></h5>
                </div>

              </div>
            </div>
          </div>


          <div class="col-12 col-lg-12 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 row-cols-xxl-3 g-3">
                  <div class="col">
                    <div class="card radius-10 border shadow-none mb-0">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="fs-3 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-mail">
                              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                              </path>
                              <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                          </div>
                          <h6 class="mb-0 mt-2">Email: </h6>
                          <h4 class="mb-0 mt-2"><?= $gkEmail ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card radius-10 border shadow-none mb-0">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="fs-3 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-phone">
                              <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                              </path>
                            </svg>
                          </div>
                          <h6 class="mb-0 mt-2">Telefonnummer</h6>
                          <h4 class="mb-0 mt-2"><?= $gkTelefonnummer ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card radius-10 border shadow-none mb-0">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="fs-3 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-user-x">
                              <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                              <circle cx="8.5" cy="7" r="4"></circle>
                              <line x1="18" y1="8" x2="23" y2="13"></line>
                              <line x1="23" y1="8" x2="18" y2="13"></line>
                            </svg>
                          </div>
                          <h6 class="mb-0 mt-2">G_ID</h6>
                          <h4 class="mb-0 mt-2"><?= $gKundenId ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-12 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 row-cols-xxl-3 g-3">
                  <div class="col">
                    <div class="card radius-10 border shadow-none mb-0">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="fs-3 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-command">
                              <path
                                d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z">
                              </path>
                            </svg>
                          </div>
                          <h6 class="mb-0 mt-2">Firma Adresse: </h6>
                          <h4 class="mb-0 mt-2"><?= $gkAdresse . ", " . $gkPlz . " " . $gkStadt ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card radius-10 border shadow-none mb-0">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="fs-3 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-database">
                              <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                              <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                              <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                            </svg>
                          </div>
                          <h6 class="mb-0 mt-2">Steuernummer</h6>
                          <h4 class="mb-0 mt-2"><?= $gkSteurnummer ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card radius-10 border shadow-none mb-0">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="fs-3 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-key">
                              <path
                                d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                              </path>
                            </svg>
                          </div>
                          <h6 class="mb-0 mt-2">USt-IdNr</h6>
                          <h4 class="mb-0 mt-2"><?= $gkUmsatzsteur ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>

          <?php if ($gkStatus === "In_Bearbeitung") { ?>

          <form action="includes/gk-antwort.inc.php" method="GET">
            <input type="hidden" name="gKundenId" value="<?= $gKundenId ?>">
            <input type="hidden" name="gkUsername" value="<?= $gkUsername ?>">
            <input type="hidden" name="gkPasswort" value="<?= $gkPasswort ?>">
            <input type="hidden" name="gkVorname" value="<?= $gkVorname ?>">
            <input type="hidden" name="gkNachname" value="<?= $gkNachname ?>">
            <input type="hidden" name="gkFirmenname" value="<?= $gkFirmenname ?>">
            <input type="hidden" name="gkRechtform" value="<?= $gkRechtform ?>">
            <input type="hidden" name="gkUmsatzsteur" value="<?= $gkUmsatzsteur ?>">
            <input type="hidden" name="gkSteurnummer" value="<?= $gkSteurnummer ?>">
            <input type="hidden" name="gkAdresse" value="<?= $gkAdresse ?>">
            <input type="hidden" name="gkPlz" value="<?= $gkPlz ?>">
            <input type="hidden" name="gkStadt" value="<?= $gkStadt ?>">
            <input type="hidden" name="gkEmail" value="<?= $gkEmail ?>">
            <input type="hidden" name="gkTelefonnummer" value="<?= $gkTelefonnummer ?>">
            <input type="hidden" name="gkBonusProzent" value="<?= $gkBonusProzent ?>">

            <div class="mb-3">
              <label class="form-label">Marge hinzufugen</label>
              <div class="input-group">

                <select class="form-select single-select" id="inputGroupSelect03"
                  aria-label="Example select with button addon" name="BonusProzent">
                  <option value="10" selected>10 % </option>
                  <option value="20">20 % </option>
                  <option value="30">30 % </option>

                </select>
              </div>
            </div>

            <div class="col-12 col-lg-12 d-flex">
              <div class="card radius-10 w-100">
                <div class="card-body">
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-3 row-cols-xxl-2 g-2">
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                            <button type="submit" name="accept" class="btn btn-success px-5 radius-30">Annehmen</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                            <button type="submit" name="decline" class="btn btn-danger px-5 radius-30">Ablehnen</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

          </form>

          <?php } else if ($gkStatus === "aktiv") { ?>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body text-center">

                <div class="mt-4">
                  <h4 class="mb-1">Marge</h4>
                  <h5 class="mb-0"><?= $gkBonusProzent ?></h5>
                </div>

              </div>
            </div>
          </div>
          <?php } ?>

        </div>
        <!--end row-->

        <?php while ($image = mysqli_fetch_assoc($result)) { ?>
        <div class="row row-cols-1 row-cols-lg-2">

          <div class="col">
            <div class="card">
              <a download="ausweis_<?= $gKundenId ?>.jpg"
                href="data:image;charset=utf8;base64,<?= base64_encode($image['gkAusweis']); ?>">
                <img src="data:image;charset=utf8;base64,<?= base64_encode($image['gkAusweis']); ?>"
                  class="card-img-top">
              </a>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <a download="firmenausweis_<?= $gKundenId ?>.jpg"
                href="data:image;charset=utf8;base64,<?= base64_encode($image['gkFirmenausweis']); ?>">
                <img src="data:image;charset=utf8;base64,<?= base64_encode($image['gkFirmenausweis']); ?>"
                  class="card-img-top">
              </a>
            </div>
          </div>

        </div>
        <?php } ?>

        <?php if ($gkStatus === "aktiv") { ?>
        <div class="card radius-10">
          <div class="card-header">
            <h5 class="mb-0">Aktionen</h5>
          </div>
          <div class="card">
            <div class="card-body">
              <h6 class="mb-0">BESTELLUNGEN</h6>
              <br>
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Bst_ID</th>
                      <th>Datum</th>
                      <th>Produkt Name</th>
                      <th>Status</th>
                      <th>Aktion</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php while ($row = mysqli_fetch_assoc($result1)) { ?>
                    <tr>
                      <td><?= $row['anlageId'] ?></td>
                      <td><?= $row['rechnungDatum'] ?></td>
                      <td>Anlageplan</td>
                      <td><?= $row['status'] ?></td>
                      <td>
                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                          <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i
                              class="bi bi-eye-fill"></i></a>
                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="" data-bs-original-title="Delete" aria-label="Delete"><i
                              class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>

                    <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
                    <tr>
                      <td><?= $row['kontoId'] ?></td>
                      <td><?= $row['rechnungDatum'] ?></td>
                      <td>Sparplan</td>
                      <td>pending</td>
                      <td>
                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                          <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i
                              class="bi bi-eye-fill"></i></a>
                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="" data-bs-original-title="Delete" aria-label="Delete"><i
                              class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>

                    <?php while ($row = mysqli_fetch_assoc($result3)) { ?>
                    <tr>
                      <td><?= $row['shopBestellungId'] ?></td>
                      <td><?= $row['rechnungDatum'] ?></td>
                      <td><?= $row['produktName'] ?></td>
                      <td><?= $row['zahlungsStatus'] ?></td>
                      <td>
                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                          <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i
                              class="bi bi-eye-fill"></i></a>
                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="" data-bs-original-title="Delete" aria-label="Delete"><i
                              class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>

                  </tbody>

                </table>
              </div>
            </div>
          </div>



          <div class="card">
            <div class="card-body">
              <h6 class="mb-0">RECHNUNGEN</h6>
              <br>
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Rechnung Nr.</th>
                      <th>Rechnungsart</th>
                      <th>Datum</th>
                      <th>Gesamtbetrag</th>
                      <th>Aktion</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php while ($row = mysqli_fetch_assoc($result4)) { ?>
                    <tr>
                      <td><?= $row['rechnungNum'] ?></td>
                      <td><?= $row['rechnungArt'] ?></td>
                      <td><?= $row['rechnungDatum'] ?></td>
                      <td><?= $row['rechnungBetrag'] ?> €</td>
                      <td>
                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                          <a href="includes/download.inc.php?file=<?= $row['rechnungId'] ?>" target="_blank"
                            class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                            data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>

                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="" data-bs-original-title="Delete" aria-label="Delete"><i
                              class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>

                  </tbody>

                </table>
              </div>
            </div>
          </div>


        </div>
        <?php } ?>

      </div>
    </div>



  </div>

  <?php include 'layout/script.php' ?>

</body>

</html>

<?php } ?>