<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if (isset($_GET['submit'])) {
    $vermittlerId = test_input($_GET['vermittlerId']);
    $vUsername = test_input($_GET['vUsername']);
    $vPasswort = test_input($_GET['vPasswort']);
    $vVorname = test_input($_GET['vVorname']);
    $vNachname = test_input($_GET['vNachname']);
    $vFirmenname = test_input($_GET['vFirmenname']);
    $vRechtform = test_input($_GET['vRechtform']);
    $vUmsatzsteur = test_input($_GET['vUmsatzsteur']);
    $vSteurnummer = test_input($_GET['vSteurnummer']);
    $vAdresse = test_input($_GET['vAdresse']);
    $vPlz = test_input($_GET['vPlz']);
    $vStadt = test_input($_GET['vStadt']);
    $vEmail = test_input($_GET['vEmail']);
    $vTelefonnummer = test_input($_GET['vTelefonnummer']);
    $vStatus = test_input($_GET['vStatus']);
    $vBonusProzent = test_input($_GET['vBonusProzent']);
  }

  include "includes/dbh.inc.php";

  $sql = "SELECT `vAusweis`, `vFirmenausweis` FROM `vermittler` WHERE vermittlerId = '$vermittlerId';";

  $result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Profil Vermittler';
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
                <li class="breadcrumb-item active" aria-current="page">Auftrag Vermittler:</li>
              </ol>
            </nav>
          </div>

        </div>


        <div class="row row-cols-12 row-cols-sm-12 row-cols-md-12 row-cols-xl-12 row-cols-xxl-12">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body text-center">

                <div class="mt-4">
                  <h4 class="mb-1"><?= $vVorname . ' ' . $vNachname ?></h4>
                  <h5 class="mb-0"><?= $vFirmenname . ' ' . $vRechtform ?></h5>
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
                          <h4 class="mb-0 mt-2"><?= $vEmail ?></h4>
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
                          <h4 class="mb-0 mt-2"><?= $vTelefonnummer ?></h4>
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
                          <h6 class="mb-0 mt-2">V_ID</h6>
                          <h4 class="mb-0 mt-2"><?= $vermittlerId ?></h4>
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
                          <h4 class="mb-0 mt-2"><?= $vAdresse . ", " . $vPlz . " " . $vStadt ?></h4>
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
                          <h4 class="mb-0 mt-2"><?= $vSteurnummer ?></h4>
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
                          <h4 class="mb-0 mt-2"><?= $vUmsatzsteur ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>

          <?php if ($vStatus == "In_Bearbeitung") { ?>

          <form action="includes/v-antwort.inc.php" method="GET">
            <input type="hidden" name="vermittlerId" value="<?= $vermittlerId ?>">
            <input type="hidden" name="vUsername" value="<?= $vUsername ?>">
            <input type="hidden" name="vPasswort" value="<?= $vPasswort ?>">
            <input type="hidden" name="vVorname" value="<?= $vVorname ?>">
            <input type="hidden" name="vNachname" value="<?= $vNachname ?>">
            <input type="hidden" name="vFirmenname" value="<?= $vFirmenname ?>">
            <input type="hidden" name="vRechtform" value="<?= $vRechtform ?>">
            <input type="hidden" name="vUmsatzsteur" value="<?= $vUmsatzsteur ?>">
            <input type="hidden" name="vSteurnummer" value="<?= $vSteurnummer ?>">
            <input type="hidden" name="vAdresse" value="<?= $vAdresse ?>">
            <input type="hidden" name="vPlz" value="<?= $vPlz ?>">
            <input type="hidden" name="vStadt" value="<?= $vStadt ?>">
            <input type="hidden" name="vEmail" value="<?= $vEmail ?>">
            <input type="hidden" name="vTelefonnummer" value="<?= $vTelefonnummer ?>">
            <input type="hidden" name="vBonusProzent" value="<?= $vBonusProzent ?>">

            <div class="mb-3">
              <label class="form-label">Bonus hinzufugen</label>
              <div class="input-group">

                <select class="form-select single-select" id="inputGroupSelect03"
                  aria-label="Example select with button addon" name="BonusProzent">
                  <option value="10 %" selected>10 % </option>
                  <option value="20 %">20 % </option>
                  <option value="30 %">30 % </option>

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
                            <button type="submit" name="accept" class="btn btn-success px-5 radius-30">Annehmen</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                            <button type="submit" name="decline" class="btn btn-danger px-5 radius-30">Ablehnen</button>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>
                </div>
              </div>
            </div>

          </form>

          <?php } else if ($vStatus === "aktiv") {  ?>

          <div class="col">
            <div class="card radius-10">
              <div class="card-body text-center">

                <div class="mt-4">
                  <h4 class="mb-1">Bonus</h4>
                  <h5 class="mb-0"><?= $vBonusProzent ?></h5>
                </div>

              </div>
            </div>
          </div>

          <?php } ?>

        </div>
        <!--end row-->

        <?php while ($image = mysqli_fetch_assoc($result)) { ?>
        <div class="row row-cols-1 row-cols-lg-2">

          <div class="col">
            <div class="card">
              <a download="ausweis_<?= $vermittlerId ?>.jpg"
                href="data:image;charset=utf8;base64,<?= base64_encode($image['vAusweis']); ?>">
                <img src="data:image;charset=utf8;base64,<?= base64_encode($image['vAusweis']); ?>"
                  class="card-img-top">
              </a>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <a download="firmenausweis_<?= $vermittlerId ?>.jpg"
                href="data:image;charset=utf8;base64,<?= base64_encode($image['vFirmenausweis']); ?>">
                <img src="data:image;charset=utf8;base64,<?= base64_encode($image['vFirmenausweis']); ?>"
                  class="card-img-top">
              </a>
            </div>
          </div>

        </div>
        <!--end row-->
        <?php } ?>

      </div>
      <!-- end page content-->
    </div>

    <?php include 'layout/footer.php' ?>

  </div>

  <?php include 'layout/script.php' ?>

</body>

</html>

<?php } ?>