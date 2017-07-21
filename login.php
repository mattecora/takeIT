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

  <section class="home bighome" id="home" data-stellar-background-ratio="0.4" style="height: 100%;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="st-home-unit">
            <div class="hero-txt">
              <h2 class="hero-title">LOGIN</h2>
              <form method="post" action="app/index.php" id="login_form">
                <p class="center"><input name="user" type="text" class="form-control" placeholder="Username" aria-describedby="Insert your username"></p>
                <p class="center"><input name="pwd" type="password" class="form-control" placeholder="Password" aria-describedby="Insert your password"></p>
                <p class="center"><button type="submit" class="btn btn-primary">Login</button><button type="button" onclick="window.location.href='signup.php'" class="btn btn-primary" style="margin-left: 50px;">Signup</button></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
