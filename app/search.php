<?php
  include("functions.php");
  check_logged();
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
            <li class="active"><a href="./search.php">Search</a></li>
            <li><a href="./add.php">Add</a></li>
            <li><a href="./profile.php">Profile</a></li>
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
              <h2 class="hero-title">Search an experience</h2>
              <!-- Search form -->
              <div class="col-md-6 col-md-offset-3">
                <form class="form" method="get" action="search.php" id="company_form">
                  <div class="form-inline" style="text-align: center;">
                    <input name="company" type="text" class="form-control" placeholder="Company" aria-describedby="Insert the company" style="min-width: 60%;">
                    <button type="submit" class="btn btn-primary">Search company</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Content -->
  <section class="content">
    <div class="container">
      <!-- Results -->
      <h1 style="text-align: center;">
        Results for
        <?php
          if (isset($_GET["company"]))
            echo $_GET["company"];
          else echo "all";
        ?>
      </h1>
      <table class="table table-striped">
        <!-- Header -->
        <thead>
          <tr>
            <th>Number</th>
            <th>Company</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
            <th>Position</th>
          </tr>
        </thead>

        <!-- Content -->
        <tbody>
          <?php
            $db = db_connect();

            if (empty($_GET["company"])) {
              $query = $db->query("SELECT * FROM experience");
            } else {
              $query = $db->query("SELECT * FROM experience WHERE Company = '$_GET[company]'");
            }

            while ($row = $query->fetch_assoc()) {
              echo "<tr>
                <td><a href=\"view.php?id=$row[Id]\">$row[Id]</a></td>
                <td>$row[Company]</td>
                <td>$row[Title]</td>
                <td>$row[User]</td>
                <td>$row[Date]</td>
                <td>$row[Position]</td>
              </tr>";
            }

            $db->close();
          ?>
        </tbody>
      </table>
    </div>
    </section>

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
