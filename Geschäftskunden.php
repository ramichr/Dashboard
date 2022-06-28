<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  include "includes/dbh.inc.php";

  $sql = 'SELECT * FROM `gKunden` WHERE `gkStatus` = "In_Bearbeitung"';

  $result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Geschäftskunden Anfrage';
  include 'layout/head.php'
  ?>


<body>


  <!--start wrapper-->
  <div class="wrapper">

    <?php include 'layout/menu.php' ?>

    <?php include 'layout/header.php' ?>

    <div class="page-content-wrapper">

      <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Dashboard</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="index.php">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Geschäftskunden Liste</li>
              </ol>
            </nav>
          </div>

        </div>

        <hr />

        <h6 class="mb-0 text-uppercase">Geschäftskunden Liste</h6>
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
                  <?php while ($gKunde = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td><?= $gKunde['gKundenId'] ?></td>
                    <td><?= $gKunde['gkVorname'] . ' ' . $gKunde['gkNachname'] ?></td>
                    <td><?= $gKunde['gkFirmenname'] ?></td>
                    <td><?= $gKunde['gkRechtform'] ?></td>
                    <td><?= $gKunde['gkEmail'] ?></td>
                    <td>
                      <button type="button" class="btn btn-warning px-3 radius-10"><?= $gKunde['gkStatus'] ?></button>
                    </td>
                    <td>
                      <form action="ProfilGK.php" method="GET">
                        <input type="hidden" name="gKundenId" value="<?= $gKunde['gKundenId'] ?>">
                        <input type="hidden" name="gkUsername" value="<?= $gKunde['gkUsername'] ?>">
                        <input type="hidden" name="gkPasswort" value="<?= $gKunde['gkPasswort'] ?>">
                        <input type="hidden" name="gkVorname" value="<?= $gKunde['gkVorname'] ?>">
                        <input type="hidden" name="gkNachname" value="<?= $gKunde['gkNachname'] ?>">
                        <input type="hidden" name="gkFirmenname" value="<?= $gKunde['gkFirmenname'] ?>">
                        <input type="hidden" name="gkRechtform" value="<?= $gKunde['gkRechtform'] ?>">
                        <input type="hidden" name="gkUmsatzsteur" value="<?= $gKunde['gkUmsatzsteur'] ?>">
                        <input type="hidden" name="gkSteurnummer" value="<?= $gKunde['gkSteurnummer'] ?>">
                        <input type="hidden" name="gkAdresse" value="<?= $gKunde['gkAdresse'] ?>">
                        <input type="hidden" name="gkPlz" value="<?= $gKunde['gkPlz'] ?>">
                        <input type="hidden" name="gkStadt" value="<?= $gKunde['gkStadt'] ?>">
                        <input type="hidden" name="gkEmail" value="<?= $gKunde['gkEmail'] ?>">
                        <input type="hidden" name="gkTelefonnummer" value="<?= $gKunde['gkTelefonnummer'] ?>">
                        <input type="hidden" name="gkBonusProzent" value="<?= $gKunde['gkBonusProzent'] ?>">
                        <input type="hidden" name="gkStatus" value="<?= $gKunde['gkStatus'] ?>">

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