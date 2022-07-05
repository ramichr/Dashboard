<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  include "includes/dbh.inc.php";

  $sql = "SELECT * FROM `waren`";

  $result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Waren_Investal Liste';
  include 'layout/head.php'
  ?>



<body>


  <!--start wrapper-->
  <div class="wrapper">

    <?php include 'layout/menu.php' ?>

    <?php include 'layout/header.php' ?>

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
                <li class="breadcrumb-item active" aria-current="page">Waren_Investal Liste</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="card radius-10">
              <form action="includes/warenAdd.inc.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <h5 class="mb-0 mt-4">Produkt Wareninformation</h5>
                  <hr>
                  <div class="row g-3">
                    <div class="col-6">
                      <label class="form-label">Produkt Name *</label>
                      <input name="name" type="text" class="form-control" placeholder="Produkt Name" required>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Produkt Code *</label>
                      <input name="barcode" type="text" class="form-control" placeholder="1234567893216" maxlength="13"
                        required>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Gewicht in Gramm *</label>
                      <input name="gewicht" type="text" class="form-control" placeholder="0.0 g" required>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Bestand *</label>
                      <input name="bestand" type="text" class="form-control" placeholder="Inventor.." required>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Kategorie *</label>
                      <select name="kategorie" class="form-control default-select" required>
                        <option value="">Bitte wählen</option>
                        <option value="GOLD">Gold</option>
                        <option value="SILBER">Silber</option>
                        <option value="PLATIN">Platin</option>
                        <option value="PALLADIUM">Palladium</option>
                        <option value="Büro Material">Büro Material</option>

                      </select>
                    </div>
                  </div>
                  <div class="text-start mt-3">
                    <button type="submit" name="add" class="btn btn-dark px-4">Produkt hinzufügen </button>
                  </div>

                </div>


            </div>
            </form>
          </div>
        </div>
      </div>

      <h6 class="mb-0 text-uppercase">LISTE BESTAND INVESTAL24</h6>
      <hr />
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Produktname</th>
                  <th>Produktscode</th>
                  <th>Gewicht</th>
                  <th>Bestand</th>
                  <th>Kategorie</th>
                  <th>Aktion</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_assoc(($result))) { ?>
                <tr>
                  <td><?= $row['warenName'] ?></td>
                  <td><?= $row['warenBarcode'] ?></td>
                  <td><?= $row['warenGewicht'] ?></td>
                  <td><?= $row['warenBestand'] ?></td>
                  <td><?= $row['warenKategorie'] ?></td>
                  <td>
                    <a href="Detailswahren.php?warenProduktId=<?= $row['warenProduktId'] ?>&warenName=<?= $row['warenName'] ?>"
                      class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                      data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
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

</body>



<?php include 'layout/script.php' ?>

</html>

<?php } ?>