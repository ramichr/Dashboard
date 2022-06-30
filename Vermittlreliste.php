<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  include 'includes/dbh.inc.php';


  $sql = 'SELECT * FROM `vermittler` WHERE `vStatus` = "aktiv"';
  $result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Vermittler liste';
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
                <li class="breadcrumb-item active" aria-current="page">Vermittler Liste</li>
              </ol>
            </nav>
          </div>

        </div>

        <hr />

        <h6 class="mb-0 text-uppercase">Vermittler Liste</h6>
        <hr />
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID_Kunde</th>
                    <th>Vor/-Nachname</th>
                    <th>Firmenname (Rechtform)</th>
                    <th>Telefon</th>
                    <th>Email</th>
                    <th>Addresse</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                  <tr>

                    <td><?= $row['vUsername'] ?></td>
                    <td><?= $row['vVorname'] . ' / ' . $row['vNachname'] ?></td>
                    <td><?= $row['vFirmenname'] . ' (' . $row['vRechtform'] . ')' ?></td>
                    <td><?= $row['vEmail'] ?></td>
                    <td><?= $row['vTelefonnummer'] ?></td>
                    <td><?= $row['vAdresse'] ?><br><?= $row['vPlz'] . ' ' . $row['vStadt'] ?></td>

                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <form action="profilV.php" method="GET">
                          <input type="hidden" name="vermittlerId" value="<?= $row['vermittlerId'] ?>">
                          <input type="hidden" name="vUsername" value="<?= $row['vUsername'] ?>">
                          <input type="hidden" name="vPasswort" value="<?= $row['vPasswort'] ?>">
                          <input type="hidden" name="vVorname" value="<?= $row['vVorname'] ?>">
                          <input type="hidden" name="vNachname" value="<?= $row['vNachname'] ?>">
                          <input type="hidden" name="vFirmenname" value="<?= $row['vFirmenname'] ?>">
                          <input type="hidden" name="vRechtform" value="<?= $row['vRechtform'] ?>">
                          <input type="hidden" name="vUmsatzsteur" value="<?= $row['vUmsatzsteur'] ?>">
                          <input type="hidden" name="vSteurnummer" value="<?= $row['vSteurnummer'] ?>">
                          <input type="hidden" name="vAdresse" value="<?= $row['vAdresse'] ?>">
                          <input type="hidden" name="vPlz" value="<?= $row['vPlz'] ?>">
                          <input type="hidden" name="vStadt" value="<?= $row['vStadt'] ?>">
                          <input type="hidden" name="vEmail" value="<?= $row['vEmail'] ?>">
                          <input type="hidden" name="vTelefonnummer" value="<?= $row['vTelefonnummer'] ?>">
                          <input type="hidden" name="vBonusProzent" value="<?= $row['vBonusProzent'] ?>">
                          <input type="hidden" name="vStatus" value="<?= $row['vStatus'] ?>">

                          <button style="border: none;" type="submit" name="submit" class="text-primary"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views"
                            aria-label="Views"><i class="bi bi-eye-fill"></i></button>

                        </form>
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
  </div>

  <?php include 'layout/footer.php' ?>

  </div>

  <?php include 'layout/script.php' ?>
</body>

</html>

<?php } ?>