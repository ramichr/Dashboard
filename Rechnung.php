<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  include "includes/dbh.inc.php";

  $sql1 = "SELECT * FROM `rechnung` AS r INNER JOIN `gaste` AS g
  ON r.`gastUid` = g.`gastUid`";
  $result1 = mysqli_query($conn, $sql1);


  $sql2 = "SELECT * FROM `rechnung` AS r INNER JOIN `kunden` AS k 
  ON r.`kundenId` = k.`kundenId`";
  $result2 = mysqli_query($conn, $sql2);


  $sql3 = "SELECT * FROM `rechnung` AS r INNER JOIN `gKunden` AS gk
  ON r.`gKundenId` = gk.`gKundenId`";
  $result3 = mysqli_query($conn, $sql3);

?>

<!doctype html>
<html lang="en" class="semi-dark">

<?php
  $title = 'Rechnungen';
  include 'layout/head.php'
  ?>


<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start sidebar -->
    <?php include 'layout/menu.php' ?>
    <!--end sidebar -->

    <!--start top header-->
    <?php include 'layout/header.php' ?>
    <!--end top header-->


    <!-- start page content wrapper-->
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
                <li class="breadcrumb-item active" aria-current="page">Rechnungen</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->



        <div class="card">
          <div class="card-body">
            <h5 class="mb-0">Alle Rechnungen Investal24</h5>
            <hr>
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%;">
                <thead>
                  <tr>
                    <th>#ID</th>
                    <th>ID_Kunde</th>
                    <th>Rechnung Nr.</th>
                    <th>Vor / -Nachname</th>
                    <th>Rechnungsart</th>
                    <th>Datum</th>
                    <th>Gesamtbetrag</th>
                    <th>Aktion</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($gast = mysqli_fetch_assoc($result1)) { ?>
                  <tr>
                    <td><?= $gast['rechnungId'] ?></td>
                    <td>Gast: <?= $gast['gastUid'] ?></td>
                    <td><?= $gast['rechnungNum'] ?></td>
                    <td><?= $gast['gastVorname'] . ' / ' . $gast['gastNachname'] ?></td>
                    <td><?= $gast['rechnungArt'] ?></td>
                    <td><?= $gast['rechnungDatum'] ?></td>
                    <td><?= $gast['rechnungBetrag'] ?> €</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="includes/download.inc.php?file=<?= $gast['rechnungId'] ?>" target="_blank"
                          class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                          data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>

                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Delete" aria-label="Delete"><i
                            class="bi bi-trash-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>

                  <?php while ($kunde = mysqli_fetch_assoc($result2)) { ?>
                  <tr>
                    <td><?= $kunde['rechnungId'] ?></td>
                    <td>Kunde: <?= $kunde['kundenId'] ?></td>
                    <td><?= $kunde['rechnungNum'] ?></td>
                    <td><?= $kunde['vorname'] . ' / ' . $kunde['nachname'] ?></td>
                    <td><?= $kunde['rechnungArt'] ?></td>
                    <td><?= $kunde['rechnungDatum'] ?></td>
                    <td><?= $kunde['rechnungBetrag'] ?> €</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="includes/download.inc.php?file=<?= $kunde['rechnungId'] ?>" target="_blank"
                          class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                          data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>

                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Delete" aria-label="Delete"><i
                            class="bi bi-trash-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>

                  <?php while ($gKunde = mysqli_fetch_assoc($result3)) { ?>
                  <tr>
                    <td><?= $gKunde['rechnungId'] ?></td>
                    <td>Geschäftkunde: <?= $gKunde['gKundenId'] ?></td>
                    <td><?= $gKunde['rechnungNum'] ?></td>
                    <td><?= $gKunde['gkVorname'] . ' / ' . $gKunde['gkNachname'] ?></td>
                    <td><?= $gKunde['rechnungArt'] ?></td>
                    <td><?= $gKunde['rechnungDatum'] ?></td>
                    <td><?= $gKunde['rechnungBetrag'] ?> €</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="includes/download.inc.php?file=<?= $gKunde['rechnungId'] ?>" target="_blank"
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
    </div>
    <!-- end page content-->
  </div>



  </div>

  <?php include 'layout/script.php' ?>

</body>



</html>

<?php } ?>