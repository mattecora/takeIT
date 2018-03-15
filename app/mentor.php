<?php
	include("functions.php");
	check_logged();

	$db = db_connect();
	$user = $db->query("SELECT * FROM user WHERE User = '$_SESSION[user]'")->fetch_array();

	/* Make a request */
	if (isset($_POST["request_post"])) {
		$db->query("INSERT INTO request VALUES ('$_SESSION[user]', '$_POST[mentor]', NOW(), 0, NULL)");
		echo $db->error;
	}

	/* Vote */
	if (isset($_POST["vote_post"])) {
		$db->query("UPDATE request SET Vote = $_POST[vote] WHERE User = '$_SESSION[user]' AND Mentor = '$_POST[mentor]' AND Datetime = '$_POST[datetime]'");
	}

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
		<link href="../css/owl.carousel.css" rel="stylesheet">
		<link href="../css/owl.theme.css" rel="stylesheet">
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
	            <li><a class="nav-item-href" href="./index.php">Dashboard</a></li>
	            <li class="active"><a class="nav-item-href" href="./mentor.php">Mentor</a></li>
	            <li><a class="nav-item-href" href="./search.php">Search</a></li>
	            <li><a class="nav-item-href" href="./add.php">Add</a></li>
	            <li><a class="nav-item-href" href="../">Log out</a></li>
	            <li><a href="profile.php" class="profile-img-href"><img src="../photos/profile.png" style="height: 50px;"/></a></li>
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
	              <h2 class="hero-title">Talk with a mentor</h2>
	            </div>
	        </div>
	      </div>
	    </div>
	  </section>

		<!-- Content -->
	  <section class="content">
	    <div class="container">
				<h1 class="center">Active requests</h1>
				<hr>
				<div class="row">
					<?php
						$db = db_connect();
						$db2 = db_connect();

						$query = $db->query("SELECT * FROM request WHERE User = '$_SESSION[user]' AND Completed = 0");
						if ($query->num_rows == 0)
							echo "<h3 class=\"center\">No active requests</h3>";

						while ($row = $query->fetch_assoc()) {
							$mentor = $db2->query("SELECT * FROM mentor WHERE Mentor = '$row[Mentor]'")->fetch_assoc();
							echo "<div class=\"col-md-12 src-tab\">
	              <div class=\"src-tab-left\">
	                <img src=\"../photos/profile.png\" style=\"width: 100%;\">
	              </div>
	              <div class=\"src-tab-right\">
									<div class=\"src-tab-head row\">
										<div class=\"col-md-6\"><h3>$mentor[Name] $mentor[Surname]</h3></div>
										<div class=\"col-md-6\" style=\"text-align: right;\"><h3><i class=\"fa fa-calendar\"></i> $row[Datetime]</h3></div>
									</div>
									<hr>
	                <div class=\"src-tab-info row\">
	                  <div class=\"col-md-6\"><i class=\"fa fa-user\"></i> $mentor[Mentor]</div>
										<div class=\"col-md-6\"><i class=\"fa fa-star\"></i> Not completed</div>
	                </div>
	                <div class=\"src-tab-info row\">
	                  <div class=\"col-md-6\"><i class=\"fa fa-university\"></i> $mentor[Company]</div>
	                  <div class=\"col-md-6\"><i class=\"fa fa-briefcase\"></i> $mentor[Area]</div>
	                </div>
	              </div>
	            </div>";
						}
					?>
				</div>

				<h1 class="center">Completed requests</h1>
				<hr>
				<div class="row">
					<?php
						$query = $db->query("SELECT * FROM request WHERE User = '$_SESSION[user]' AND Completed = 1 ORDER BY Datetime DESC");
						if ($query->num_rows == 0)
							echo "<h3 class=\"center\">No completed requests</h3>";

						while ($row = $query->fetch_assoc()) {
							$mentor = $db2->query("SELECT * FROM mentor WHERE Mentor = '$row[Mentor]'")->fetch_assoc();
							if (!is_null($row["Vote"]))
								$vote = $row["Vote"];
							else $vote = 5;

							echo "<div class=\"col-md-12 src-tab\">
	              <div class=\"src-tab-left\">
	                <img src=\"../photos/profile.png\" style=\"width: 100%;\">
	              </div>
	              <div class=\"src-tab-right\">
									<div class=\"src-tab-head row\">
										<div class=\"col-md-6\"><h3>$mentor[Name] $mentor[Surname]</h3></div>
										<div class=\"col-md-6\" style=\"text-align: right;\"><h3><i class=\"fa fa-calendar\"></i> $row[Datetime]</h3></div>
									</div>
									<hr>
	                <div class=\"src-tab-info row\">
	                  <div class=\"col-md-6\"><i class=\"fa fa-user\"></i> $mentor[Mentor]</div>
										<div class=\"col-md-6\">
											<div class=\"form-inline\">
												<form method=\"post\" action\"mentor.php\">
													<i class=\"fa fa-star\"></i>
													<input name=\"vote_post\" type=\"hidden\" value=\"vote_post\">
													<input name=\"mentor\" type=\"hidden\" value=\"$mentor[Mentor]\">
													<input name=\"datetime\" type=\"hidden\" value=\"$row[Datetime]\">";

							if (!is_null($row["Vote"])) {
								echo $row["Vote"];
							} else {
								echo "<select name=\"vote\">
									<option value=\"1\">1</option>
									<option value=\"2\">2</option>
									<option value=\"3\">3</option>
									<option value=\"4\">4</option>
									<option value=\"5\" selected=\"selected\">5</option>
								</select>
								<button class=\"btn btn-success\" type=\"submit\"><i class=\"fa fa-check\"></i> Vote</button>";
							}

							echo "</form>
											</div>
										</div>
	                </div>
	                <div class=\"src-tab-info row\">
	                  <div class=\"col-md-6\"><i class=\"fa fa-university\"></i> $mentor[Company]</div>
	                  <div class=\"col-md-6\"><i class=\"fa fa-briefcase\"></i> $mentor[Area]</div>
	                </div>
	              </div>
	            </div>";
						}
					?>
				</div>

	      <h1 class="center">Make a new request</h1>
				<hr>
	      <div class="row">
	        <?php
						$query = $db->query("SELECT * FROM mentor WHERE Area = '$user[Sector]' AND Mentor NOT IN (SELECT Mentor FROM request WHERE User = '$_SESSION[user]' AND Completed = 0)");
						if ($query->num_rows == 0)
							echo "<h3 class=\"center\">No mentors</h3>";

	          while ($row = $query->fetch_assoc()) {
							$vote = round(mentor_vote($db2, $row["Mentor"]), 1);

							echo "<div class=\"col-md-12 src-tab\">
	              <div class=\"src-tab-left\">
	                <img src=\"../photos/profile.png\" style=\"width: 100%;\">
	              </div>
	              <div class=\"src-tab-right\">
	                <div class=\"src-tab-head row\">
	                  <div class=\"col-md-10\"><h3>$row[Name] $row[Surname]</h3></div>
	                  <div class=\"col-md-2\" style=\"text-align: right;\"><h3><i class=\"fa fa-star\"></i> $vote</h3></div>
	                </div>
	                <hr>
	                <div class=\"src-tab-info row\">
	                  <div class=\"col-md-6\"><i class=\"fa fa-user\"></i> $row[Mentor]</div>
	                </div>
	                <div class=\"src-tab-info row\">
	                  <div class=\"col-md-6\"><i class=\"fa fa-university\"></i> $row[Company]</div>
	                  <div class=\"col-md-6\"><i class=\"fa fa-briefcase\"></i> $row[Area]</div>
	                </div>
									<div class=\"form-inline center\" style=\"padding-top: 10px\">
										<form method=\"post\" action\"mentor.php\">
											<input name=\"request_post\" type=\"hidden\" value=\"request_post\">
											<input name=\"mentor\" type=\"hidden\" value=\"$row[Mentor]\">
											<button class=\"btn btn-success\" type=\"submit\"><i class=\"fa fa-comment\"></i> Contact this mentor</button>
										</form>
									</div>
	              </div>
	            </div>";
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
