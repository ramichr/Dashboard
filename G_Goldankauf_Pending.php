<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

<!doctype html>
<html lang="DE" class="semi-dark">

<?php

  $title = 'Geschäftskunden (Pending)';
  include 'layout/head.php';

  include "includes/dbh.inc.php";


  $sql = "SELECT * FROM `goldankauf_gk` AS gagk INNER JOIN `gKunden` AS gk 
          ON gagk.gKundenId = gk.gKundenId
          WHERE gagk.status = 'pending'";
  $result = mysqli_query($conn, $sql);

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
                <li class="breadcrumb-item active" aria-current="page">Pending liste Geschäftskunden</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <h5 class="mb-0">Geschäftskunden Liste Pendind </h5>
              <form class="ms-auto position-relative">
                <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                  <ion-icon name="search-sharp"></ion-icon>
                </div>
                <input class="form-control ps-5" type="text" placeholder="search">
              </form>
            </div>
            <div class="table-responsive mt-3">
              <table class="table align-middle mb-0">
                <thead class="table-light">

                  <tr>
                    <th>Auftrag_ID</th>
                    <th>Versandart</th>
                    <th>Gesamtbetrag</th>
                    <th>ID</th>
                    <th>Vorname / Nachname</th>
                    <th>Status</th>
                    <th>Aktion</th>
                  </tr>

                </thead>
                <tbody>

                  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td><?= $row['auftragNum'] ?></td>
                    <td><?= $row['versandArt'] ?></td>
                    <td><?= $row['gesamtBetrag'] ?></td>
                    <td>Geschäftskunde: <?= $row['gKundenId'] ?></td>
                    <td><?= $row['gkVorname'] . ' / ' . $row['gkNachname'] ?></td>
                    <td><span class="badge bg-light-warning text-warning w-100"><?= $row['status'] ?></span></td>


                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="auftraggoldbearbeiten.php?role=gKunde&auftragNum=<?= $row['auftragNum'] ?>&versandArt=<?= $row['versandArt'] ?>&gesamtBetrag=<?= $row['gesamtBetrag'] ?>&id=<?= $row['gKundenId'] ?>&vorname=<?= $row['gkVorname'] ?>&nachname=<?= $row['gkNachname'] ?>&email=<?= $row['gkEmail'] ?>&telefonnummer=<?= $row['gkTelefonnummer'] ?>&adresse=<?= $row['gkAdresse'] ?>&plz=<?= $row['gkPlz'] ?>&stadt=<?= $row['gkStadt'] ?>&status=<?= $row['status'] ?>&geschaft="
                          class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                          data-bs-original-title="Bearbeiten" aria-label="Bearbeiten"><i
                            class="bi bi-pencil-fill"></i></a>
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
      <!-- end page content-->
    </div>
  </div>

  <?php include 'layout/footer.php' ?>

  </div>

  <?php include 'layout/script.php' ?>

  </div>


</body>

</html>
<?php } ?>