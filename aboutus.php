<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>




<!doctype html>
<html lang="en">

<head>
  <title>About Us</title>
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
              <a href="index.html">SmartFX</a>
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
                <li><a href="pricing.php" class="nav-link">Pricing</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
                <li><a href="login.php" class="nav-link"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
                <li><a href="logout.php" class="nav-link">Sign Out</a></li>
                <li><a href="reset-password.php" class="nav-link">Reset Password</a></li>
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
              <span class="h4 text-primary mb-4 d-block">Hi there !</span>
              <h1 class="mb-2">Welcome to our family ^_^</h1>
            </div>
          </div>
        </div>
      </div>
    </div>






  </div>
  </div>
  </div>
  </form>

  <div class="site-section bg-black block-14">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <h3 class="heading-29201 text-center text-white">Founder</h3>

          <p class="mb-5 text-white">of this company</p>
        </div>
      </div>





      <div class="site-section bg-light">
        <div class="container">



          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="post-entry-1 h-100">
                  <img src="images/andrew.jpg" alt="Image" class="img-fluid">
                <div class="post-entry-1-contents">
                  <h2><a>Christian Andrew</a></h2>
                  <span class="meta d-inline-block mb-3">Full-Stack Developer, 18 Years Old</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="post-entry-1 h-100">
                  <img src="images/angga.jpg" alt="Image" class="img-fluid">
                <div class="post-entry-1-contents">
                  <h2><a>Anggada Putra</a></h2>
                  <span class="meta d-inline-block mb-3">CEO, 18 Years Old</span>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="post-entry-1 h-100">
                  <img src="images/izul.jpg" alt="Image" class="img-fluid">
                <div class="post-entry-1-contents">

                  <h2><a>Ifaizul H</a></h2>
                  <span class="meta d-inline-block mb-3">Co-CEO, 18 Years Old</span>
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
              <form action="single.html" class="d-flex">
                <input type="email" class="form-control mr-3" placeholder="Enter your email" required>
                <input type="submit" class="btn btn-primary text-white" value="Send Now">
              </form>
            </div>
            <div class="col-md-3 ml-auto">
              <h3 class="text-white h5 mb-3">More Information</h3>
              <ul class="list-unstyled menu-arrow">
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="testi.php">Testimonials</a></li>
                <li><a href="terms.php">Terms of Service</a></li>
                <li><a href="single.php">Privacy</a></li>
                <li><a href="single.php">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h3 class="text-white h5 mb-3">About</h3>
              <p>SmartFx gather all your family with our technology</p>
            </div>
          </div>
          <!-- <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            </p>
            </div>
        </div>
      </div> -->
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
