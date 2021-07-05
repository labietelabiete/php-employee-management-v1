<?php
session_start();
if (isset($_GET["logout"])) {
  $_SESSION["alertMessage"] = "Correct logout";
}
?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Management Login</title>
  <link href="node_modules\bootstrap\dist\css\bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ecea200bd3.js" crossorigin="anonymous"></script>
</head>

<body>
  <main class="container main">
    <div class="row">
      <div class="col col-3 pt-3">
      </div>
      <div class="col col-6 form-col text-center h-100">
        <form class="form-login" action="./src/library/loginController.php" method="POST">
          <div class="col col-12 pt-4">
            <i class="fas fa-users"></i>
          </div>
          <div class="col col-12 pt-3">
            <h2>EMPLOYEE MANAGEMENT</h2>
          </div>

          <div class="col col-12 pt-3">
            <label class="pb-1" for="emailInput"><i class="fas fa-user"></i> User email</label>
            <br>
            <input type="email" name="email" id="emailInput" placeholder="Email Adress" class="form-control login-input d-inline">
          </div>
          <div class="col col-12 pt-3">
            <label class="pb-1" for="passwordEmail"><i class="fas fa-lock"></i> User password</label>
            <br>
            <input type="password" name="password" id="passwordInput" placeholder="Password" class="form-control login-input d-inline">
          </div>
          <?php
          if (isset($_SESSION["alertMessage"])) {
            echo '<div class="col col-12 pt-4 text-center">';
            echo '<p class="alert-msg">';
            echo $_SESSION["alertMessage"];
            echo '</p>';
            echo '</div>';
          }
          ?>
          <div class="col col-12 pt-4">
            <button class="w-95 btn btn-lg btn-primary btn-login" type="submit">Sign In</button>
          </div>

        </form>
      </div>
      <div class="col col-3 pt-3">
      </div>
    </div>
  </main>

  <script src="node_modules\bootstrap\dist\js\bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>