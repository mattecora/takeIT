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
?>
