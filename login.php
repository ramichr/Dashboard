<!doctype html>
<html lang="de" class="light-theme">

<?php
$title = 'Login';
include 'layout/head.php'
?>

<body>

  <div class="login-bg-overlay au-sign-in-basic"></div>

  <!--start wrapper-->
  <div class="wrapper">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white p-3">
        <div class="container-fluid">
          <a href="javascript:;"><img src="assets/images/logo-icon-3.png" width="140" alt="" /></a>
        </div>
      </nav>
    </header>

    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
          <div class="card radius-10">
            <div class="card-body p-4">
              <div class="text-center">
                <h4>Sign In</h4>
                <p>Anmeldung zu Ihrem Konto</p>
              </div>

              <form class="form-body row g-3" action="includes/login.inc.php" method="POST">


                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" name="username" class="form-control" id="inputEmail"
                    placeholder="abc@investal24.de">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Passwort</label>
                  <input type="password" name="passwort" class="form-control" id="inputPassword" placeholder="passwort">
                </div>
                <div class="col-12 col-lg-6">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckRemember">
                    <label class="form-check-label" for="flexSwitchCheckRemember">Remember Me</label>
                  </div>
                </div>
                <div class="col-12 col-lg-6 text-end">
                  <a href="#">Passwort vergessen?</a>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="d-grid">
                    <button type="submit" name="login" class="btn btn-dark">Anmelden</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="my-5">
      <div class="container">
        <div class="text-center">
          <p class="mb-0"> Copyright © 2022 . INVESTAL24 All right reserved.
          </p>
        </div>
      </div>
    </footer>
  </div>

</body>

</html>