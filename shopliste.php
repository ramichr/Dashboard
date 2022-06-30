<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  include "includes/dbh.inc.php";

  $sql = "SELECT * FROM `produkt`";

  $result = mysqli_query($conn, $sql);


?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Shopliste';
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
                <li class="breadcrumb-item active" aria-current="page">Shop Liste</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->

        <!--start shop area-->
        <section class="shop-page">
          <div class="shop-container">
            <div class="card shadow-sm border-0">
              <div class="card-body">
                <div class="row">


                  <div class="col-12 col-xl-12">
                    <div class="product-wrapper">
                      <div class="card">
                        <div class="card-body">
                          <div class="position-relative">
                            <input type="text" class="form-control ps-5" placeholder="Search Product...">
                            <span class="position-absolute top-50 product-show translate-middle-y">
                              <ion-icon name="search-sharp" class="ms-3 fs-6"></ion-icon>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="product-grid">


                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">



                          <?php while ($produkt = mysqli_fetch_assoc($result)) { ?>
                          <div class="col">
                            <div class="card product-card">
                              <?php
                                  $produktId = $produkt['produktId'];

                                  $sql2 = "SELECT * FROM `produkt_images` WHERE `produktId` = '$produktId'";

                                  $result2 = mysqli_query($conn, $sql2);

                                  $image = mysqli_fetch_assoc($result2);
                                  ?>
                              <img style="width: 100%; height: 300px; object-fit: contain;"
                                src="data:image;charset=utf8;base64,<?= base64_encode($image['image']); ?>"
                                class="card-img-top" alt="...">
                              <div class="card-body">
                                <div class="product-info">

                                  <p class="product-catergory font-13 mb-1"><?= $produkt['referenz'] ?></p>


                                  <h6 class="product-name mb-2"><?= $produkt['produktName'] ?></h6>

                                  <div class="d-flex align-items-center">
                                    <div class="mb-1 product-price">
                                      <span class="fs-5"><?= $produkt['inventor'] ?> Stück auf Lager </span>
                                      <?php if ((int)$produkt['inventor'] <= 5) { ?>
                                      <div class="spinner-grow text-danger" role="status"> <span
                                          class="visually-hidden">Loading...</span>
                                      </div>
                                      <?php } else { ?>
                                      <div class="spinner-grow text-success" role="status"> <span
                                          class="visually-hidden">Loading...</span>
                                      </div>
                                      <?php  } ?>


                                    </div>

                                  </div>
                                  <div class="product-action mt-2">
                                    <div class="d-grid">
                                      <a href="produktbearbeiten.php?produktId=<?= $produkt['produktId'] ?>"
                                        class="btn btn-dark btn-ecomm"><i class="lni lni-highlight"></i>Bearbeiten</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } ?>


                        </div>
                        <!--end row-->
                      </div>

                    </div>
                  </div>
                </div>
                <!--end row-->
              </div>
            </div>
          </div>
        </section>
        <!--end shop area-->

      </div>
      <!-- end page content-->
    </div>



  </div>
  </div>



  </div>

  <?php include 'layout/script.php' ?>


</body>

</html>

<?php } ?>