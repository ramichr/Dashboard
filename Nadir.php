<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Nadir - ' . date("d.m.Y");
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
                <li class="breadcrumb-item active" aria-current="page">Fixierung Liste</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->



        <hr />

        <h6 class="mb-0 text-uppercase">Fixierung Liste</h6>
        <hr />
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Produkt</th>
                    <th>Fixirung</th>
                    <th>Gold Summe</th>

                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>002</td>
                    <td>Anlage plan</td>
                    <td>26.06.2022 - 16:20</td>
                    <td>200 Gramm</td>

                  </tr>

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