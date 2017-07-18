<?php
  include("functions.php");
  check_logged();
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
          <li class="active"><a href="search.php">Search</a></li>
          <li><a href="add.php">Add</a></li>
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
    <h1>Search an experience</h1>
  </div>

  <!-- Content -->
  <div class="container animated fadeInUp">
    <!-- Search form -->
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <form class="form" method="get" action="search.php" id="company_form">
          <p class="center"><input name="company" type="text" class="form-control" placeholder="Company" aria-describedby="Insert the company"></p>
          <p class="center"><button type="submit" class="btn btn-primary">Search company</button></p>
        </form>
      </div>
    </div>

    <!-- Results -->
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
          <th>Votes</th>
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
              <td>$row[Votes]</td>
            </tr>";
          }

          $db->close();
        ?>
      </tbody>
    </table>
  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
