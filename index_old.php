<?php
  include("app/functions.php");
  reset_login();

  if (!empty($_POST["mc-email"])) {
    $db = db_connect();
    $db->query("INSERT INTO newsletter VALUES ('" . $_POST["mc-email"] . "')");
    $db->close();
  }
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
							<li><a href="#team">The Team</a></li>
							<li><a href="#contact">Contact Us</a></li>
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
								<p class="hero-work">Experiences - Mentors - Young Talents</p>
								<h2 class="hero-title">Your ticket for success</h2>
								<a href="#about"><button class="btn btn-main btn-lg">Get Started</button></a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="mouse-icon"><div class="wheel"></div></div>
		</section>

		<section class="service" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>What we do</h3>
							<p>We create connection between you and real workers</p>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-cog"></i></div>
									<strong class="st-feature-title">Option Panel</strong>
									<p>Pro adiuvet, honesto foris liberiusque statuat theseo scribimus mererer percurri geometria.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-university"></i></div>
									<strong class="st-feature-title">Option Panel</strong>
									<p>Pro adiuvet, honesto foris liberiusque statuat theseo scribimus mererer percurri geometria.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="st-feature">
									<div class="st-feature-icon"><i class="fa fa-comments-o"></i></div>
									<strong class="st-feature-title">Option Panel</strong>
									<p>Pro adiuvet, honesto foris liberiusque statuat theseo scribimus mererer percurri geometria.</p>
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
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="25964" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Users and Mentors</strong>
						</div><!-- .funfact -->
					</div>
					<div class="col-md-4">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-pencil-square-o"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="35469" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Experiences Shared</strong>
						</div><!-- .funfact -->
					</div>
					<div class="col-md-4">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-building-o"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="86214" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Connections Created</strong>
						</div><!-- .funfact -->
					</div>
				</div>
			</div>
		</section>

		<section class="about" id="team">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Meet our team</h3>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="st-member">
									<div class="st-member-img">
										<img src="photos/andrea.jpg" alt="" class="img-responsive img_about_inside">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">Andrea Cossio</strong>
										<p class="st-member-pos">Software Developer</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="st-member">
									<div class="st-member-img">
										<img src="photos/matteo.jpg" alt="" class="img-responsive img_about_inside">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">Matteo Corain</strong>
										<p class="st-member-pos">Software Developer</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="st-member">
									<div class="st-member-img">
										<img src="photos/valerio.jpg" alt="" class="img-responsive img_about_inside">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">Valerio Pidria</strong>
										<p class="st-member-pos">CFO</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-2" style="margin-top: 50px; margin-bottom: 50px;">
								<div class="st-member">
									<div class="st-member-img">
										<img src="photos/valentina.jpg" alt="" class="img-responsive img_about_inside">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">Valentina Tamborrino</strong>
										<p class="st-member-pos">Designer</p>
									</div>
								</div>
							</div>
							<div class="col-md-4" style="margin-top: 50px; margin-bottom: 50px;">
								<div class="st-member">
									<div class="st-member-img">
										<img src="photos/naresh.jpg" alt="" class="img-responsive img_about_inside">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">Naresh Rao</strong>
										<p class="st-member-pos">Operations</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="testimonials-carousel">
							<ul>
								<li>
									<div class="testimonial">
										<div class="testimonial-img">
											<img src="photos/client.jpg" alt="">
										</div>
										<blockquote>
											<p>Tueri tantis inter variis deterritum facta caret pleniorem, efficiat affert quiete, commodis comparat facio ponti, adolescens recta iucundius mundi nostrum viris quae utilitatibus.</p>
											<footer>Joseph Thompson, <cite title="Source Title">Example Inc.</cite></footer>
										</blockquote>
									</div>
								</li>
								<li>
									<div class="testimonial">
										<div class="testimonial-img">
											<img src="photos/client.jpg" alt="">
										</div>
										<blockquote>
											<p>Contrariis labore vetuit scaevola, contra percurri adamare efficeret quibus. Nostram consulatu mediocritatem maiorem, cyrenaicisque, quandam accedit veniat cognitioque, animadvertat accusantibus temporibus maximeque litterae.</p>
											<footer>Nancy Ford, <cite title="Source Title">Example Inc.</cite></footer>
										</blockquote>
									</div>
								</li>
								<li>
									<div class="testimonial">
										<div class="testimonial-img">
											<img src="photos/client.jpg" alt="">
										</div>
										<blockquote>
											<p>Illas, volumus prosperum. Nostras eoque statua cuius corrumpit praetor aliter quaeso propter ei, quam inducitur ruant doctiores sanguinem atomum molestiae, antiqua inculta dicent.</p>
											<footer>Arthur Fernandez, <cite title="Source Title">Example Inc.</cite></footer>
										</blockquote>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="contact" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Contact Us</h3>
							<p>Get in Touch with Us</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<form class="contact-form" role="form">
							<input type="text" class="form-control" id="fname" name="fname" placeholder="Your Full Name">
							<input type="email" class="form-control" id="email" name="email" placeholder="Your E-mail">
							<input type="text" class="form-control" id="subj" name="subj" placeholder="Your Subject">
							<textarea id="mssg" name="mssg" placeholder="Your Message" class="form-control" rows="10"></textarea>
							<button class="btn btn-main btn-lg" type="submit" id="send" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Sending..."><i class="fa fa-paper-plane "></i> Send</button>
						</form>
						<div id="result-message" role="alert"></div>
					</div>
					<div class="col-md-6">
						<p>If you have any question about the project or you are interested in it, just fill the form and you will be contacted back as soon as possible.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="subscribe" class="subscribe">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="subscribe-title">Subscribe Newsletter</h3>
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
							<p>frequently asked questions</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Minime paulo beatus stare?</h3>
							<p>Praesidium quaerat doloribus turpis fruuntur vocant postremo optimus utraque, veserim vitae appellant fructuosam, mediocris consistat impetu illae coniunctione modi consequentis nosque, vis qui deorum, poenis fuisse timorem ferae fastidium.</p>
						</div>
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Ferentur interrogari diceret?</h3>
							<p>Pertinerent non importari, populo faciendi civium vetuit. Gravitate numquam praesentium fabulas. Abest ponatur ineruditus restat consoletur causam, ordiamur temperantiam repellat desistemus conquirendae molestia aiunt discenda monet.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Dicent erigimur secutus fortunae?</h3>
							<p>Quarum difficilius aegritudo epularum municipem alias. Vidisse litteris, rationibus eadem, mandaremus maluisset, delectus terrore angusta deduceret numquam fidelissimae mens gravissimo propter, tradit, fastidium facta facerem qua quippiam vacuitate cupiditatum admirer navigandi.</p>
						</div>
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Molestiae dedocere effluere?</h3>
							<p>Habeo mala nocet perpetiuntur legendos dicemus levitatibus abducat futura, occultarum probant vitae evertunt laudantium docendi difficilem, offendit concederetur tuo hortensio deserere, molita gaudemus titillaret difficilius, parum timeret unum molestiam omnis vitae.</p>
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
            <li><a href="#team">The Team</a></li>
            <li><a href="#contact">Contact Us</a></li>
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
          <img src="photos/eia_logo.png" alt="EIA" style="width: 100%">
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

		<script></script>
	</body>
</html>
