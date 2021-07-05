<?php

function authLogin()
{
  session_start();

  $email = $_POST["email"];
  $password = $_POST["password"];

  // Database fake info
  $emaildB = "imassembler@assemblerschool.com";
  $passDb = "Assemb13r";
  $passDbHash = password_hash($passDb, PASSWORD_DEFAULT);

  if($email == $emaildB && password_verify($password, $passDbHash))
  {
    $_SESSION["email"] = $email;
    header("Location:./../dashboard.php");
  } else {
    $_SESSION["alertMessage"] = "Wrong mail or password";
  }
}

function closingSession()
{
  session_start();

  unset($_SESSION);

  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
      session_name(),
      '',
      time() - 42000,
      $params["path"],
      $params["domain"],
      $params["secure"],
      $params["httponly"]
    );
  }

  session_destroy();

  header("Location:./../../index.php?logout=true");
}
