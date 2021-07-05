<?php
require_once("./loginManager.php");

session_start();

if (isset($_POST["email"])) {
  authLogin();
  unset($_POST["email"]);
}

if (isset($_GET["logout"])) {
  if ($_GET["logout"] == true) {
    logoutSession();
    unset($_GET["logout"]);
  }
}
