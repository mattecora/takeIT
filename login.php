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
  <link rel="stylesheet" href="style.css">

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
        <a class="navbar-brand" href="index.php"><img src="media/logo.png" /></a>
      </div>

      <!-- Navbar elements -->
      <div class="collapse navbar-collapse" id="top_navbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home page</a></li>
          <li><a href="about.php">About us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="login.php">Get in</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="container">
    <h1>Login or register to takeIT!</h1>
    <div class="row">
      <!-- Login form -->
      <div class="col-md-4 col-md-offset-1 animated fadeInUp">
        <div class="form">
          <h3>Login</h3>
          <form method="post" action="app/index.php" id="login_form">
            <p class="center"><input id="user" type="text" class="form-control" placeholder="Username" aria-describedby="Insert your username"></p>
            <p class="center"><input id="pass" type="password" class="form-control" placeholder="Password" aria-describedby="Insert your password"></p>
            <p class="center"><button type="submit" class="btn btn-primary">Login</button></p>
          </form>
        </div>
      </div>

      <!-- Register form -->
      <div class="col-md-4 col-md-offset-1 animated fadeInUp">
        <div class="form">
          <h3>Register</h3>
          <form method="post" action="app/index.php" id="register_form">
            <p class="center"><input id="user" type="text" class="form-control" placeholder="Username" aria-describedby="Insert your username"></p>
            <p class="center"><input id="pass" type="password" class="form-control" placeholder="Password" aria-describedby="Insert your password"></p>
            <p class="center"><button type="submit" class="btn btn-primary">Register</button></p>
          </form>
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