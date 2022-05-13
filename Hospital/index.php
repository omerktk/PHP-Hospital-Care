<!DOCTYPE html>
<html lang="en">
<?php 
 include("system/home/connection.php");
   session_start(); ?>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>

@media only screen and (max-width: 600px) {
  .hidden {
  display: none;
}
}
</style>
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <?php
          if (isset($_GET['cd']))
   {
         echo '<li><a class="nav-link" href="index.php#doctors">Doctors</a></li>'; 
          }elseif(isset($_GET['sd'])){
            echo '<li><a class="nav-link" href="index.php#doctors">Doctors</a></li>';
          }else{
            echo '<li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>';
          }?>
          <li class="dropdown"><a href="#"><span>Cites</span> <i class="bi bi-chevron-down"></i></a>   
           <ul>
            <?php $fetch_cat = mysqli_query($con,"select * from city");
             while ($row = mysqli_fetch_array($fetch_cat)) {
                             echo '
                             <li><a href="index.php?cd='.$row[1].'#doctors">'.$row[1].'</a></li>
                           
                           ';} ?>
              
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Specialities</span> <i class="bi bi-chevron-down"></i></a>   
           <ul>
            
                             <li><a href="index.php?sd=Eyes Specialist#doctors">Eyes Specialist</a></li>
                             <li><a href="index.php?sd=Heart Specialist#doctors">Heart Specialist</a></li>
                             <li><a href="index.php?sd=Skin Specialist#doctors">Skin Specialist</a></li>
                             <li><a href="index.php?sd=Lungs Specialist#doctors">Lungs Specialist</a></li>
                             <li><a href="index.php?sd=X-Ray Specialist#doctors">X-Ray Specialist</a></li>
                             <li><a href="index.php?sd=Bone Specialist#doctors">Bone Specialist</a></li>
                             <li><a href="index.php?sd=Cancer Specialist#doctors">Cancer Specialist</a></li>
                           
                          
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>        
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
<?php 

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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Medilab</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
     </br></br></br>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    
<!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <ul class="list-group">
 
    
  

         <?php 
                  if (isset($_GET['cd'])) {$city = $_GET['cd'];
                     $fetch_cat = mysqli_query($con,"select * from doctor where doc_city='$city'");

                  }elseif(isset($_GET['sd'])){$city = $_GET['sd'];
                    $fetch_cat = mysqli_query($con,"select * from doctor where doc_speciality='$city'");

                  }else{ $fetch_cat = mysqli_query($con,"select * from doctor");}


                   $docdata = mysqli_num_rows($fetch_cat);


                   if ($docdata == 0) {
                    

                     echo '
<div class="alert alert-warning">
  No Doctors are Available at this movement.
</div>';
                   }
                     while ($row = mysqli_fetch_array($fetch_cat)) {
                   
     echo '  <li class="list-group-item"> <div class="col-lg-12">
            <div class="member d-flex align-items-start">
              <div class="pic hidden"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>'.$row[1].' '.$row[2].'</h4>
                <span>'.$row[10].' <p>'.$row[11].' Experience</p></span>

                <div class="row">
                <div class="col-lg-8">
                <p>A good doctor is also one who is attentive, analytical, brave, calm, cooperative, creative, decisive, energetic, ethical, friendly, gracious, humorous, investigative, knowledgeable, mature, nurturing, observant, passionate, responsible, reassuring, selfless, skillful, trustworthy, vigilant, and wise.</p><b>Address: </b>'.$row[5].'
                </div>
                <div class="col-lg-2 ">
                <b>Education: </b>'.$row[9].'
                <b>City: </b>'.$row[8].'
                
                <b>Gender: </b>'.$row[3].'
                <b>Contact: </b>'.$row[4].'
                <b>Email: </b>'.$row[6].'

                </div>
                </div>
                <div class="row">
                <div class="col-lg-8">
               <span> </span>
               </br>
                 <span>Availability: '.$row[12].' To '.$row[13].' </p></span>
               </div>
               <div class="col-lg-2 ">
               <div class="hidden">
                <span> </span>
                </div>
                </br>';
                if(isset($_SESSION["patient"]))
{
                  echo '<a href="confirm.php?doc_id='.$row[0].'" class="btn btn-primary">Book Now</a>';}else{
                   echo '<a  type="button" href="#hero" class="btn btn-secondary">login to book appointment</a>';}
                  
                  echo '</div>
                </div>
              </div>
            </div>
          </div></li>' ;  
   }
                     
                     ?></ul>
        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
   
    
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form  method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php include('footer.php');?>