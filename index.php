<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>


<!doctype html>
<html lang="DE" class="semi-dark">


<?php
  $title = 'Dashboard';
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
                <li class="breadcrumb-item"><a href="javascript:;">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Hallo
                  <?= $_SESSION["vorname"] . ' ' . $_SESSION["nachname"] ?>,</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->


        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-12">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-basket2-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">6</h3>
                  <p class="text-muted mb-4">Shop Bestellungen</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="mx-auto widget-icon bg-light-dark text-dark">
                  <i class="bi bi-wallet-fill"></i>
                </div>
                <div class="text-center mt-3">
                  <h3 class="text-dark mb-1">2</h3>
                  <p class="text-muted mb-4">Privat Goldankauf</p>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!--end row-->

        <div class="row">
          <div class="col-12 col-lg-12 col-xl-12 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Investal24 Kunde ubersicht</h6>

                </div>
                <div class="row row-cols-1 row-cols-md-2 g-3 align-items-center">
                  <div class="col-lg-7 col-xl-7 col-xxl-7">
                    <div class="chart-container5">
                      <div class="piechart-legend">
                        <h2 class="mb-1">32</h2>
                        <h6 class="mb-0">Kunde</h6>
                      </div>
                      <canvas id="chart3"></canvas>
                    </div>
                  </div>
                  <div class="col-lg-5 col-xl-5 col-xxl-5">
                    <div class="">
                      <div class="d-flex align-items-start gap-2 mb-3">
                        <div>
                          <ion-icon name="ellipse-sharp" class="text-dark"></ion-icon>
                        </div>
                        <div>
                          <p class="mb-1">Privatkunden</p>
                          <p class="mb-0 h5">15</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start gap-2 mb-3">
                        <div>
                          <ion-icon name="ellipse-sharp" class="text-dark opacity-50"></ion-icon>
                        </div>
                        <div>
                          <p class="mb-1">Geschäftskunden</p>
                          <p class="mb-0 h5">10</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start gap-2">
                        <div>
                          <ion-icon name="ellipse-sharp" class="text-dark opacity-25"></ion-icon>
                        </div>
                        <div>
                          <p class="mb-1">Vermittler</p>
                          <p class="mb-0 h5">7</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
  <!--start footer-->
  <?php include 'layout/footer.php' ?>

  </div>
  <!--script-->
  <?php include 'layout/script.php' ?>
</body>

</html>

<?php } ?>