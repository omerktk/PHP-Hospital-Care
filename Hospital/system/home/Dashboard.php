<?php 
    include("connection.php");
$page = 1;
session_start();
if(!isset($_SESSION["active"]))
{
     header("location:../index.php");
}
else
{
  
}
?>
<?php include('nav.php');
$doc = mysqli_query($con, "SELECT * FROM doctor");
$docdata = mysqli_num_rows($doc);
$appoint = mysqli_query($con, "SELECT * FROM appoint");
$appointdata = mysqli_num_rows($appoint);
$city = mysqli_query($con, "SELECT * FROM city");
$citydata = mysqli_num_rows($city);
$patient = mysqli_query($con, "SELECT * FROM patient");
$patientdata = mysqli_num_rows($patient);

?>

            

            
<h1 class="page-header">
    Dashboard <small>
        Hospital Management System.
    </small>

   
</h1>





 







<hr class="mb-4" />



<div class="row">
        


      <div class="col-xl-6">
   <div class="card mb-3">
      <div class="card-body">
         <div class="panel-body text-center">
            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x" style="opacity:0.2;"></i> <i class="fa fa-users" style="color:#3cd2a5"></i> </span>
            <h2 class="StepTitle">Doctors</h2>
            <p class="links cl-effect-1">
               <a class="" href="Doctors.php">
               Total Users : <?php echo htmlentities($docdata);?>  
               </a>
            </p>
         </div>
      </div>
      <div class="card-arrow">
         <div class="card-arrow-top-left"></div>
         <div class="card-arrow-top-right"></div>
         <div class="card-arrow-bottom-left"></div>
         <div class="card-arrow-bottom-right"></div>
      </div>
   </div>
</div>


          <div class="col-xl-6">
   <div class="card mb-3">
      <div class="card-body">
         <div class="panel-body text-center">
            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x "style="opacity:0.2;"></i> <i class="fa fa-smile" style="color:#3cd2a5"></i> </span>
            <h2 class="StepTitle">Patients</h2>
            <p class="links cl-effect-1">
               <a href="Patients.php">
               Total Users : <?php echo htmlentities($patientdata);?>       
               </a>
            </p>
         </div>
      </div>
      <div class="card-arrow">
         <div class="card-arrow-top-left"></div>
         <div class="card-arrow-top-right"></div>
         <div class="card-arrow-bottom-left"></div>
         <div class="card-arrow-bottom-right"></div>
      </div>
   </div>
</div>

<div class="col-xl-6">
   <div class="card mb-3">
      <div class="card-body">
         <div class="panel-body text-center">
            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x"style="opacity:0.2;"></i> <i class="bi bi-cloud" style="color:#3cd2a5"></i> </span>
            <h2 class="StepTitle">Cities</h2>
            <p class="links cl-effect-1">
               <a href="Cities.php">
               Total Cities : <?php echo htmlentities($citydata);?>      
               </a>
            </p>
         </div>
      </div>
      <div class="card-arrow">
         <div class="card-arrow-top-left"></div>
         <div class="card-arrow-top-right"></div>
         <div class="card-arrow-bottom-left"></div>
         <div class="card-arrow-bottom-right"></div>
      </div>
   </div>
</div>

      <div class="col-xl-6">
   <div class="card mb-3">
      <div class="card-body">
         <div class="panel-body text-center">
            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x "style="opacity:0.2;"></i> <i class="bi bi-collection" style="color:#3cd2a5"></i> </span>
            <h2 class="StepTitle">Appointments</h2>
            <p class="links cl-effect-1">
               <a href="Appointments.php">
               Total Appointments : <?php echo htmlentities($appointdata);?>    
               </a>
            </p>
         </div>
      </div>
      <div class="card-arrow">
         <div class="card-arrow-top-left"></div>
         <div class="card-arrow-top-right"></div>
         <div class="card-arrow-bottom-left"></div>
         <div class="card-arrow-bottom-right"></div>
      </div>
   </div>
</div>


      

</div>


<hr class="mb-4" />




<?php include('footer.php');?>


