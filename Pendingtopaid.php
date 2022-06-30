<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else { ?>

  <!doctype html>
  <html lang="de" class="semi-dark">

  <?php
  $title = 'Pendingtopaid';
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
            <div class="breadcrumb-title pe-3">Pages</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                </ol>
              </nav>
            </div>
            <div class="ms-auto">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Settings</button>
                <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <!--end breadcrumb-->
             
          <div class="row">
            <div class="col-12 col-lg-12 d-flex">
              <div class="card radius-10 w-100">
                <div class="card-body">
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 row-cols-xxl-3 g-3">
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                          
                            <p class="mb-0 mt-2">Goldanlage Kaufsumme</p>
                            <h3 class="mb-0 mt-2">100 €</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                            
                            <p class="mb-0 mt-2">Gold Kurs pro Gramm</p>
                            <h3 class="mb-0 mt-2">56.15 €</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                           
                            <p class="mb-0 mt-2">Laufzeit</p>
                            <h3 class="mb-0 mt-2">12 Monate</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                           
                            <p class="mb-0 mt-2">Betrag in Gold umgerechnet</p>
                            <h3 class="mb-0 mt-2">1.78 Gramm Gold</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                           
                            <p class="mb-0 mt-2">Bonus pro Jahr in %</p>
                            <h3 class="mb-0 mt-2">3.5%</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                          
                            <p class="mb-0 mt-2">Bonus in Gold nach Laufzeit</p>
                            <h3 class="mb-0 mt-2">2.13 Gramm</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                         
                            <p class="mb-0 mt-2">Gesamt Ausschüttung in Gold</p>
                            <h3 class="mb-0 mt-2">160 €</h3>
                          </div>
                        </div>
                      </div>
                    </div>

                

                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                         
                            <p class="mb-0 mt-2">verwendungszweck</p>
                            <h3 class="mb-0 mt-2">INV-jvedz35z</h3>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card radius-10 border shadow-none mb-0">
                        <div class="card-body">
                          <div class="text-center">
                         
                            <button type="button" class="btn btn-outline-success px-5 radius-30">Paid</button>                          </div>
                        </div>
                      </div>
                    </div>
                
                  </div>
                </div>
              </div>
            </div>
           
          
          </div>



          </div>
          <!-- end page content-->
         </div>


     </div>
  <!--end wrapper-->

  <?php include 'layout/footer.php' ?>

  <?php include 'layout/script.php' ?>
  
  </body>
</html>

<?php } ?>