<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Geschäftskundenliste';
  include 'layout/head.php'
  ?>


<body>


  <!--start wrapper-->
  <div class="wrapper">

    <?php include 'layout/menu.php' ?>

    <?php include 'layout/header.php' ?>

    <div class="page-content-wrapper">

      <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Dashboard</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="index.php">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Geschäftskundenliste</li>
              </ol>
            </nav>
          </div>

        </div>

        <hr />

        <h6 class="mb-0 text-uppercase">Geschäftskunden liste</h6>
        <hr />
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID_Kunde</th>
                    <th>Vor/-Nachname</th>
                    <th>Firmenname (Rechtform)</th>
                    <th>Telefon</th>
                    <th>Email</th>
                    <th>Addresse</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>


                  <tr>
                    <td>gk-35743</td>
                    <td>Hammadi Elloumi</td>
                    <td>investal24 (GmbH)</td>
                    <td>+491727898041</td>
                    <td>elloumiha@investal24.de</td>
                    <td>Gruitener Str 68, 42327 Wuppertal</td>

                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="ProfilGK.php" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
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

    </div>
  </div>

  <?php include 'layout/footer.php' ?>

  </div>

  <?php include 'layout/script.php' ?>
</body>

</html>

<?php } ?>