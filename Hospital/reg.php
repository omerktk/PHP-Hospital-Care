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

if(!isset($_SESSION["patient"]))
{
   echo '<a href="login.php" class="appointment-btn scrollto">Login</a>';
}
else

{
    echo '<a href="logout.php" class="appointment-btn scrollto">Logout</a>';
    
}

        ?>

    </div>
  </header><!-- End Header -->

  

 <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Create Account</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Create Account</li>
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
                <form method="post"  autocomplete="off">
            <div class="modal-header">
               <h5 class="modal-title">Patient Details</h5>
               
            </div>

            <div class="modal-body">
              <?php
             if(isset($_REQUEST['g-recaptcha-response']))
{

  if($_SESSION['custom_captcha'] == $_REQUEST['g-recaptcha-response'])
  {
   if(isset($_POST["btn"]))
        {
if (isset($_POST["doc_firstname"]))
{
    $doc_firstname = $_POST["doc_firstname"];
    $doc_lastname = $_POST["doc_lastname"];
    $doc_gender = $_POST["doc_gender"];
    $doc_contact = $_POST["doc_contact"];
    $doc_email = $_POST["doc_email"];
    $doc_pass = $_POST["doc_pass"];
    $doc_age = $_POST["doc_age"];

    $insertss = mysqli_query($con, "insert into patient 
        ( p_firstname ,  p_lastname ,  p_gender ,  p_contact ,  p_email ,  p_pass ,  p_age ) VALUES 
        ('$doc_firstname','$doc_lastname','$doc_gender' ,'$doc_contact' ,'$doc_email','$doc_pass','$doc_age' );");

    if ($insertss > 0)
    {
         echo'
    <div class="alert alert-success">
  Registor Successfully <a href="login.php">Login Now</a>
</div>';
    }
    else
    {
        echo "<script>alert('error')</script>";
    }
}         
        }
      }else
  {
 
echo'
    <div class="alert alert-danger">
  Please fill the captcha correctly.
</div>';
  }
    }
          
       
             ?>

               <div class="mb-3">
               <div class="row row-space-10">
                  <div class="col-6">
                     <label class="form-label">First Name</label>
                     <input required  class="form-control" placeholder="First Name" value="" name="doc_firstname" />
                  </div>
                  <div class="col-6">
                     <label class="form-label">Last Name</label>
                     <input required  class="form-control" placeholder="Last Name" value="" name="doc_lastname" />
                  </div>
                  <div class="col-6">
                     <label class="form-label">Gender</label>
                     <select class="form-select" name="doc_gender" id="Gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                     </select>
                  </div>
                  <div class="col-6">
                     <label class="form-label">Age</label>
                     <input required  type="number" class="form-control" placeholder="Age" value="" name="doc_age" />
                  </div>
               </div>
               <div class="row row-space-10">
                  <div class="col-6">
                     <label class="form-label">Email</label>
                     <input required class="form-control" placeholder="Email" value="" name="doc_email" />
                  </div>
                  <div class="col-6">
                     <label class="form-label">Password</label>
                     <input required type="Password" class="form-control" placeholder="Password" value="" name="doc_pass" />
                  </div>
                  <div class="col-6">
                        <label class="form-label">Contact</label>
                        <input required class="form-control" placeholder="Contact" value="" name="doc_contact" />
                     </div>
                     <div id="custom_captcha"></div>

               </div>
            </div>
         </div>
            <div class="modal-footer">
               <button type="submit"  name="btn"  class="btn btn-primary btn-lg d-block w-100 fw-500 mb-3">Sign Up</button>
            </div>
         </form>
 
            </div>

        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

   

  </main><!-- End #main -->

<?php include('footer.php');?>