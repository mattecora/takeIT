<?php
  include("app/functions.php");
  reset_login();

  $db = db_connect();

  if (!empty($_POST["mc-email"])) {
    $db->query("INSERT INTO newsletter VALUES ('" . $_POST["mc-email"] . "')");
  }

  $num_stud = $db->query("SELECT COUNT(*) FROM user")->fetch_array()[0];
  $num_exps = $db->query("SELECT COUNT(*) FROM experience")->fetch_array()[0];
  $num_ment = $db->query("SELECT COUNT(*) FROM mentor")->fetch_array()[0];

  $db->close();
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
              <li class="active"><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#subscribe">Subscribe</a></li>
              <li><a href="#faq">FAQ</a></li>
              <li><a href="login.php">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </nav>
    </header>

		<section class="home bighome" id="home" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="st-home-unit">
							<div class="hero-txt">
								<p class="hero-work" style="font-size: 36px; line-height: 50px;">Mentors - Experiences - Young Talents</p>
								<h2 class="hero-title">A ticket for your dream job</h2>
								<a href="#subscribe"><button class="btn btn-main btn-lg">Get Started</button></a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<a href="#about"><div class="mouse-icon"><div class="wheel"></div></div></a>
		</section>

		<section class="service" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>A ticket for your success</h3>
							<p>Get connected with the job market</p>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-graduation-cap"></i></div>
									<strong class="st-feature-title">Learning and opportunities</strong>
									<p>Get access to professional experiences, industry updates, trends, and have the opportunity to participate in extraordinary career days with our partner companies.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-university"></i></div>
									<strong class="st-feature-title">Customized mentoring program</strong>
									<p>A tailor-made, customized mentoring program suiting your needs, your skills and your industry of interest. The mentoring sessions will be held by call, Skype or face-to-face conversation.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-users"></i></div>
									<strong class="st-feature-title">Enlarge your network</strong>
									<p>Interact with students, professionals, mentors from different industry sectors, exchange opinions and ideas, to leverage your industry prospects, making new connections and friends.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="funfacts" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-users"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="<?php echo $num_stud; ?>" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Students</strong>
						</div><!-- .funfact -->
					</div>
					<div class="col-md-4">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-pencil-square-o"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="<?php echo $num_exps; ?>" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Experiences Shared</strong>
						</div><!-- .funfact -->
					</div>
					<div class="col-md-4">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-graduation-cap"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="<?php echo $num_ment; ?>" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Mentors</strong>
						</div><!-- .funfact -->
					</div>
				</div>
			</div>
		</section>

		<section class="testimonials" style="background-color: #fff; color: #000;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="testimonials-carousel">
							<ul>
								<li>
									<div class="testimonial">
										<div class="testimonial-img">
											<img src="photos/client1_new.jpg" alt="" style="width: 150px;">
										</div>
										<blockquote>
											<p>It’s awesome, really. I can’t say enough about how well the service is designed to every student's need, interest and skills. Overall, TakeIT has allowed me to get an edge on the competition and to go above and beyond my expectations.</p>
											<footer>Paola Peterson</footer>
										</blockquote>
									</div>
								</li>
								<li>
									<div class="testimonial">
										<div class="testimonial-img">
											<img src="photos/client2_new.jpg" alt="" style="width: 150px;">
										</div>
										<blockquote>
											<p>Thanks to TakeIT I was committed to continuously learning through mine mentorship program: amazing! The experiences are really valuable and give you an extraordinary industry insight.</p>
											<footer>Alex Wilson</footer>
										</blockquote>
									</div>
								</li>
								<li>
									<div class="testimonial">
										<div class="testimonial-img">
											<img src="photos/client3_new.jpg" alt="" style="width: 150px;">
										</div>
										<blockquote>
											<p>I love this guys providing me an excellent service: they are continuously planning for improvement. It suited my needs the best. You are never the smartest person in the room with takeIT!</p>
											<footer>Diane Baker</footer>
										</blockquote>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="subscribe" class="subscribe">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="subscribe-title">Subscribe to our Newsletter</h3>
						<form method="post" action="./" role="form" class="subscribe-form">
							<div class="input-group">
								<input type="email" class="form-control" name="mc-email" placeholder="Enter E-mail...">
								<span class="input-group-btn">
									<button class="btn btn-main btn-lg" type="submit">Subscribe!</button>
								</span>
							</div>
						</form>
						<div class="subscribe-result"></div>
						<p class="subscribe-or">or</p>
						<ul class="subscribe-social">
							<li><a href="https://www.facebook.com/TakeItofficial" class="social facebook"><i class="fa fa-facebook"></i> Like us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="faq" class="faq-sec">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- <h2 class="tac">frequently asked questions</h2> -->
						<div class="section-title st-center">
							<h3>Some questions</h3>
							<p>Frequently asked questions</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> 1. What is takeIT and why should I subscribe to it? </h3>
							<p>TakeIT is a platform that fills the gap between students and job market. You will have access not only to thousands of experiences from professionals and mentors, but you will also have the opportunity to be selected for our mentorship program: a customized program that suits your interests and skills.</p>
						</div>
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> 2. Is it a free platform?</h3>
							<p>The platform offers a freemium service: the basic service will be always free for everyone in the world, but if you want to get full access to our folder of experiences you will have to pay a monthly subscription.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> 3. How can I get into a mentorship program? Are there any specific requirements?</h3>
							<p>We are going to select the students that are eligible to be mentored by looking at the curriculum of the candidates and by making an overall valuation. The main criteria will be your GPA, international experience and your motivational letters. The mentorship program is free, being based on merit.</p>
						</div>
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> 4. How can you guarantee that the person that writes the experience actually did it?</h3>
							<p>We are going to submit surveys to every mentor and professional that is on the platform, so that we can use them as a sign of truth.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

    <footer class="footer-distributed">
			<div class="footer-left">
				<img src="photos/logo_white.png" alt="takeIT!" style="width: 100px;">

				<div class="footer-links">
          <ul>
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#subscribe">Subscribe</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="login.php">Login</a></li>
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
