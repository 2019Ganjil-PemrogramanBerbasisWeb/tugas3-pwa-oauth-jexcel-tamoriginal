<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>SmartFX</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/aos.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<div class="site-wrap" id="home-section">
		<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>
		<header class="site-navbar site-navbar-target" role="banner">
			<div class="container">
				<div class="row align-items-center position-relative">
					<div class="col-3 ">
						<div class="site-logo">
							<a href="index.php">SmartFX</a>
						</div>
					</div>
					<div class="col-9  text-right">
						<span class="d-inline-block d-lg-none"><a href="#"
								class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
									class="icon-menu h3 text-white"></span></a></span>
						<nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
							<ul class="site-menu main-menu js-clone-nav ml-auto ">
								<li><a href="index.php" class="nav-link">Home</a></li>
								<li><a href="service.php" class="nav-link">Service</a></li>
								<li class="active"><a href="pricing.php" class="nav-link">Pricing</a></li>
								<li><a href="contact.php" class="nav-link">Contact</a></li>
								<li><a href="login.php" class="nav-link"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
                 						<li><a href="logout.php" class="nav-link">Sign Out</a></li>
								<li><a href="reset-password.php" class="nav-link">Reset Password</a></li>
              					</ul>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<div class="ftco-blocks-cover-1">
			<div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
				style="background-image: url('images/hero_1.jpg')">
				<div class="container">
					<div class="row align-items-center justify-content-center text-center">
						<div class="col-md-7">
							<h1 class="mb-2">How Much Our Service ?</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="site-section bg-black block-14">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center">
						<h3 class="heading-29201 text-center text-white">Price List</h3>
						<p class="mb-5 text-white"></p>
					</div>
				</div>
				<div class="site-section bg-light">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6 mb-4">
								<div class="post-entry-1 h-100">
									<a href="um.php">
										<img src="images/img_1.jpg" alt="Image" class="img-fluid">
									</a>
									<div class="post-entry-1-contents">
										<h2><a href="#">FAMILY</a></h2>
										<span class="meta d-inline-block mb-3">IDR 100.000 /month <span
												class="mx-2"></span> <a class="btn btn-primary" href="um.php"
												role="button">SUBS</a></span>
										<p>
											<ul>
												<li>5 GB SPACE</li>
												<li>Max 7 things</li>
												<li>1 Users</li>
											</ul>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-4">
								<div class="post-entry-1 h-100">
									<a href="um.php">
										<img src="images/img_2.jpg" alt="Image" class="img-fluid">
									</a>
									<div class="post-entry-1-contents">
										<h2><a href="#">ELITE</a></h2>
										<span class="meta d-inline-block mb-3">IDR 350.000 /month <span
												class="mx-2"></span> <a class="btn btn-primary" href="um.php"
												role="button">SUBS</a></span>
										<p>
											<ul>
												<li>10 GB SPACE</li>
												<li> Max 16 things</li>
												<li>5 Users</li>
											</ul>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 mb-4">
								<div class="post-entry-1 h-100">
									<a href="um.php">
										<img src="images/img_3.jpg" alt="Image" class="img-fluid">
									</a>
									<div class="post-entry-1-contents">
										<h2><a href="#">MAXIMA</a></h2>
										<span class="meta d-inline-block mb-3">IDR 1.050.000 /month <span
												class="mx-2"></span> <a class="btn btn-primary" href="um.php"
												role="button">SUBS</a></span>
										<p>
											<ul>
												<li>UNLIMITED SPACE</li>
												<li>Unlimited things</li>
												<li>Unilimited Users</li>
											</ul>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3 class="text-white h5 mb-3">Subscribe</h3>
						<form action="um.php" class="d-flex">
							<input type="email" class="form-control mr-3" placeholder="Enter your email" required>
							<input type="submit" class="btn btn-primary text-white" value="Send Now">
						</form>
					</div>
					<div class="col-md-3 ml-auto">
						<h3 class="text-white h5 mb-3">More Information</h3>
						<ul class="list-unstyled menu-arrow">
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="um.php">Testimonials</a></li>
							<li><a href="um.php">Terms of Service</a></li>
							<li><a href="um.php">Privacy</a></li>
							<li><a href="um.php">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<h3 class="text-white h5 mb-3">About</h3>
						<p>SmartFx gather all your family with our technology</p>
					</div>
				</div>
				<div class="row pt-5 mt-5 text-center">
					<div class="col-md-12">
						<div class="border-top pt-5">
							<p></p>
							</p>
						</div>
					</div>

				</div>
			</div>
		</footer>

	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/aos.js"></script>

	<script src="js/main.js"></script>

</body>

</html>
