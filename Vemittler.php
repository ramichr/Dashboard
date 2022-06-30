<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  include "includes/dbh.inc.php";

  $sql = 'SELECT * FROM `vermittler` WHERE `vStatus` = "In_Bearbeitung"';

  $result = mysqli_query($conn, $sql);


?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Vermittler Anfrag';
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
                <li class="breadcrumb-item"><a href="index.php">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Vermittler Liste</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->



        <hr />

        <h6 class="mb-0 text-uppercase">Vermittler Liste</h6>
        <hr />
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Vor/Nachname</th>
                    <th>Firma</th>
                    <th>Rechtform</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($vermittler = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td><?= $vermittler['vermittlerId'] ?></td>
                    <td><?= $vermittler['vVorname'] . ' ' . $vermittler['vNachname'] ?></td>
                    <td><?= $vermittler['vFirmenname'] ?></td>
                    <td><?= $vermittler['vRechtform'] ?></td>
                    <td><?= $vermittler['vEmail'] ?></td>
                    <td>
                      <button type="button"
                        class="btn btn-primary px-3 radius-30"><?= $vermittler['vStatus'] ?></button>
                    </td>
                    <td>
                      <form action="profilV.php" method="GET">
                        <input type="hidden" name="vermittlerId" value="<?= $vermittler['vermittlerId'] ?>">
                        <input type="hidden" name="vUsername" value="<?= $vermittler['vUsername'] ?>">
                        <input type="hidden" name="vPasswort" value="<?= $vermittler['vPasswort'] ?>">
                        <input type="hidden" name="vVorname" value="<?= $vermittler['vVorname'] ?>">
                        <input type="hidden" name="vNachname" value="<?= $vermittler['vNachname'] ?>">
                        <input type="hidden" name="vFirmenname" value="<?= $vermittler['vFirmenname'] ?>">
                        <input type="hidden" name="vRechtform" value="<?= $vermittler['vRechtform'] ?>">
                        <input type="hidden" name="vUmsatzsteur" value="<?= $vermittler['vUmsatzsteur'] ?>">
                        <input type="hidden" name="vSteurnummer" value="<?= $vermittler['vSteurnummer'] ?>">
                        <input type="hidden" name="vAdresse" value="<?= $vermittler['vAdresse'] ?>">
                        <input type="hidden" name="vPlz" value="<?= $vermittler['vPlz'] ?>">
                        <input type="hidden" name="vStadt" value="<?= $vermittler['vStadt'] ?>">
                        <input type="hidden" name="vEmail" value="<?= $vermittler['vEmail'] ?>">
                        <input type="hidden" name="vTelefonnummer" value="<?= $vermittler['vTelefonnummer'] ?>">
                        <input type="hidden" name="vBonusProzent" value="<?= $vermittler['vBonusProzent'] ?>">
                        <input type="hidden" name="vStatus" value="<?= $vermittler['vStatus'] ?>">

                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                          <button style="border: none;" type="submit" name="submit" class="text-warning"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></button>
                        </div>
                      </form>
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
  </div>

  <?php include 'layout/footer.php' ?>

  </div>

  <?php include 'layout/script.php' ?>
</body>

</html>

<?php } ?>