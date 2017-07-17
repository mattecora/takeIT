<?php
  function db_connect() {
    $db = new mysqli("localhost", "root", "", "takeit");
    return $db;
  }

  function check_login($db, $user, $pass) {
    $query = $db->query("SELECT Password FROM user WHERE User = '$user'");
    $res = $query->fetch_array()[0];
    if ($res == $pass)
      return true;
    return false;
  }

  function check_logged() {
    if (session_status() != PHP_SESSION_ACTIVE)
      session_start();
    if (empty($_SESSION["user"]) || empty($_SESSION["pwd"])) {
      include("error.php");
      die();
    }
  }

  function reset_login() {
    if (session_status() == PHP_SESSION_ACTIVE) {
      session_unset();
      session_destroy();
    }
  }
?>
