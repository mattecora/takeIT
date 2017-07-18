<?php
  include("functions.php");
  check_logged();

  if (!empty($_POST["company"]) && !empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["position"]) && !empty($_POST["description"])) {
    $db = db_connect();
    $query = $db->query("INSERT INTO experience(Company, Date, User, Position, Title, Description) VALUES
      ('$_POST[company]', '$_POST[date]', '$_SESSION[user]', '$_POST[position]', '$_POST[title]', '$_POST[description]')");
    $db->close();
  }
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
          <li class="active"><a href="add.php">Add</a></li>
          <li><a href="profile.php">Profile</a></li>
          <p class="navbar-text">Signed in as <?php echo($_SESSION["user"]); ?></p>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php">Get out</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1>Add an experience</h1>
  </div>

  <!-- Content -->
  <div class="container animated fadeInUp">
    <!-- Experience info form -->
    <form method="post" action="add.php" id="exp_info_form">
      <?php
        if (isset($query) && $query == true)
          draw_msg_ok("Your experience has been added successfully!");
        else if (isset($query) && $query == false)
          draw_msg_err("There was an error in adding your experience!");
      ?>

      <!-- General info -->
      <div class="row">
        <div class="col-md-3"><h4>Company</h4><input name="company" type="text" class="form-control" placeholder="Company" aria-describedby="Insert the company"></div>
        <div class="col-md-3"><h4>Title</h4><input name="title" type="text" class="form-control" placeholder="Title" aria-describedby="Insert the title"></div>
        <div class="col-md-3"><h4>Date</h4><input name="date" type="text" class="form-control" placeholder="Date" aria-describedby="Insert the date"></div>
        <div class="col-md-3"><h4>Position</h4><input name="position" type="text" class="form-control" placeholder="Position" aria-describedby="Insert the position"></div>
      </div>

      <!-- Textarea form -->
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <p class="center"><textarea name="description" class="form-control" rows="10" placeholder="Describe your experience here"></textarea></p>
          <p class="center"><button type="submit" class="btn btn-primary">Add experience</button></p>
        </div>
      </div>
    </form>
  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
