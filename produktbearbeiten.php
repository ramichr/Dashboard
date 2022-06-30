<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  include "includes/dbh.inc.php";

  $produktId = $_GET['produktId'];

  $sql1 = "SELECT * FROM `produkt` WHERE `produktId` = '$produktId';";
  $result1 = mysqli_query($conn, $sql1);


  $sql2 = "SELECT * FROM `produkt_images` WHERE `produktId` = '$produktId';";
  $result2 = mysqli_query($conn, $sql2);


?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Produkt bearbeiten';
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
                <li class="breadcrumb-item active" aria-current="page">Produkt Nr: <?= $produktId ?></li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->


        <!--start product detail-->
        <section class="shop-page">
          <div class="shop-container">

            <div class="card shadow-sm border-0">
              <?php while ($produkt = mysqli_fetch_assoc($result1)) { ?>
              <div class="card-body">
                <form action="includes/produktUpdate.inc.php" method="POST" enctype="multipart/form-data">
                  <div class="product-detail-card">
                    <div class="product-detail-body">
                      <div class="row g-0">

                        <div class="col-12 col-lg-12">
                          <div class="product-info-section p-3">

                            <h6>Produkt Name :</h6>
                            <input name="produktName" class="form-control form-control-lg mb-3" type="text"
                              value="<?= $produkt['produktName'] ?>" aria-label=".form-control-lg example">

                            <h6>Kategorie :</h6>
                            <input name="kategorie" class="form-control form-control-lg mb-3" type="text"
                              value="<?= $produkt['kategorie'] ?>" aria-label=".form-control-lg example">

                            <h6>Gewicht :</h6>
                            <input name="gewicht" class="form-control form-control-lg mb-3" type="text"
                              value="<?= $produkt['gewicht'] ?>" aria-label=".form-control-lg example">

                            <h6>Produkt referenz :</h6>
                            <input name="referenz" class="form-control form-control-lg mb-3" type="text"
                              value="<?= $produkt['referenz'] ?>" aria-label=".form-control-lg example">

                            <h6>Inventor :</h6>
                            <input name="inventor" class="form-control form-control-lg mb-3" type="text"
                              value="<?= $produkt['inventor'] ?>" aria-label=".form-control-lg example">

                            <h6>Zusatzinformationen :</h6>
                            <textarea name="zusatzInfos" class="form-control form-control-lg mb-3" type="text"
                              aria-label=".form-control-lg example"><?= $produkt['zusatzInfos'] ?></textarea>

                            <hr />

                            <h6>Produkt Beschreibung :</h6>
                            <textarea name="beschreibung" class="form-control form-control-lg mb-3" type="text"
                              aria-label=".form-control-lg example"><?= $produkt['beschreibung'] ?></textarea>

                            <h5 class="mb-0 mt-4">Produkt Foto hinzufügen</h5>
                            <hr>

                            <input type="file" name="images[]" class="form-control" aria-label="file example" multiple>


                          </div>
                        </div>
                      </div>


                      <div class="demo-seprater">
                        <h6 class="mb-0 text-uppercase">Produkt Foto</h6>
                        <div class="my-3 border-bottom"></div>
                      </div>

                      <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
                        <?php while ($produktImage = mysqli_fetch_assoc($result2)) { ?>
                        <div class="col">
                          <div class="card radius-10">
                            <div class="card-body">
                              <img style="width: 100%; height: 300px; object-fit: contain;"
                                src="data:image;charset=utf8;base64,<?= base64_encode($produktImage['image']); ?>"
                                class="img-fluid mb-3" alt="...">
                              <div class="text-center">
                                <div class="d-grid">
                                  <a href="includes/produktUpdate.inc.php?produktId=<?= $produktImage['produktId'] ?>&produktImageId=<?= $produktImage['produktImageId'] ?>"
                                    class="btn btn-danger px-5 radius-30">Löschen</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php } ?>

                      </div>
                      <!--end row-->
                      <input type="hidden" name="produktId" value="<?= $produkt['produktId'] ?>">
                      <div class="text-start mt-3">
                        <button type="submit" name="update" class="btn btn-dark px-4">Update Produkt </button>
                      </div>
                      <!--end row-->
                    </div>
                  </div>
                </form>


              </div>
              <?php } ?>
            </div>

          </div>
        </section>

      </div>
    </div>

  </div>


  <?php include 'layout/script.php' ?>

</body>

</html>
<?php } ?>