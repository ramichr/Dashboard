<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Goldanfrage bearbeiten';
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
                <li class="breadcrumb-item active" aria-current="page">Auftrag Nr: 0000 </li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->


        <form>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">


            <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1">Vor-/Nachname</p>
                      <h5 class="mb-0 text-dark">Oliver Schnur</h5>
                    </div>
                    <div class="ms-auto text-dark fs-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1">Email</p>
                      <h5 class="mb-0 text-dark">o.schnur@schnur-partner.de</h5>
                    </div>
                    <div class="ms-auto text-dark fs-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1">Tel.</p>
                      <h5 class="mb-0 text-dark">01716820288</h5>
                    </div>
                    <div class="ms-auto text-dark fs-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-phone-call">
                        <path
                          d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                        </path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1">AutragNr.</p>
                      <h5 class="mb-0 text-dark">INV24-673082</h5>
                    </div>
                    <div class="ms-auto text-dark fs-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-save">
                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                        <polyline points="7 3 7 8 15 8"></polyline>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>
          <!--end row-->

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 row-cols-xxl-3">
            <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1">Adresse</p>
                      <h5 class="mb-0 text-dark">Gruitener Str 68, 42327 Wuppertal</h5>
                    </div>
                    <div class="ms-auto text-dark fs-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card radius-10 border shadow-none mb-0">
                <div class="card-body">
                  <div class="text-center">

                    <button type="button" class="btn btn-info px-5 radius-30">Versandlabel Anforderen</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card radius-10 border shadow-none mb-0">
                <div class="card-body">
                  <div class="text-center">

                    <button type="button" class="btn btn-danger px-5 radius-30">Neu Angebot Anforderen</button>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <!--end row-->

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-2 row-cols-xxl-2">
            <div class="col">
              <div class="card radius-10 bg-dark">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1 text-white">Vorläfige Betrag</p>
                      <h4 class="mb-0 text-white">12932,80 €</h4>
                    </div>
                    <div class="ms-auto text-white fs-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-radio">
                        <circle cx="12" cy="12" r="2"></circle>
                        <path
                          d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14">
                        </path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card radius-10 bg-dark">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1 text-white">Versand Art</p>
                      <h4 class="mb-0 text-white">Werttransport</h4>
                    </div>
                    <div class="ms-auto text-white fs-2">
                      <ion-icon name="leaf-sharp"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <!--end row-->


        </form>


        <div class="col-xl-12 mx-auto">
          <h6 class="mb-0 text-uppercase">Rechnung Vorbereiten</h6>
          <hr />
          <div class="card">
            <div class="card-body">
              <div class="p-4 border rounded">
                <form class="row g-3 needs-validation" novalidate>

                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Gold</label>
                    <select class="form-select" id="inlineFormCustomSelect" name="gold">
                      <option value="" selected>Bitte auswählen...</option>
                      <option value="999.9er Feingold">999.9er Feingold</option>
                      <option value="986er Gold">986er Gold</option>
                      <option value="916er Gold">916er Gold</option>
                      <option value="900er Gold">900er Gold</option>
                      <option value="3750er Gold">750er Gold</option>
                      <option value="585er Gold">585er Gold</option>
                      <option value="333er Gold">333er Gold</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Menge</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Kurs</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>

                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Gold</label>
                    <select class="form-select" id="inlineFormCustomSelect" name="gold">
                      <option value="" selected>Bitte auswählen...</option>
                      <option value="999.9er Feingold">999.9er Feingold</option>
                      <option value="986er Gold">986er Gold</option>
                      <option value="916er Gold">916er Gold</option>
                      <option value="900er Gold">900er Gold</option>
                      <option value="3750er Gold">750er Gold</option>
                      <option value="585er Gold">585er Gold</option>
                      <option value="333er Gold">333er Gold</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Menge</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Kurs</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>




                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Silber</label>
                    <select class="form-select" id="inlineFormCustomSelect" name="gold">
                      <option value="" selected>Bitte auswählen...</option>
                      <option value="999.9er Feinsilber">999.9er Feinsilber</option>
                      <option value="925er Silber">925er Silber</option>
                      <option value="900er Silber">900er Silber</option>
                      <option value="835er Silber">835er Silber</option>
                      <option value="800er Silber">800er Silber</option>
                      <option value="750er Silber">750er Silber</option>
                      <option value="900er Silber">900er Silber</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Menge</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Kurs</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>

                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Silber</label>
                    <select class="form-select" id="inlineFormCustomSelect" name="gold">
                      <option value="" selected>Bitte auswählen...</option>
                      <option value="999.9er Feinsilber">999.9er Feinsilber</option>
                      <option value="925er Silber">925er Silber</option>
                      <option value="900er Silber">900er Silber</option>
                      <option value="835er Silber">835er Silber</option>
                      <option value="800er Silber">800er Silber</option>
                      <option value="750er Silber">750er Silber</option>
                      <option value="900er Silber">900er Silber</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Menge</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Kurs</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>


                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Platin</label>
                    <select class="form-select" id="inlineFormCustomSelect" name="gold">
                      <option value="" selected>Bitte auswählen...</option>
                      <option value="999.9er FeinPlatin">999.9er FeinPlatin</option>
                      <option value="925er Platin">925er Platin</option>
                      <option value="900er Platin">900er Platin</option>
                      <option value="835er Platin">835er Platin</option>
                      <option value="800er Platin">800er Platin</option>
                      <option value="750er Platin">750er Platin</option>
                      <option value="900er Platin">900er Platin</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Menge</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Kurs</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>


                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Platin</label>
                    <select class="form-select" id="inlineFormCustomSelect" name="gold">
                      <option value="" selected>Bitte auswählen...</option>
                      <option value="999.9er FeinPlatin">999.9er FeinPlatin</option>
                      <option value="925er Platin">925er Platin</option>
                      <option value="900er Platin">900er Platin</option>
                      <option value="835er Platin">835er Platin</option>
                      <option value="800er Platin">800er Platin</option>
                      <option value="750er Platin">750er Platin</option>
                      <option value="900er Platin">900er Platin</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Menge</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Kurs</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>



                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Palladium</label>
                    <select class="form-select" id="inlineFormCustomSelect" name="Palladium">
                      <option value="" selected>Bitte auswählen...</option>
                      <option value="999.9er FeinPalladium">999.9er FeinPalladium</option>
                      <option value="925er Palladium">925er Palladium</option>
                      <option value="900er Palladium">900er Palladium</option>
                      <option value="835er Palladium">835er Palladium</option>
                      <option value="800er Palladium">800er Palladium</option>
                      <option value="750er Palladium">750er Palladium</option>
                      <option value="900er Palladium">900er Palladium</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Menge</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Kurs</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>


                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Palladium</label>
                    <select class="form-select" id="inlineFormCustomSelect" name="Palladium">
                      <option value="" selected>Bitte auswählen...</option>
                      <option value="999.9er FeinPalladium">999.9er FeinPalladium</option>
                      <option value="925er Palladium">925er Palladium</option>
                      <option value="900er Palladium">900er Palladium</option>
                      <option value="835er Palladium">835er Palladium</option>
                      <option value="800er Palladium">800er Palladium</option>
                      <option value="750er Palladium">750er Palladium</option>
                      <option value="900er Palladium">900er Palladium</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Menge</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Kurs</label>
                    <input type="text" class="form-control" placeholder="Menge in (g) " name="goldMenge" required>
                  </div>




                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">Gutschrift erstellen und abschicken</button>
                  </div>


                </form>
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