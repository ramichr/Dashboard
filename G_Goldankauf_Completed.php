<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

<!doctype html>
<html lang="DE" class="semi-dark">

<?php
  $title = 'Geschäftskunden (Fertig)';
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
          <div class="breadcrumb-title pe-3">Tables</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Paid liste Geschäftskunden</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <h5 class="mb-0">Geschäftskunden liste Paid </h5>
              <form class="ms-auto position-relative">
                <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                  <ion-icon name="search-sharp"></ion-icon>
                </div>
                <input class="form-control ps-5" type="text" placeholder="search">
              </form>
            </div>
            <div class="table-responsive mt-3">
              <table class="table align-middle mb-0">
                <thead class="table-light">


                  <tr>
                    <th>Auftrag_ID</th>
                    <th>G_ID</th>
                    <th>Firma</th>
                    <th>Kunden_Name</th>
                    <th>Versandart</th>
                    <th>Gesamt Betrag</th>
                    <th>Status</th>
                    <th>Aktion</th>
                  </tr>


                </thead>
                <tbody>

                  <tr>
                    <td>INV24-673082</td>
                    <td>gk-542496</td>
                    <td>Investal24 GmbH</td>
                    <td>Rami Cheick rouhou</td>
                    <td>Werttransport</td>
                    <td>12932,80 €</td>
                    <td><span class="badge bg-light-success text-success w-100">Paid</span></td>


                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                      </div>
                    </td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
        </div>



      </div>
      <!-- end page content-->
    </div>
  </div>

  <?php include 'layout/footer.php' ?>

  </div>

  <?php include 'layout/script.php' ?>

  </div>


</body>

</html>

<?php } ?>