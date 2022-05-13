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

<?php
if(isset($_REQUEST['g-recaptcha-response']))
{

  if($_SESSION['custom_captcha'] == $_REQUEST['g-recaptcha-response'])
  {
    $date = date("Y/m/d");
    $time = $_REQUEST['time'];
    $weak = $_REQUEST['weak'];
    $pid = $_REQUEST['pid'];
    $did = $_REQUEST['did'];
    $num = $_REQUEST['number'];
    
      $insertss = mysqli_query($con, "insert into appoint (app_doc_id,app_p_id,app_weak,app_date,app_time,app_number) VALUES 
        ('$did','$pid','$weak','$date','$time','$num');");


    if ($insertss > 0)
    {
        echo'
    <div class="alert alert-warning">
    <div class="d-flex justify-content-between align-items-center">
          Appointment request send successfully you soon will be informed.
          <ol>
            <li><a href="index.php">Back to Home</a></li>
           
          </ol>
        </div>
  
</div>';
    }
    else
    {
        echo "<script>alert('error')</script>";
    }
    
  }
  else
  {
 
echo'
    <div class="alert alert-danger">
  Please fill the captcha correctly.
</div>';
  }
}
?>
        <div class="d-flex justify-content-between align-items-center">
          <h2>Appointment Confirm Page</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Appointment Confirm Page</li>
          </ol>
        </div>
        <p></p>
        <h6>
<?php
 if (isset($_GET['doc_id']))
   {
         $did = $_GET["doc_id"];
      $doc = mysqli_query($con,"select * from doctor where doc_id='$did'");
                  while ($datadoc = mysqli_fetch_array($doc)) 
                  {
                     echo ''.$datadoc[1].' '.$datadoc[2].' Routine days are '.$datadoc[12].' to '.$datadoc[13].' extra days can cause extra payment.';
                   
                  }
    }
?>
</h6>
                     <p></p>
<form action="" method="post" autocomplete="off">

  <div class="form-group">
   
    <input type="hidden" name="pid" value="<?php echo $_SESSION['pid']; ?>">   
    <input type="hidden" name="did" value="<?php echo $_REQUEST['doc_id']; ?>">

  </div>

  <div class="form-group">
    <label for="email">Active Phone Number</label>
     <p></p>
     <input type="text" required name="number" value="" class="form-control">
  </div>
<p></p>

  <div class="form-group">
    <label for="email">Choose the Day you want to vist.</label>
     <p></p>
    <select class="form-control" id="sel1" name="weak">
        <option>Monday</option>
        <option>Tuesday</option>
        <option>Wednesday</option>
        <option>Thursday</option>
        <option>Friday</option>
        <option>Saturday</option>
        <option>Sunday</option>
      </select>
  </div>
<p></p>
<div class="form-group">
    <label for="email">Choose the Time you want to vist.</label>
     <p></p>
    <select class="form-control" id="sel1" name="time">
        <option>Morning</option>
        <option>Noon</option>
        <option>Evening</option>
        <option>Night</option>
      </select>
  </div>
<p></p>
<div id="custom_captcha"></div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

      </div>
    </section><!-- End Breadcrumbs Section -->

   

  </main><!-- End #main -->

<?php include('footer.php');?>