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
    session_start();
    session_unset();
  }

  function draw_msg_ok($msg) {
    echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
      <p><span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span> $msg </p>
    </div>";
  }

  function draw_msg_err($msg) {
    echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
      <p><span class=\"glyphicon glyphicon-tick\" aria-hidden=\"true\"></span> $msg </p>
    </div>";
  }
?>