<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

  <!doctype html>
  <html lang="de" class="semi-dark">

  <?php
  $title = 'Privatkunden liste';
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
                  <li class="breadcrumb-item active" aria-current="page">Privatkunden Liste</li>
                </ol>
              </nav>
            </div>

          </div>

          <hr />

          <h6 class="mb-0 text-uppercase">Privatkunden Liste</h6>
          <hr />
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ID_Kunde</th>
                      <th>Vor/-Nachname</th>
                      <th>Email</th>
                      <th>Telefon</th>
                      <th>Addresse</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>


                    <tr>
                      <td>k-haell203</td>
                      <td>Hammadi Elloumi</td>
                      <td>elloumiha@gmail.com</td>
                      <td>+491727898041</td>
                      <td>Gruitener Str 68, 42327 Wuppertal</td>

                      <td>
                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                          <a href="ProfilPK.php" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
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