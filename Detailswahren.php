<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  include "includes/dbh.inc.php";

  $warenProduktId = $_GET['warenProduktId'];
  $warenName = $_GET['warenName'];


  $sql = "SELECT * FROM `waren_details` AS wd INNER JOIN `waren` AS w
          ON wd.`warenProduktId` = w.`warenProduktId`
          WHERE wd.`warenProduktId` = '$warenProduktId'";

  $result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Waren_Investal_Deteils Liste';
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
                <li class="breadcrumb-item active" aria-current="page">Waren_Investal_Deteils Liste</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="card radius-10">
              <form action="includes/warenDetails.inc.php" method="GET" enctype="multipart/form-data">
                <input type="hidden" name="warenProduktId" value="<?= $warenProduktId ?>">
                <input type="hidden" name="warenName" value="<?= $warenName ?>">

                <div class="card-body">
                  <h5 class="mb-0 mt-4">Produkt Wareninformation</h5>
                  <hr>
                  <div class="row g-3">

                    <div class="col-6">
                      <label class="form-label">Produkt Code *</label>
                      <input name="warenReferenz" type="text" class="form-control" placeholder="S-12345" required>
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

      <h6 class="mb-0 text-uppercase">LISTE BESTAND FÜR <?= $warenName ?></h6>
      <hr />
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Produktname</th>
                  <th>Produktreferenz</th>
                  <th>Status</th>
                  <th>Aktion</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td><?= $row['warenName'] ?></td>
                  <td><?= $row['warenReferenz'] ?></td>
                  <td><?= $row['warenStatus'] ?></td>

                  <td>
                    <a href="includes/warenDetails.inc.php?warenDetailsId=<?= $row['warenDetailsId'] ?>&warenProduktId=<?= $row['warenProduktId'] ?>&warenName=<?= $row['warenName'] ?>&update="
                      class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                      data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>

                    <a href="includes/warenDetails.inc.php?warenDetailsId=<?= $row['warenDetailsId'] ?>&warenProduktId=<?= $row['warenProduktId'] ?>&warenName=<?= $row['warenName'] ?>&delete="
                      class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                      data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
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