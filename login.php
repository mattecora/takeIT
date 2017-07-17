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

  <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>

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
      <div class="col-md-6 col-md-offset-3 animated fadeInUp">
        <div class="form">
          <h3>Login</h3>
          <p class="center"><input id="txtEmail" type="text" class="form-control" placeholder="prova@email.com" aria-describedby="Insert your username"></p>
          <p class="center"><input id="txtPassword" type="password" class="form-control" placeholder="Password" aria-describedby="Insert your password"></p>
          <p class="center">
            <button id="btnSignin" class="btn btn-primary">Sign In</button>
            <button id="btnSignup" class="btn btn-primary">Sign Up</button>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="login.js"></script>

  </body>
</html>
