<?php
  include("functions.php");
  check_logged();

  if (empty($_GET["id"])) {
    include("error.php");
    die();
  }

  $db = db_connect();

  /* Execute purchase */
  if (isset($_POST["frmname"]) && $_POST["frmname"] == "purchase") {
    $query_purchase = $db->query("INSERT INTO purchase VALUES ('$_SESSION[user]', $_GET[id])");
  }

  /* Check if user purchased */
  $query_check_purchase = $db->query("SELECT * FROM purchase WHERE User = '$_SESSION[user]' AND Id = $_GET[id]");
  if ($query_check_purchase->num_rows > 0)
    $purch = true;
  else $purch = false;

  /* Get the experience info */
  $query_info = $db->query("SELECT * FROM experience WHERE Id = $_GET[id]");
  $info = $query_info->fetch_assoc();

  if (!$purch && $info['User'] == $_SESSION["user"])
    $purch = true;

  /* Execute vote */
  if (isset($_POST["frmname"]) && $_POST["frmname"] == "vote") {
    $query_vote_1 = $db->query("UPDATE experience SET Votes = Votes+1 WHERE Id = $_GET[id]");
    $info["Votes"]++;
    $query_vote_2 = $db->query("INSERT INTO vote VALUES ('$_SESSION[user]', $_GET[id])");
  }

  /* Check if user can vote */
  $query_check_vote = $db->query("SELECT * FROM vote WHERE User = '$_SESSION[user]' AND Id = $_GET[id]");
  if ($query_check_vote->num_rows == 0 && $info["User"] != $_SESSION["user"] && $purch)
    $can_vote = true;
  else $can_vote = false;

  /* Check votes number */
  $info["Votes"] = count_votes($db, $_GET["id"]);

  /* Check purchases number */
  $info["Purchases"] = count_purchases($db, $_GET["id"]);

  $db->close();
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
    <h1>View the experience</h1>
    <?php
      if (isset($query_purchase) && $query_purchase == true)
        draw_msg_ok("You successfully purchased this experience!");
      else if (isset($query_purchase) && $query_purchase == false)
        draw_msg_err("There was an error in purchasing this experience!");
    ?>
  </div>

  <!-- Content -->
  <div class="container animated fadeInUp">
    <div class="row">
      <div class="col-md-4">
        <h3>Author</h3>
        <p class="center"><?php echo $info["User"]; ?></p>
      </div>
      <div class="col-md-4">
        <h3>Title</h3>
        <p class="center"><?php echo $info["Title"]; ?></p>
      </div>
      <div class="col-md-4">
        <h3>Votes</h3>
        <p class="center"><?php echo $info["Votes"]; ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <h3>Date</h3>
        <p class="center"><?php echo $info["Date"]; ?></p>
      </div>
      <div class="col-md-3">
        <h3>Position</h3>
        <p class="center"><?php echo $info["Position"]; ?></p>
      </div>
      <div class="col-md-3">
        <h3>Company</h3>
        <p class="center"><?php echo $info["Company"]; ?></p>
      </div>
      <div class="col-md-3">
        <h3>Purchases</h3>
        <p class="center"><?php echo $info["Purchases"]; ?></p>
      </div>
    </div>

    <?php
      /* Purchase button */
      if ($purch) {
        echo "<p>" . $info["Description"] . "</p>";
      } else {
        echo "<form method=\"post\">
        <p class=\"center\">You haven't purchased this experience yet.</p>
        <p class=\"center\"><button type=\"submit\" class=\"btn btn-success\">
          <span style=\"font-size: 100%;\" class=\"glyphicon glyphicon-euro\"></span> Purchase now!
        </button></p>
        <input type=\"hidden\" name=\"frmname\" value=\"purchase\"/>
        </form>";
      }

      /* Vote button */
      if ($can_vote) {
        echo "<form method=\"post\">
        <p class=\"center\"><button type=\"submit\" class=\"btn btn-success\">
          <span style=\"font-size: 100%;\" class=\"glyphicon glyphicon-thumbs-up\"></span> Vote this experience!
        </button></p>
        <input type=\"hidden\" name=\"frmname\" value=\"vote\"/>
        </form>";
      }
    ?>

      <p class="center"><a href="search.php"><button class="btn btn-primary">
        <span style="font-size: 100%" class="glyphicon glyphicon-arrow-left"></span> Go back
      </button></a></p>
  </div>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
