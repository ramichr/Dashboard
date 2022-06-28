<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Profil G_Kunden';
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
                <li class="breadcrumb-item active" aria-current="page">Auftrag G.K:</li>
              </ol>
            </nav>
          </div>

        </div>


        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 row-cols-xl-12 row-cols-xxl-12">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body text-center">

                <div class="mt-4">
                  <h4 class="mb-1">Hammadi Elloumi</h4>
                  <h5 class="mb-0">Investal24 GmbH</h5>
                </div>

              </div>
            </div>
          </div>


          <div class="col-12 col-lg-12 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 row-cols-xxl-3 g-3">
                  <div class="col">
                    <div class="card radius-10 border shadow-none mb-0">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="fs-3 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-mail">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-phone">
                              <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-user-x">
                              <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                              <circle cx="8.5" cy="7" r="4"></circle>
                              <line x1="18" y1="8" x2="23" y2="13"></line>
                              <line x1="23" y1="8" x2="18" y2="13"></line>
                            </svg>
                          </div>
                          <h6 class="mb-0 mt-2">G_ID</h6>
                          <h4 class="mb-0 mt-2">gk-525</h4>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-12 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 row-cols-xxl-3 g-3">
                  <div class="col">
                    <div class="card radius-10 border shadow-none mb-0">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="fs-3 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-command">
                              <path
                                d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z">
                              </path>
                            </svg>
                          </div>
                          <h6 class="mb-0 mt-2">Firma Adresse: </h6>
                          <h4 class="mb-0 mt-2">Bundesalle 217, 42327 Wuppertal</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card radius-10 border shadow-none mb-0">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="fs-3 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-database">
                              <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                              <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                              <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                            </svg>
                          </div>
                          <h6 class="mb-0 mt-2">Steuernummer</h6>
                          <h4 class="mb-0 mt-2">DE21251251</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card radius-10 border shadow-none mb-0">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="fs-3 text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-key">
                              <path
                                d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                              </path>
                            </svg>
                          </div>
                          <h6 class="mb-0 mt-2">USt-IdNr</h6>
                          <h4 class="mb-0 mt-2">962645121821</h4>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>



          <form>

            <div class="mb-3">
              <label class="form-label">Bonus hinzufugen</label>
              <div class="input-group">

                <select class="form-select single-select" id="inputGroupSelect03"
                  aria-label="Example select with button addon" required="">
                  <option selected>Bitte wählen...</option>
                  <option value="10%">10 % </option>
                  <option value="20%">20 % </option>
                  <option value="30%">30 % </option>

                </select>
              </div>
            </div>

            <div class="col-12 col-lg-12 d-flex">
              <div class="card radius-10 w-100">
                <div class="card-body">
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-3 row-cols-xxl-2 g-2">
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                            <button type="button" class="btn btn-success px-5 radius-30">Annehmen</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                            <button type="button" class="btn btn-danger px-5 radius-30">Ablehnen</button>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>
                </div>
              </div>
            </div>


          </form>

        </div>
        <!--end row-->



        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col">
            <div class="card">
              <img src="https://via.placeholder.com/800X500/212529/fff" class="card-img-top" alt="...">

            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="https://via.placeholder.com/800X500/212529/fff" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
        <!--end row-->


      </div>
      <!-- end page content-->
    </div>

    <?php include 'layout/footer.php' ?>

  </div>

  <?php include 'layout/script.php' ?>

</body>

</html>

<?php } ?>