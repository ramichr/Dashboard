<?php
session_start();
if (!isset($_SESSION["personalId"])) {
  include './login.php';
} else {

  include "includes/dbh.inc.php";

  $sql1 = "SELECT * FROM `anlage_plan` AS ap INNER JOIN `rechnung` AS r
          ON ap.bestellungNum = r.rechnungNum";
  $result1 = mysqli_query($conn, $sql1);


  $sql2 = "SELECT * FROM `goldkonto_plan` AS sp INNER JOIN `rechnung` AS r
          ON sp.bestellungNum = r.rechnungNum";
  $result2 = mysqli_query($conn, $sql2);


  $sql3 = "SELECT * FROM `shop_bestellung` AS s INNER JOIN `rechnung` AS r 
          ON s.uberweisungsId = r.rechnungNum
          INNER JOIN `produkt` AS p
          ON s.produktId = p.produktId";
  $result3 = mysqli_query($conn, $sql3);

?>

<!doctype html>
<html lang="de" class="semi-dark">

<?php
  $title = 'Nadir - ' . date("d.m.Y");
  include 'layout/head.php'
  ?>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start sidebar -->
    <?php include 'layout/menu.php' ?>
    <!--end sidebar -->

    <!--start top header-->
    <?php include 'layout/header.php' ?>
    <!--end top header-->


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
                <li class="breadcrumb-item"><a href="index.php">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Fixierung Liste</li>
              </ol>
            </nav>
          </div>

        </div>
        <!--end breadcrumb-->



        <hr />

        <h6 class="mb-0 text-uppercase">Fixierung Liste</h6>
        <hr />
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Produkt</th>
                    <th>Fixierung</th>
                    <th>Gold Summe</th>

                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = mysqli_fetch_assoc($result1)) { ?>
                  <tr>
                    <td><?= $row['anlageId'] ?></td>
                    <td>Anlageplan</td>
                    <td><?= $row['rechnungDatum'] ?></td>
                    <td><?= $row['betragGoldUmgerchnet'] ?></td>

                  </tr>
                  <?php } ?>

                  <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
                  <tr>
                    <td><?= $row['kontoId'] ?></td>
                    <td>Sparplan</td>
                    <td><?= $row['rechnungDatum'] ?></td>
                    <td><?= $row['gesamtInvestGold'] ?></td>

                  </tr>
                  <?php } ?>

                  <?php while ($row = mysqli_fetch_assoc($result3)) { ?>
                  <tr>
                    <td><?= $row['shopBestellungId'] ?></td>
                    <td><?= $row['produktName'] ?></td>
                    <td><?= $row['rechnungDatum'] ?></td>
                    <td><?= $row['menge'] ?> Gramm</td>

                  </tr>
                  <?php } ?>


                </tbody>

              </table>
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