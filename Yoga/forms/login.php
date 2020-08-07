<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&family=PT+Sans:ital@1&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bell - v2.1.0
  * Template URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="index.html"><img src="" alt=""></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="../index.html">Home</a></li>
          <li><a href="../index.html#about">About Us</a></li>
          <li><a href="../index.html#team">Our Instructors</a></li>
          <li><a href="programs.php">Programs & Fee</a></li>
          <li><a href="">Studios</a></li>
          <li><a href="../index.html#contact">Contact Us</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
      
      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a> 
        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a> 
        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a> 
        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
      </nav>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container w-25">
        <div class="card  mx-auto my-5 border-0">
          <div class="card-header bg-transparent">
            <br>
            <br>
            <h1 class="text-center">Login</h1>
          </div>
          <div class="card-body">
            <form action="./functions/schedule.php" method="POST">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="username" class="small">Username</label>
                  <input type="text" name="username" id="username" class="form-control mb-2" required autofocus>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="password" class="small">Password</label>
                  <input type="password" name="password" id="password" class="form-control mb-5" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                <button type="submit" name="btnLogin" class="btn btn-dark btn-block text-uppercase">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="text-center">
          <p>Are you already a member? <br><a href="register.php">Let's Create Account!</a></p>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->
  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">
          <!-- Deleted -->
          <!-- <div class="col-lg-6 col-xs-12 text-lg-right text-center"> -->
          <div class="form-group">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="../index.html">Home</a>
              </li>

              <li class="list-inline-item">
                <a href="../index.html#about">About Us</a>
              </li>

              <li class="list-inline-item">
                <a href="../index.html#team">Our Instructors</a>
              </li>

              <li class="list-inline-item">
                <a href="programs.php">Programs</a>
              </li>

              <li class="list-inline-item">
                <a href="#team">Studios</a>
              </li>

              <li class="list-inline-item">
                <a href="../index.html#contact">Contact</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/tether/js/tether.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/lockfixed/jquery.lockfixed.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>