<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

  <!doctype html>
  <html lang="de" class="semi-dark">

  <?php
  $title = 'Shop Liste';
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



                            <div class="col">
                              <div class="card product-card">

                                <img src="https://via.placeholder.com/400X300/212529/fff" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <div class="product-info">
                                    <a href="javascript:;">
                                      <p class="product-catergory font-13 mb-1">Ref-0521</p>
                                    </a>
                                    <a href="ecommerce-product-details.html">
                                      <h6 class="product-name mb-2">100 Gramm Gold </h6>
                                    </a>
                                    <div class="d-flex align-items-center">
                                      <div class="mb-1 product-price">
                                        <span class="fs-5">20 Stück auf Lager </span>
                                        <div class="spinner-grow text-success" role="status"> <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-danger" role="status"> <span class="visually-hidden">Loading...</span>
                                        </div>
                                      </div>

                                    </div>
                                    <div class="product-action mt-2">
                                      <div class="d-grid">
                                        <a href="javascript:;" class="btn btn-dark btn-ecomm"><i class="lni lni-highlight"></i>Bearbeiten</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>






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

    <?php include 'layout/footer.php' ?>

    </div>

    <?php include 'layout/script.php' ?>


  </body>

  </html>

<?php } ?>