<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  include 'includes/dbh.inc.php';


  $sql = 'SELECT * FROM `gKunden` WHERE `gkStatus` = "aktiv"';
  $result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Geschäftskundenliste';
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
                <li class="breadcrumb-item active" aria-current="page">Geschäftskundenliste</li>
              </ol>
            </nav>
          </div>

        </div>

        <hr />

        <h6 class="mb-0 text-uppercase">Geschäftskunden liste</h6>
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

                    <td><?= $row['gkUsername'] ?></td>
                    <td><?= $row['gkVorname'] . ' / ' . $row['gkNachname'] ?></td>
                    <td><?= $row['gkFirmenname'] . ' (' . $row['gkRechtform'] . ')' ?></td>
                    <td><?= $row['gkEmail'] ?></td>
                    <td><?= $row['gkTelefonnummer'] ?></td>
                    <td><?= $row['gkAdresse'] ?><br><?= $row['gkPlz'] . ' ' . $row['gkStadt'] ?></td>

                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <form action="ProfilGK.php" method="GET">
                          <input type="hidden" name="gKundenId" value="<?= $row['gKundenId'] ?>">
                          <input type="hidden" name="gkUsername" value="<?= $row['gkUsername'] ?>">
                          <input type="hidden" name="gkPasswort" value="<?= $row['gkPasswort'] ?>">
                          <input type="hidden" name="gkVorname" value="<?= $row['gkVorname'] ?>">
                          <input type="hidden" name="gkNachname" value="<?= $row['gkNachname'] ?>">
                          <input type="hidden" name="gkFirmenname" value="<?= $row['gkFirmenname'] ?>">
                          <input type="hidden" name="gkRechtform" value="<?= $row['gkRechtform'] ?>">
                          <input type="hidden" name="gkUmsatzsteur" value="<?= $row['gkUmsatzsteur'] ?>">
                          <input type="hidden" name="gkSteurnummer" value="<?= $row['gkSteurnummer'] ?>">
                          <input type="hidden" name="gkAdresse" value="<?= $row['gkAdresse'] ?>">
                          <input type="hidden" name="gkPlz" value="<?= $row['gkPlz'] ?>">
                          <input type="hidden" name="gkStadt" value="<?= $row['gkStadt'] ?>">
                          <input type="hidden" name="gkEmail" value="<?= $row['gkEmail'] ?>">
                          <input type="hidden" name="gkTelefonnummer" value="<?= $row['gkTelefonnummer'] ?>">
                          <input type="hidden" name="gkBonusProzent" value="<?= $row['gkBonusProzent'] ?>">
                          <input type="hidden" name="gkStatus" value="<?= $row['gkStatus'] ?>">

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