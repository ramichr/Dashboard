<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {



?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Produkt hinzufügen';
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
                <li class="breadcrumb-item active" aria-current="page">Produkt hinzüfugen</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="card radius-10">
              <form action="includes/produktAdd.inc.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <h5 class="mb-0 mt-4">Produkt Information</h5>
                  <hr>
                  <div class="row g-3">
                    <div class="col-6">
                      <label class="form-label">Produkt Name *</label>
                      <input name="produktName" type="text" class="form-control" placeholder="Produkt Name" required>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Produkt referenz *</label>
                      <input name="referenz" type="text" class="form-control" placeholder="S-0252" required>
                    </div>


                    <div class="col-6">
                      <label class="form-label">Gewicht *</label>
                      <input name="gewicht" type="text" class="form-control" placeholder="0.0 g" required>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Inventor *</label>
                      <input name="inventor" type="text" class="form-control" placeholder="Inventor.." required>
                    </div>


                    <div class="col-6">
                      <label class="form-label">Versandkosten *</label>
                      <input name="versandkosten" type="text" class="form-control" placeholder="4.99 €" required>
                    </div>
                    <div class="col-6">
                      <label class="form-label">Handleraufschlag *</label>
                      <input name="handleraufschlag" type="text" class="form-control" placeholder="10 %" required>
                    </div>


                    <div class="col-12">
                      <label class="form-label">Kategorie *</label>
                      <select name="kategorie" class="form-control default-select" required>
                        <option value="">bitte wählen</option>
                        <option value="GOLDBARREN">GOLD</option>
                        <option value="SILBERBARREN">SILBER</option>
                        <option value="PLATIN">PLATIN</option>
                        <option value="PALLADIUM">PALLADIUM</option>
                        <option value="GOLDMÜNZEN">GOLDMÜNZEN</option>
                      </select>
                    </div>
                  </div>

                  <h5 class="mb-0 mt-4">Zusatzinformationen</h5>
                  <hr>
                  <div class="row g-3">

                    <div class="col-12">
                      <label class="form-label">Zusatzinformationen *</label>
                      <textarea name="zusatzInfos" class="form-control" rows="4" cols="4"
                        placeholder="Zusatzinformationen..."></textarea>

                    </div>

                    <div class="col-12">
                      <label class="form-label">Produkt Beschreibung *</label>
                      <textarea name="beschreibung" class="form-control" rows="4" cols="10"
                        placeholder="Produkt Beschreibung"></textarea>
                    </div>
                  </div>

                  <h5 class="mb-0 mt-4">Produkt Foto</h5>
                  <hr>

                  <input type="file" name="images[]" class="form-control" aria-label="file example" multiple required>

                  <div class="text-start mt-3">
                    <button type="submit" name="add" class="btn btn-dark px-4">Produkt hinzufügen </button>
                  </div>
                </div>
              </form>
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