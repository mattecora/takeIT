<?php
  include("functions.php");
  $db = db_connect();
  if (!empty($_POST["user"]) && !empty($_POST["pwd"]) && check_login($db, $_POST["user"], $_POST["pwd"])) {
    session_start();
    $_SESSION["user"] = $_POST["user"];
    $_SESSION["pwd"] = $_POST["pwd"];
  }
  $db->close();
  if (empty($_SESSION["user"]) || empty($_SESSION["pwd"])) {
    include("error.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!-- Own stylesheet -->
  <link rel="stylesheet" href="../style.css">

  <title>EIA TakeIt</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Navbar mobile -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top_navbar" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="../media/logo.png" /></a>
      </div>

      <!-- Navbar elements -->
      <div class="collapse navbar-collapse" id="top_navbar">
        <ul class="nav navbar-nav">
          <li><a href="search.php">Search</a></li>
          <li><a href="add.php">Add</a></li>
          <li><a href="profile.php">Profile</a></li>
          <p class="navbar-text">Signed in as <?php echo($_SESSION["user"]); ?></p>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php">Get out</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="container">
    <h1>What do you want to do?</h1>
    <div class="row">
      <div class="col-md-4 animated fadeInUp">
        <!-- Search button -->
        <a href="search.php">
          <button class="btn btn-default bigbtn">
            <div class="glyph-cont"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
            <h3>Search</h3>
          </button>
        </a>
      </div>

      <div class="col-md-4 animated fadeInUp">
        <!-- Add button -->
        <a href="add.php">
          <button class="btn btn-default bigbtn">
            <div class="glyph-cont"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
            <h3>Add</h3>
          </button>
        </a>
      </div>

      <div class="col-md-4 animated fadeInUp">
        <!-- Profile button -->
        <a href="profile.php">
          <button class="btn btn-default bigbtn">
            <div class="glyph-cont"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
            <h3>Profile</h3>
          </button>
        </a>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
  </html>
