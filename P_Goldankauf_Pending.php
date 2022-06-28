<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

<!doctype html>
<html lang="DE" class="semi-dark">

<?php
  $title = 'Privatgoldankauf (Pending)';
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
                <li class="breadcrumb-item active" aria-current="page">Pending liste Privatgoldankauf</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <h5 class="mb-0">Privatgoldankauf Liste Pendind </h5>
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
                    <th>Versandart</th>
                    <th>Gesamt Betrag</th>
                    <th>Kunden_ID</th>
                    <th>Kunden_Name</th>
                    <th>Status</th>
                    <th>Aktion</th>
                  </tr>

                </thead>
                <tbody>

                  <tr>
                    <td>INV24-673082</td>
                    <td>Werttransport</td>
                    <td>12932,80 €</td>
                    <td>Gast_125</td>
                    <td>Rami Cheick rouhou</td>
                    <td><span class="badge bg-light-warning text-warning w-100">Pending</span></td>


                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Bearbeiten" aria-label="Bearbeiten"><i
                            class="bi bi-pencil-fill"></i></a>
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