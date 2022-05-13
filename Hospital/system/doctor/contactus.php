<?php 
    include("connection.php");
$page = 5;
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
$num_rows = mysqli_num_rows($doc);

?>

            

            
<h1 class="page-header">
    Contact Us <small>
        Hospital Management System. 
    </small>

   
</h1>





 







<hr class="mb-4" />





<?php include('footer.php');?>


