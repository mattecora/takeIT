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
        <a class="navbar-brand"><a href="index.php"><img src="../media/logo.png" /></a></a>
      </div>

      <!-- Navbar elements -->
      <div class="collapse navbar-collapse" id="top_navbar">
        <ul class="nav navbar-nav">
          <li><a href="search.php">Search</a></li>
          <li><a href="add.php">Add</a></li>
          <li class="active"><a href="profile.php">Profile</a></li>
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
    <div class="row">
      <!-- Login data -->
      <div class="col-md-4 animated fadeInUp">
        <div class="form">
          <h3>Login data</h3>
          <form method="post" action="app/index.php" id="info_update_form">
            <p class="inputp"><input id="user" type="text" class="form-control" placeholder="Your username" aria-describedby="Insert your username"></p>
            <p class="inputp"><input id="pass" type="password" class="form-control" placeholder="Your password" aria-describedby="Insert your password"></p>
            <p class="inputp"><button type="submit" class="btn btn-primary">Update info</button></p>
          </form>
        </div>
      </div>

      <!-- Purchases -->
      <div class="col-md-4 animated fadeInUp">
        <div class="form">
          <h3>Purchases</h3>
          <ul>
            <li><a href="#">Example</a></li>
            <li><a href="#">Example</a></li>
            <li><a href="#">Example</a></li>
          </ul>
        </div>
      </div>

      <!-- Contributions -->
      <div class="col-md-4 animated fadeInUp">
        <div class="form">
          <h3>Contributions</h3>
          <ul>
            <li><a href="#">Example</a></li>
            <li><a href="#">Example</a></li>
            <li><a href="#">Example</a></li>
          </ul>
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
