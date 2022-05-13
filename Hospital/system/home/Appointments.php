<?php 
   include("connection.php");
   $page = 4;
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
   $doc = mysqli_query($con, "SELECT * FROM appoint");
   $num_rows = mysqli_num_rows($doc);
   
   ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<h1 class="page-header">
   Appointment <small>
   Hospital Management System. 
   </small>
</h1>
<hr class="mb-4" />
<?php 


   if (isset($_GET['e']))
   {
   echo '<div class="alert alert-success">
   <strong>Deleted</strong> Appointment Information successfully deleted.
   </div>';
   }

   

    if (isset($_GET['delid']))
   {
      $del = $_GET['delid'];
  echo'
<div>
   <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
               <h5 class="modal-title">Delete Appointment Info</h5>
               <a  href="Appointments.php" class="btn-close" ></a>
            </div>
            <div class="modal-body">
<label class="form-label">Are you sure you want to delete this?</label>
            </div>
            <div class="modal-footer">
               <a href="Appointments.php" class="btn btn-outline-default">No</a>
               <a href="backend/delAppoint.php?delid='.$del.'" class="btn btn-outline-theme">Yes</a>
            </div>
      </div>
   </div>
</div>
  ';
   }else{
   
 ?>




<div id="responsiveTables" class="mb-5">
   <div class="card">
      <div class="card-body">
         <div class="table-responsive">
            <table id="example" class="table table-bordered" style="width:100%">
               <thead>
                  <tr>
                     <th>Appointment Id</th>
                     <th>Doctor ID</th>
                     <th>Patient ID</th>
                     <th>Week Day Name</th>
                     <th>Date</th>
                     <th>Time</th> 
                     <th>Phone Number</th>    

                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $fetch_cat = mysqli_query($con,"select * from appoint");
                     while ($row = mysqli_fetch_array($fetch_cat)) {
                             echo "
                             <tr>
                             <th>$row[0]</th>              
                             <td>$row[1] </td>
                             <td>$row[2] </td>
                             <td>$row[3] </td>
                             <td>$row[4] </td>
                             <td>$row[5] </td>
                             <td>$row[6] </td>
                            
                            
                            ";
                             echo '<td>
                       <a href="Appointments.php?delid='.$row[0].'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a></td></tr>' ;      
                              
                     
                     
                            
                             
                          }
                     
                     ?>
               </tbody>
               <tfoot>
                  <tr>
                     <th>Appointment Id</th>
                     <th>Doctor ID</th>
                     <th>Patient ID</th>
                     <th>Week Day Name</th>
                     <th>Date</th>
                    
                     <th>Time</th>    
                     <th>Phone Number</th>                 
                     <th></th>
                  </tr>
               </tfoot>
            </table>
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
<?php 
}

 ?>





<style type="text/css">table{
   width:100%;
   }
   #example_filter{
   float:right;
   }
   #example_paginate{
   float:right;
   }
   label {
   display: inline-flex;
   margin-bottom: .5rem;
   margin-top: .5rem; 
   }
   option{
   color: black; 
   }
</style>
<script type="text/javascript">$(document).ready(function() {
   $('#example').DataTable(
       
        {     
   
     "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
       "iDisplayLength": 5
      } 
       );
   } );
   
   
   function checkAll(bx) {
   var cbs = document.getElementsByTagName('input');
   for(var i=0; i < cbs.length; i++) {
   if(cbs[i].type == 'checkbox') {
     cbs[i].checked = bx.checked;
   }
   }
   }
</script>    
<?php include('footer.php');?>