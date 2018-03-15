<?php
  include("functions.php");

  $db = db_connect();
  if (!empty($_POST["user"]) && !empty($_POST["pwd"]) && check_login($db, $_POST["user"], $_POST["pwd"])) {
    session_start();
    $_SESSION["user"] = $_POST["user"];
    $_SESSION["pwd"] = $_POST["pwd"];
  }

  check_logged();

  $info = $db->query("SELECT * FROM mentor WHERE Mentor = '$_SESSION[user]'")->fetch_array();

  /* Complete a request */
  if (isset($_POST["complete"])) {
    $compl = $db->query("UPDATE request SET Completed = 1 WHERE User = '$_POST[user]' AND Mentor = '$_SESSION[user]' AND Datetime = '$_POST[datetime]'");
  }

  $avg_vote = round(mentor_vote($db, $_SESSION["user"]), 1);

  $db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
              <h2 class="hero-title">Welcome <?php echo($_SESSION["user"]); ?></h2>
              <div class="center" style="font-size: 26px;">Your current average: <?php echo $avg_vote; ?> <i class="fa fa-star"></i></div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Content -->
  <section class="content">
    <div class="container">
      <?php
        if (isset($compl) && $compl)
          draw_msg_ok("Request completed");
        else if (isset($compl) && !$compl)
          draw_msg_err("There was an error while completing your request");
      ?>

      <h1 class="center">Active requests</h1>
      <hr>
      <div class="row">
        <?php
          $db = db_connect();
          $db2 = db_connect();
          $query = $db->query("SELECT * FROM request WHERE Mentor = '$_SESSION[user]' AND Completed = 0 ORDER BY Datetime");
          if ($query->num_rows == 0)
            echo "<h3 class=\"center\">No active requests</h3>";

          while ($row = $query->fetch_assoc()) {
            $user = $db2->query("SELECT * FROM user WHERE User = '$row[User]'")->fetch_assoc();
            echo "<div class=\"col-md-12 src-tab\">
              <div class=\"src-tab-left\">
                <img src=\"../photos/profile.png\" style=\"width: 100%;\">
              </div>
              <div class=\"src-tab-right\">
                <div class=\"src-tab-head row\">
                  <div class=\"col-md-6\"><a href=\"view.php?user=$user[User]&datetime=$row[Datetime]\"><h3>$user[Name] $user[Surname]</h3></a></div>
                  <div class=\"col-md-6\" style=\"text-align: right;\"><h3><i class=\"fa fa-calendar\"></i> $row[Datetime]</h3></div>
                </div>
                <hr>
                <div class=\"src-tab-info row\">
                  <div class=\"col-md-6\"><i class=\"fa fa-user\"></i> $user[User]</div>
                  <div class=\"col-md-6\"><i class=\"fa fa-envelope\"></i> $user[Mail]</div>
                </div>
                <div class=\"src-tab-info row\">
                  <div class=\"col-md-6\"><i class=\"fa fa-university\"></i> $user[University]</div>
                  <div class=\"col-md-6\"><i class=\"fa fa-briefcase\"></i> $user[Sector]</div>
                </div>
              </div>
            </div>";
          }

          $db->close();
          $db2->close();
        ?>
    </div>

    <h1 class="center">Completed requests</h1>
    <hr>
    <div class="row">
      <?php
        $db = db_connect();
        $db2 = db_connect();
        $query = $db->query("SELECT * FROM request WHERE Mentor = '$_SESSION[user]' AND Completed = 1 ORDER BY Datetime DESC");
        if ($query->num_rows == 0)
          echo "<h3 class=\"center\">No completed requests</h3>";

        while ($row = $query->fetch_assoc()) {
          $user = $db2->query("SELECT * FROM user WHERE User = '$row[User]'")->fetch_assoc();

          if (is_null($row["Vote"])) {
            echo "<div class=\"col-md-12 src-tab\">
              <div class=\"src-tab-left\">
                <img src=\"../photos/profile.png\" style=\"width: 100%;\">
              </div>
              <div class=\"src-tab-right\">
                <div class=\"src-tab-head row\">
                  <div class=\"col-md-6\"><a href=\"view.php?user=$user[User]&datetime=$row[Datetime]\"><h3>$user[Name] $user[Surname]</h3></a></div>
                  <div class=\"col-md-6\" style=\"text-align: right;\"><h3><i class=\"fa fa-calendar\"></i> $row[Datetime]</h3></div>
                </div>
                <hr>
                <div class=\"src-tab-info row\">
                  <div class=\"col-md-6\"><i class=\"fa fa-user\"></i> $user[User]</div>
                  <div class=\"col-md-6\"><i class=\"fa fa-envelope\"></i> $user[Mail]</div>
                </div>
                <div class=\"src-tab-info row\">
                  <div class=\"col-md-6\"><i class=\"fa fa-university\"></i> $user[University]</div>
                  <div class=\"col-md-6\"><i class=\"fa fa-briefcase\"></i> $user[Sector]</div>
                </div>
              </div>
            </div>";
          } else {
            echo "<div class=\"col-md-12 src-tab\">
              <div class=\"src-tab-left\">
                <img src=\"../photos/profile.png\" style=\"width: 100%;\">
              </div>
              <div class=\"src-tab-right\">
                <div class=\"src-tab-head row\">
                  <div class=\"col-md-4\"><a href=\"view.php?user=$user[User]&datetime=$row[Datetime]\"><h3>$user[Name] $user[Surname]</h3></a></div>
                  <div class=\"col-md-6\"><h3><i class=\"fa fa-calendar\"></i> $row[Datetime]</h3></div>
                  <div class=\"col-md-2\" style=\"text-align: right;\"><h3><i class=\"fa fa-star\"></i> $row[Vote]</h3></div>
                </div>
                <hr>
                <div class=\"src-tab-info row\">
                  <div class=\"col-md-6\"><i class=\"fa fa-user\"></i> $user[User]</div>
                  <div class=\"col-md-6\"><i class=\"fa fa-envelope\"></i> $user[Mail]</div>
                </div>
                <div class=\"src-tab-info row\">
                  <div class=\"col-md-6\"><i class=\"fa fa-university\"></i> $user[University]</div>
                  <div class=\"col-md-6\"><i class=\"fa fa-briefcase\"></i> $user[Sector]</div>
                </div>
              </div>
            </div>";
          }
        }

        $db->close();
        $db2->close();
      ?>
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
