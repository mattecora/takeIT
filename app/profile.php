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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EIA TakeIt</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,400italic,600,300italic,300|Oswald:400,300,700' rel='stylesheet' type='text/css'>
  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/owl.theme.css" rel="stylesheet">
  <link href="../css/owl.carousel.css" rel="stylesheet">
  <link href="../css/owl.transitions.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/own.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body data-spy="scroll" data-target=".main-nav">

  <header class="st-navbar">
    <nav class="navbar navbar-default navbar-fixed-top clearfix" role="navigation">
      <div class="container"><!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sept-main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../"><img src="../photos/logo_white.png" alt="" class="img-responsive"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse main-nav" id="sept-main-nav">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./index.php">Dashboard</a></li>
            <li><a href="./search.php">Search</a></li>
            <li><a href="./add.php">Add</a></li>
            <li class="active"><a href="./profile.php">Profile</a></li>
            <li><a href="../">Get out</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>

  <section class="home midhome" id="home" data-stellar-background-ratio="0.4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="hero-txt">
              <h2 class="hero-title">Profile info</h2>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Content -->
  <div class="container">
    <div class="row">
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

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.min.js"></script>
  <script src="../js/jquery.stellar.js"></script>
  <script src="../js/jquery.appear.js"></script>
  <script src="../js/jquery.nicescroll.min.js"></script>
  <script src="../js/jquery.countTo.js"></script>
  <script src="../js/jquery.shuffle.modernizr.js"></script>
  <script src="../js/jquery.shuffle.js"></script>
  <script src="../js/owl.carousel.js"></script>
  <script src="../js/jquery.ajaxchimp.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>
