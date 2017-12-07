<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--jQuery, Popper.js, Bootstrap JS, Bootstrap CSS-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" crossorigin="anonymous"/>

		<!--CSS file link-->
		<link rel="stylesheet" type="text/css" href="css/style.css" />

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/jquery-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!--google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

		<!--social media icons-->
		<script src="https://use.fontawesome.com/f75c8f006c.js"></script>

		<title>Build & Work</title>
	</head>

	<body>
		<div class="container py-5">
			<nav class="navbar navbar-expand-lg navbar-light bg-white .navbar-default">
				<a class="navbar-brand font-weight-bold" href="#">Build & Work</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link text-primary" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-primary" href="#work">Work</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-primary" href="#contact1">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<div class="container p-3 mb-3">
			<div class="row">
				<div class="col-sm-12">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="assets/images/17.jpg" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<h3 class="font-weight-bold">Minimal Design</h3>
									<p class="image-text bg-white text-dark">I believe that good design is done simply. I strive to make things aesthetically pleasing. If you catch the users eye they will love it. </p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="assets/images/18.jpg" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<h3 class="font-weight-bold">UX</h3>
									<p class="image-text bg-white text-dark">I like images that pop and I believe that design has the power to make you feel. I want our projects to reflect the beauty all our around us. I want people to look at something truly amazing. But the most important thing I want is a good user experience. Something simple that works while also providing functionality.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="assets/images/19.jpg" alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
									<h3 class="font-weight-bold">Custom</h3>
									<p class="image-text bg-white text-dark">Who likes a site that looks like every other site? I don't. I want to create something custom for you whether it be a website or application. It is new, engaging and custom. It is different and in a good way. Stick out from the crowd.</p>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12 about text-center p-5 font-weight-bold" id="about">
					About
				</div>
				<div class="col-sm-12 p-5">
					<p class="text-justify">I specialize in web design, UI/UX design, graphic design, music production and film making. I am a creative at heart and have a history in music production, photography, writing and film. I use PHP, Javascript, HTML/CSS, Bootstrap and Angular in creating my websites. I want to create experiences and to tell a story. What story do you have? What would you like the world to see? I can help you on the path to creating something beautiful, something that's truly amazing. </p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12 about text-center p-5 font-weight-bold" id="work">
					Work
				</div>
				<div class="card-group p-5">
					<div class="card">
						<img class="card-img-top" src="assets/images/screen1.png" alt="Card image cap">
						<div class="card-body">
							<h6 class="card-title">Concept No.1</h6>
							<p class="card-text">Simple site using J-invert scroll. (Under Construction).</p>
							<a class="nav-link text-primary" href="https://bootcamp-coders.cnm.edu/~mromero308/buildandwork/public_html/" target="_blank">Explore</a>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="assets/images/screen2.png" alt="Card image cap">
						<div class="card-body">
							<h6 class="card-title">Concept No.2</h6>
							<p class="card-text"><p>
								Static site using a full page slider. (Under Construction)</p>
							<a class="nav-link text-primary" href="https://bootcamp-coders.cnm.edu/~mromero308/pwp/public_html/" target="_blank">Explore</a>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="assets/images/screen3.png" alt="Card image cap">
						<div class="card-body">
							<h6 class="card-title">KindHub App</h6>
							<p class="card-text">An App to help your neighbor. (under construction)</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-sm-12 about text-center p-5 font-weight-bold" id="contact1">
					Contact
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<form id="contact" action="php/mailer.php" method="post" novalidate class="mx-auto p-5">
					<fieldset>
						<input placeholder="name......." type="text" id="name" name="name" tabindex="1" required>
					</fieldset>
					<fieldset>
						<input placeholder="email......" type="email" id="email" name="email" tabindex="2" required>
					</fieldset>
					<fieldset>
						<input placeholder="phone......" type="tel" id="phone" name="phone" tabindex="3" required>
					</fieldset>
					<fieldset>
						<textarea id="message" name="message" required placeholder="message......"></textarea>
					</fieldset>
					<!--google recaptcha-->
					<div class="g-recaptcha mt-3" data-sitekey="6LeslToUAAAAAG1s1ktnY_cC3pmDcw_oHhxZAhyK"></div>
						<button class="btn btn-primary slide__link mt-3 ml-5" type="submit"><i class="fa fa-paper-plane-o"></i> Send</button>
						<button class="btn btn-dark slide__link mt-3" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</form>
			</div>
			<div class="row">
				<div class="col-sm-4 offset sm-4 mx-auto">
					<div id="output-area"></div>
				</div>
			</div>
		</div>


		<footer>
			<div class="container p-5">
				<div class="row">
					<address>
						<ul>
							<li>Build & Work</li>
							<li>20 1st Plaza Center NW #200</li>
							<li>Albuquerque, NM 87102</li>
							<li><a href="mailto:bldwrk@icloud.com">bldwrk@icloud.com</a></li>
						</ul>
					</address>
					<div class="ml-auto pr-5">
						<a class="btn btn-social-icon btn-twitter" href="https://twitter.com" target="_blank">
							<span class="fa fa-twitter"></span>
						</a>
						<a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com" target="_blank">
							<span class="fa fa-facebook"></span>
						</a>
						<a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com" target="_blank">
							<span class="fa fa-linkedin"></span>
						</a>
						<a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/ifthen_else/" target="_blank">
							<span class="fa fa-instagram"></span>
						</a>
					</div>
					</a>
				</div>
			</div>

		</footer>

	</body>
</html>