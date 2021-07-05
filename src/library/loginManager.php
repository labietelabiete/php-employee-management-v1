<?php

function authLogin()
{
  // session_start();

  $email = $_POST["email"];
  $password = $_POST["password"];

  // Database fake using users.json
  $usersJson = file_get_contents("./../../resources/users.json");
  $jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($usersJson, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST
  );

  $usersPassword = [];
  $usersEmail = [];

  foreach ($jsonIterator as $key => $val) {
    if ($key == "email") {
      array_push($usersEmail, $val);
    }
    if ($key == "password") {
      array_push($usersPassword, $val);
    }
  }

  $sessionFlag = false;

  // Matching email and password
  for ($i = 0; $i < count($usersEmail); $i++) {
    if ($email == $usersEmail[$i] && password_verify($password, $usersPassword[$i])) {
      $sessionFlag = true;
      $_SESSION["email"] = $email;
      header("Location:./../dashboard.php");
    }
  }

  if (!$sessionFlag) {
    $_SESSION["alertMessage"] = "Wrong email or password";
    header("Location:./../../index.php");
  }
}

function logoutSession()
{
  // session_start();

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
