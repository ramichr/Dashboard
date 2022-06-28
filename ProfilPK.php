<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

  <!doctype html>
  <html lang="de" class="semi-dark">

  <?php
  $title = 'Profil P_Kunden';
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
                  <li class="breadcrumb-item active" aria-current="page">Auftrag P.K:</li>
                </ol>
              </nav>
            </div>

          </div>


          <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 row-cols-xl-12 row-cols-xxl-12">
            <div class="col">
              <div class="card radius-10">
                <div class="card-body text-center">

                  <div class="mt-4">
                    <h1 class="mb-1">Hammadi Elloumi</h1>
                  </div>

                </div>
              </div>
            </div>


            <div class="col-12 col-lg-12 d-flex">
              <div class="card radius-10 w-100">
                <div class="card-body">
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-2 row-cols-xxl-2 g-2">
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="fs-3 text-dark">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                              </svg>
                            </div>
                            <h6 class="mb-0 mt-2">Email: </h6>
                            <h4 class="mb-0 mt-2">elloumiha@Investal24.de</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="fs-3 text-dark">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                              </svg>
                            </div>
                            <h6 class="mb-0 mt-2">Telefonnummer</h6>
                            <h4 class="mb-0 mt-2">+491727898041</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="fs-3 text-dark">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-x">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="18" y1="8" x2="23" y2="13"></line>
                                <line x1="23" y1="8" x2="18" y2="13"></line>
                              </svg>
                            </div>
                            <h6 class="mb-0 mt-2">Kunden ID</h6>
                            <h4 class="mb-0 mt-2">k-52665</h4>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="fs-3 text-dark">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command">
                                <path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z">
                                </path>
                              </svg>
                            </div>
                            <h6 class="mb-0 mt-2">Firma Adresse: </h6>
                            <h4 class="mb-0 mt-2">Bundesalle 217, 42327 Wuppertal</h4>
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card radius-10">
            <div class="card-header">
              <h5 class="mb-0">Aktionen</h5>
            </div>

            <div class="card-body">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      BESTELLUNG
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">



                    <div class="card">
                      <div class="card-body">
                        <div class="table-responsive">
                          <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                              <tr>
                                <th>Bst_ID</th>
                                <th>Datum</th>
                                <th>Produkt Name</th>
                                <th>Status</th>
                                <th>Aktion</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>#0012451</td>
                                <td>04/08/2020</td>
                                <td>Anlage Plan</td>
                                <td>Pending</td>
                                <td>
                                  <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td>#0012451</td>
                                <td>04/08/2020</td>
                                <td>Anlage Plan</td>
                                <td>Pending</td>
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
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      RECHNUNGEN
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">hier kommt dier rechnungen.</div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>



    <?php include 'layout/script.php' ?>

  </body>

  </html>

<?php } ?>