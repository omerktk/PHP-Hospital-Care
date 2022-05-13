  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Hospital System</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
    <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/user-interface-216/24/link_interface-512.png"  sizes="16x16">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src='captcha.js'></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Medilab - v4.7.0
    * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
      <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
          <i class="bi bi-phone"></i> +1 5589 55488 55
        </div>
        <div class="d-none d-lg-flex social-links align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
      </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.php">Medilab</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="index.php#doctors">Doctors</a></li>
            <li><a class="nav-link scrollto" href="index.php#about">About</a></li>        
            <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  <?php 
   include("system/home/connection.php");

     session_start();
  if(isset($_SESSION["pname"]))
  {
      header("location:index.php");
  }

  if(!isset($_SESSION["patient"]))
  {
     echo '<a href="login.php" class="appointment-btn scrollto">Login</a>';
  }
  else

  {
      echo '<a href="logout.php" class="appointment-btn scrollto">Logout</a>';
      
  }
     if(isset($_POST["btn"]))
          {
              
              $uemail         = $_POST["txtemail"];
              $upassword      = $_POST["txtpassword"];
              


              $login = mysqli_query($con,"select * from patient where p_id='$uemail' && p_pass='$upassword'");
              $check = mysqli_num_rows($login);
              $a = mysqli_fetch_array($login);
              if($check>0)
              {
                  $_SESSION["pname"] = $a[1];
                  $_SESSION["pid"] = $a[0];
                  $_SESSION["patient"] = 1;
                  header("location:index.php");
              }
              else
              {
                 $aii = 0;
                 
                 
              }
              
          }
          ?>

      </div>
    </header><!-- End Header -->

    

   <main id="main">

      <!-- ======= Breadcrumbs Section ======= -->
      <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Login Page</h2>
            <ol>
              <li><a href="index.php">Home</a></li>
              <li>Login Page</li>
            </ol>
          </div>
          <p></p>
          <h6>

  </h6>
                       <p></p>
  <div class="login" style="border-radius: 25px;
    border: 2px solid #1977cc;
    padding: 20px;">

              <div class="login-content">
                  <form method="POST" name="login_form" autocomplete="off">
                      <h1 class="text-center">Sign In</h1>
                      <div class="text-white text-opacity-50 text-center mb-4">
                          Please verify your identity.
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Patient ID<span class="text-danger">*</span></label>
                         <input type="number" name="txtemail" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="" required />
                      </div>
                      <div class="mb-3">
                          <div class="d-flex">
                              <label class="form-label">Patient Password<span class="text-danger">*</span></label>
                          </div>
                          <input type="password"  name="txtpassword" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="" required />
                      </div>
                      <div class="mb-3">
                          <div class="form-check">
          <a href="reg.php">Create An Account.</a>
                          </div>
                      </div>

                      <button type="submit"  name="btn"  class="btn btn-primary btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
                  </form>
   <?php
                   if (isset($aii))
                   {
                       echo '<div class="alert alert-danger">Invalid User Name or Password</div>';
                   }
            
         
               ?>

              </div>

          </div>
        </div>
      </section><!-- End Breadcrumbs Section -->

     

    </main><!-- End #main -->

  <?php include('footer.php');?>