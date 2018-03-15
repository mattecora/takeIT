<?php
  include("app/functions.php");
  reset_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EIA TakeIt</title>

  <link href='css/font.css' rel='stylesheet' type='text/css'>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.css" rel="stylesheet">
  <link href="css/owl.transitions.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  <link href="css/own.css" rel="stylesheet">

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
          <button type="button" class="navbar-toggle collapsed navbar-right" data-toggle="collapse" data-target="#sept-main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./"><img src="photos/logo_white.png" alt="" class="img-responsive"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse main-nav" id="sept-main-nav">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./">Home</a></li>
            <li><a href="./#about">About</a></li>
            <li><a href="./#subscribe">Subscribe</a></li>
            <li><a href="./#faq">FAQ</a></li>
            <li class="active"><a href="login.php">Login</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>

  <section class="home midhome" id="home" data-stellar-background-ratio="0.4">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="st-home-unit">
            <div class="hero-txt">
              <h2 class="hero-title">Mentor signup</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container">
      <form method="post" action="addmentor.php" id="login_form" style="font-size: 26px; text-align: center;">
        <h1 class="center">Profile info</h1>

        <div class="row" style="padding-top: 20px;">
          <div class="form-inline col-md-4"><i class="fa fa-user"></i> <input name="user" type="text" class="form-control" placeholder="Username" aria-describedby="Insert your username"></div>
          <div class="form-inline col-md-4"><i class="fa fa-key"></i> <input name="pwd" type="password" class="form-control" placeholder="Password" aria-describedby="Insert your password"></div>
          <div class="form-inline col-md-4"><i class="fa fa-envelope"></i> <input name="mail" type="text" class="form-control" placeholder="Email" aria-describedby="Insert your email"></div>
        </div>

        <h1 class="center">Anagraphic info</h1>

        <div class="row" style="padding-top: 20px;">
          <div class="form-inline col-md-6 col-md-offset-3"><i class="fa fa-info"></i>
            <input name="name" type="text" class="form-control" placeholder="Name" aria-describedby="Insert your name">
            <input name="surname" type="text" class="form-control" placeholder="Surname" aria-describedby="Insert your surname">
          </div>
        </div>

        <div class="row" style="padding-top: 20px;">
          <div class="form-inline col-md-4 col-md-offset-1"><i class="fa fa-briefcase"></i> <input name="sector" type="text" class="form-control" placeholder="Sector" aria-describedby="Insert your sector"></div>
          <div class="form-inline col-md-4 col-md-offset-2"><i class="fa fa-building"></i> <input name="company" type="text" class="form-control" placeholder="Company" aria-describedby="Insert your company"></div>
        </div>

        <div class="center" style="padding-top: 20px;"><button type="submit" class="btn btn-primary">Signup</button></div>
      </form>
    </div>
  </section>

  <footer class="footer-distributed">
    <div class="footer-left">
      <img src="photos/logo_white.png" alt="takeIT!" style="width: 100px;">

      <div class="footer-links">
        <ul>
          <li><a href="./#home">Home</a></li>
          <li><a href="./#about">About</a></li>
          <li><a href="./#subscribe">Subscribe</a></li>
          <li><a href="./#faq">FAQ</a></li>
          <li class="active"><a href="login.php">Login</a></li>
          <li><a href="signup.php">Signup</a></li>
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
        <div style="text-align: center;"><img src="photos/eia_logo.png" alt="EIA" style="height: 60px;"></div>
      </p>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/jquery.countTo.js"></script>
  <script src="js/jquery.shuffle.modernizr.js"></script>
  <script src="js/jquery.shuffle.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
