<?php 
   include("connection.php");
   $page = 7;
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
   $doc = mysqli_query($con, "SELECT * FROM city");
   $num_rows = mysqli_num_rows($doc);
   
   ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<h1 class="page-header">
   Cities <small>
   Hospital Management System. 
   </small>
</h1>
<hr class="mb-4" />
<?php 
   if (isset($_GET['q']))
   {
   echo '<div class="alert alert-success">
   <strong>Uploaded</strong> New City Information successfully uploaded.
   </div>';
   }

   if (isset($_GET['e']))
   {
   echo '<div class="alert alert-success">
   <strong>Deleted</strong> City Information successfully deleted.
   </div>';
   }

    if (isset($_GET['w']))
   {
   echo '<div class="alert alert-success">
   <strong>Updated</strong> City Information successfully updated.
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
               <h5 class="modal-title">Delete City Info</h5>
               <a  href="Cities.php" class="btn-close" ></a>
            </div>
            <div class="modal-body">
<label class="form-label">Are you sure you want to delete this?</label>
            </div>
            <div class="modal-footer">
               <a href="Cities.php" class="btn btn-outline-default">No</a>
               <a href="backend/delcity.php?delid='.$del.'" class="btn btn-outline-theme">Yes</a>
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
                     <th>Id</th>
                     <th>Name</th>
                     
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $fetch_cat = mysqli_query($con,"select * from city");
                     while ($row = mysqli_fetch_array($fetch_cat)) {
                             echo "
                             <tr>
                             <th>$row[0]</th>              
                             <td>$row[1] </td>
                            
                            ";
                             echo '<td>
                       <a href="Cities.php?delid='.$row[0].'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a></td></tr>' ;      
                              
                     
                     
                            
                             
                          }
                     
                     ?>
               </tbody>
               <tfoot>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                    
                     <th></th>
                  </tr>
               </tfoot>
            </table>
         </div>
         <button href="#modalEdit" data-bs-toggle="modal" type="button" class="btn btn-theme">Add City</button>
      </div>
      <div class="card-arrow">
         <div class="card-arrow-top-left"></div>
         <div class="card-arrow-top-right"></div>
         <div class="card-arrow-bottom-left"></div>
         <div class="card-arrow-bottom-right"></div>
      </div>
   </div>
</div>



<div class="modal fade" id="modalEdit">
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="post" action="backend/addcity.php">
            <div class="modal-header">
               <h5 class="modal-title">Add City</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <div class="row row-space-10">
                     <div class="col-4">
                        <label class="form-label">City Name</label>
                        <input required  class="form-control" placeholder="City Name" value="" name="city_name" />
                     </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-outline-default" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-outline-theme">Save</button>
            </div>
         </form>
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