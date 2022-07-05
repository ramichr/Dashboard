<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  include "includes/dbh.inc.php";

  $sql1 = "SELECT * FROM `goldankauf_p` AS ga INNER JOIN `gaste` AS g 
          ON ga.gastUid = g.gastUid  
          WHERE ga.status = 'pending'";
  $result1 = mysqli_query($conn, $sql1);


  $sql2 = "SELECT * FROM `goldankauf_p` AS ga INNER JOIN `kunden` AS k  
          ON ga.kundenId = k.kundenId 
          WHERE ga.status = 'pending'";
  $result2 = mysqli_query($conn, $sql2);


  $sql3 = "SELECT * FROM `goldankauf_p` AS ga INNER JOIN `gKunden` AS gk 
          ON ga.gKundenId = gk.gKundenId
          WHERE ga.status = 'pending'";
  $result3 = mysqli_query($conn, $sql3);

?>

<!doctype html>
<html lang="DE" class="semi-dark">

<?php
  $title = 'Privatgoldankauf (Pending)';
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
                <li class="breadcrumb-item active" aria-current="page">Pending liste Privatgoldankauf</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <h5 class="mb-0">Privatgoldankauf Liste Pendind </h5>
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
                  <?php while ($row = mysqli_fetch_assoc($result1)) { ?>
                  <tr>
                    <td><?= $row['auftragNum'] ?></td>
                    <td><?= $row['versandArt'] ?></td>
                    <td><?= $row['gesamtBetrag'] ?></td>
                    <td>Gast: <?= $row['gastUid'] ?></td>
                    <td><?= $row['gastVorname'] . ' / ' . $row['gastNachname'] ?></td>
                    <td><span class="badge bg-light-warning text-warning w-100"><?= $row['status'] ?></span></td>


                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="auftraggoldbearbeiten.php?role=gast&auftragNum=<?= $row['auftragNum'] ?>&versandArt=<?= $row['versandArt'] ?>&gesamtBetrag=<?= $row['gesamtBetrag'] ?>&id=<?= $row['gastUid'] ?>&vorname=<?= $row['gastVorname'] ?>&nachname=<?= $row['gastNachname'] ?>&email=<?= $row['gastEmail'] ?>&telefonnummer=<?= $row['gastTelefonnummer'] ?>&adresse=<?= $row['gastAdresse'] ?>&plz=<?= $row['gastPlz'] ?>&stadt=<?= $row['gastStadt'] ?>&status=<?= $row['status'] ?>"
                          class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                          data-bs-original-title="Bearbeiten" aria-label="Bearbeiten"><i
                            class="bi bi-pencil-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>

                  <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
                  <tr>
                    <td><?= $row['auftragNum'] ?></td>
                    <td><?= $row['versandArt'] ?></td>
                    <td><?= $row['gesamtBetrag'] ?></td>
                    <td>Kunde: <?= $row['kundenId'] ?></td>
                    <td><?= $row['vorname'] . ' / ' . $row['nachname'] ?></td>
                    <td><span class="badge bg-light-warning text-warning w-100"><?= $row['status'] ?></span></td>


                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="auftraggoldbearbeiten.php?role=kunde&auftragNum=<?= $row['auftragNum'] ?>&versandArt=<?= $row['versandArt'] ?>&gesamtBetrag=<?= $row['gesamtBetrag'] ?>&id=<?= $row['kundenId'] ?>&vorname=<?= $row['vorname'] ?>&nachname=<?= $row['nachname'] ?>&email=<?= $row['email'] ?>&telefonnummer=<?= $row['telefonnummer'] ?>&adresse=<?= $row['adresse'] ?>&plz=<?= $row['plz'] ?>&stadt=<?= $row['stadt'] ?>&status=<?= $row['status'] ?>"
                          class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                          data-bs-original-title="Bearbeiten" aria-label="Bearbeiten"><i
                            class="bi bi-pencil-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>

                  <?php while ($row = mysqli_fetch_assoc($result3)) { ?>
                  <tr>
                    <td><?= $row['auftragNum'] ?></td>
                    <td><?= $row['versandArt'] ?></td>
                    <td><?= $row['gesamtBetrag'] ?></td>
                    <td>Geschäftskunde: <?= $row['gKundenId'] ?></td>
                    <td><?= $row['gkVorname'] . ' / ' . $row['gkNachname'] ?></td>
                    <td><span class="badge bg-light-warning text-warning w-100"><?= $row['status'] ?></span></td>


                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="auftraggoldbearbeiten.php?role=gKunde&auftragNum=<?= $row['auftragNum'] ?>&versandArt=<?= $row['versandArt'] ?>&gesamtBetrag=<?= $row['gesamtBetrag'] ?>&id=<?= $row['gKundenId'] ?>&vorname=<?= $row['gkVorname'] ?>&nachname=<?= $row['gkNachname'] ?>&email=<?= $row['gkEmail'] ?>&telefonnummer=<?= $row['gkTelefonnummer'] ?>&adresse=<?= $row['gkAdresse'] ?>&plz=<?= $row['gkPlz'] ?>&stadt=<?= $row['gkStadt'] ?>&status=<?= $row['status'] ?>"
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