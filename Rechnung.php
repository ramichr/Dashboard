<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

  <!doctype html>
  <html lang="en" class="semi-dark">

  <?php
  $title = 'Rechnungen';
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
                  <li class="breadcrumb-item active" aria-current="page">Rechnungen</li>
                </ol>
              </nav>
            </div>

          </div>
          <!--end breadcrumb-->






          <div class="card">
            <div class="card-body">
              <h5 class="mb-0">Alle Rechnungen Investal24</h5>
              <hr>
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>#ID</th>
                      <th>ID_Kunde</th>
                      <th>Rechnung Nr.</th>
                      <th>Vor-Nachname</th>
                      <th>Type</th>
                      <th>Datum</th>
                      <th>G.Betrag</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>321</td>
                      <td>INV-jvedz35z</td>
                      <td>Hammadi-Elloumi</td>
                      <td>shop</td>
                      <td>24.06.2022</td>
                      <td>1000 €</td>
                      <td>
                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                          <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>

                  </tbody>

                </table>
              </div>
            </div>
          </div>





        </div>
      </div>
      <!-- end page content-->
    </div>

    <?php include 'layout/footer.php' ?>


    </div>
    <?php include 'layout/script.php' ?>
  </body>

  </html>

<?php } ?>