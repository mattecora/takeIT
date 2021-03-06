<?php
  include("functions.php");
  check_logged();

  if (empty($_GET["user"]) || empty($_GET["datetime"])) {
    include("error.php");
    die();
  }

  $db = db_connect();

  /* Check data */
  $query_info = $db->query("SELECT * FROM request WHERE User = '$_GET[user]' AND Mentor = '$_SESSION[user]' AND Datetime = '$_GET[datetime]'")->fetch_assoc();
  if (!$query_info) {
    include("error.php");
    die();
  }

  /* Retrieve user data */
  $user_info = $db->query("SELECT * FROM user WHERE User = '$_GET[user]'")->fetch_assoc();

  $db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>EIA TakeIt</title>

  <link href='../css/font.css' rel='stylesheet' type='text/css'>
  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/owl.theme.css" rel="stylesheet">
  <link href="../css/owl.carousel.css" rel="stylesheet">
  <link href="../css/owl.transitions.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/footer.css" rel="stylesheet">
  <link href="../css/own.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
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
          <ul class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sept-main-nav" style="border: 0px;">
            <li><a href="profile.php" style="padding-top:27px; height: 102px;"><img src="../photos/profile.png" style="height: 50px;"/></a></li>
          </ul>
          <a class="navbar-brand" href="../"><img src="../photos/logo_white.png" alt="" class="img-responsive"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse main-nav" id="sept-main-nav">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a class="nav-item-href" href="./index.php">Dashboard</a></li>
            <li><a class="nav-item-href" href="../">Log out</a></li>
            <li><a href="mentor.php" class="profile-img-href"><img src="../photos/profile.png" style="height: 50px;"/></a></li>
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
              <h2 class="hero-title">View request</h2>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Content -->
  <section class="content">
    <div class="container">
      <?php if ($query_info["Completed"] == 0) { ?>

      <h1 class="center">Status: active request</h1>

      <form action="index.php" method="post">
        <input name="complete" type="hidden" value="complete">
        <input name="user" type="hidden" value="<?php echo $_GET["user"]; ?>">
        <input name="datetime" type="hidden" value="<?php echo $_GET["datetime"]; ?>">
        <p class="center"><button class="btn btn-success"><i class="fa fa-check"></i> Complete this request</button></p>
      </form>

      <?php } else if (!is_null($query_info["Vote"])) {
          echo "<h1 class=\"center\">Status: completed request ($query_info[Vote] <i class=\"fa fa-star\"></i>)</h1>";
        } else {
          echo "<h1 class=\"center\">Status: completed request (no vote yet)</h1>";
        }
      ?>

      <div class="row">
        <!-- Profile pic -->
        <div class="col-md-4">
          <div class="center">
            <h3>User pic</h3>
            <hr>
            <img src="../photos/profile.png" style="width: 40%;">
          </div>
        </div>

        <!-- Login data -->
        <div class="col-md-4">
          <div class="center">
            <h3>User info</h3>
            <hr>
            <p>Name: <?php echo $user_info["Name"]; ?></p>
            <p>Surname: <?php echo $user_info["Surname"]; ?></p>
            <p>University: <?php echo $user_info["University"]; ?></p>
            <p>Sector: <?php echo $user_info["Sector"]; ?></p>
          </div>
        </div>

        <!-- Contacts -->
        <div class="col-md-4">
          <div class="center">
            <h3>User contact</h3>
            <hr>
            <p>Mail: <?php echo "<a href=\"mailto:$user_info[Mail]\">$user_info[Mail]</a>"; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer-distributed">
    <div class="footer-left">
      <img src="../photos/logo_white.png" alt="takeIT!" style="width: 100px;">

      <div class="footer-links">
        <ul>
          <li><a href="../">Home</a></li>
          <li><a href="../#about">About</a></li>
          <li><a href="../#subscribe">Subscribe</a></li>
          <li><a href="../#faq">FAQ</a></li>
          <li><a href="../login.php">Login</a></li>
        </ul>
      </div>

      <p class="footer-company-name">takeIT! &copy; 2017</p>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-facebook"></i>
        <p><a href="https://www.facebook.com/TakeItofficial">Like us on Facebook</a></p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:eiatakeit@gmail.com">Send us an email</a></p>
      </div>
    </div>

    <div class="footer-right">
      <p class="footer-company-about">
        <span>This idea has been developed during European Innovation Academy (Turin, July 9th-28th 2017)</span>
        <div style="text-align: center;"><img src="../photos/eia_logo.png" alt="EIA" style="height: 60px;"></div>
      </p>
    </div>
  </footer>

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
