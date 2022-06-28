<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

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
                <li class="breadcrumb-item active" aria-current="page">Produkt Nr: 0000</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->


        <!--start product detail-->
        <section class="shop-page">
          <div class="shop-container">

            <div class="card shadow-sm border-0">
              <div class="card-body">

                <div class="product-detail-card">
                  <div class="product-detail-body">
                    <div class="row g-0">

                      <div class="col-12 col-lg-12">
                        <div class="product-info-section p-3">
                          <h6>Produkt Name :</h6>
                          <input class="form-control form-control-lg mb-3" type="text" placeholder="100 Gramm Gold"
                            aria-label=".form-control-lg example">
                          <h6>Gewicht :</h6>
                          <input class="form-control form-control-lg mb-3" type="text" placeholder="100 Gramm "
                            aria-label=".form-control-lg example">
                          <h6>Produkt referenz :</h6>
                          <input class="form-control form-control-lg mb-3" type="text" placeholder="S-0254 "
                            aria-label=".form-control-lg example">
                          <h6>Inventor :</h6>
                          <input class="form-control form-control-lg mb-3" type="text" placeholder="20 "
                            aria-label=".form-control-lg example" readonly>
                          <h6>Zusatzinformationen :</h6>
                          <textarea class="form-control form-control-lg mb-3" type="text" placeholder="20 "
                            aria-label=".form-control-lg example">      </textarea>

                          <hr />

                          <h6>Produkt Beschreibung :</h6>
                          <textarea class="form-control form-control-lg mb-3" type="text" placeholder="20 "
                            aria-label=".form-control-lg example">      </textarea>

                          <h5 class="mb-0 mt-4">Produkt Foto</h5>
                          <hr>

                          <input type="file" class="form-control" aria-label="file example" required="">


                        </div>
                      </div>
                    </div>


                    <div class="demo-seprater">
                      <h6 class="mb-0 text-uppercase">Produkt Foto</h6>
                      <div class="my-3 border-bottom"></div>
                    </div>

                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
                      <div class="col">
                        <div class="card radius-10">
                          <div class="card-body">
                            <img src="https://via.placeholder.com/800X500/212529/fff" class="img-fluid mb-3" alt="...">
                            <div class="text-center">
                              <div class="d-grid">
                                <button type="button" class="btn btn-danger px-5 radius-30">Löschen</button>
                              </div>
                            </div>
                          </div>
                        </div>


                      </div>


                    </div>
                    <!--end row-->

                    <div class="text-start mt-3">
                      <button type="button" class="btn btn-dark px-4">Update Produkt </button>
                    </div>
                    <!--end row-->
                  </div>
                </div>



              </div>
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