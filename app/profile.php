<?php
  include("functions.php");
  check_logged();

  $db = db_connect();

  $info = $db->query("SELECT * FROM user WHERE User = '$_SESSION[user]'")->fetch_array();

  $purch_query = $db->query("SELECT id FROM purchase WHERE User = '$_SESSION[user]'");
  $purchases = array();
  while ($row = $purch_query->fetch_array())
    $purchases[] = $row[0];

  $contrib_query = $db->query("SELECT id FROM experience WHERE User = '$_SESSION[user]'");
  $contributions = array();
  while ($row = $contrib_query->fetch_array())
    $contributions[] = $row[0];

  $db->close();
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
          <li class="active"><a href="profile.php">Profile</a></li>
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
    <h1>Your profile</h1>
    <div class="row animated fadeInUp">
      <!-- Login data -->
      <div class="col-md-4">
        <div class="form">
          <h3>Login data</h3>
          <form method="post" action="app/index.php" id="info_update_form">
            <p class="center">Username: <?php echo $info["User"]; ?></p>
            <p class="center">Name: <?php echo $info["Name"]; ?></p>
            <p class="center">Surname: <?php echo $info["Surname"]; ?></p>
          </form>
        </div>
      </div>

      <!-- Purchases -->
      <div class="col-md-4">
        <div class="form">
          <h3>Purchases</h3>
          <?php
            if (count($purchases) == 0)
              echo "<p class=\"center\">No purchases yet!</p>";
            else {
              echo "<ul>";
              foreach ($purchases as $id)
                echo "<li><a href=\"#\">Experience #$id</a></li>";
              echo "</ul>";
            }
          ?>
        </div>
      </div>

      <!-- Contributions -->
      <div class="col-md-4">
        <div class="form">
          <h3>Contributions</h3>
          <?php
            if (count($contributions) == 0)
              echo "<p class=\"center\">No contributions yet!</p>";
            else {
              echo "<ul>";
              foreach ($contributions as $id)
                echo "<li><a href=\"#\">Experience #$id</a></li>";
              echo "</ul>";
            }
          ?>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
