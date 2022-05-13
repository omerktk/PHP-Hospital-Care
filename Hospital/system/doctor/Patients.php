<?php 
   include("connection.php");
   $page = 3;
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
   $doc = mysqli_query($con, "SELECT * FROM Patient");
   $num_rows = mysqli_num_rows($doc);
   
   ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<h1 class="page-header">
   Patients <small>
   Hospital Management System. 
   </small>
</h1>
<hr class="mb-4" />
<?php 
   if (isset($_GET['q']))
   {
   echo '<div class="alert alert-success">
   <strong>Uploaded</strong> New Patient Information successfully uploaded.
   </div>';
   }

   if (isset($_GET['e']))
   {
   echo '<div class="alert alert-success">
   <strong>Deleted</strong> Patient Information successfully deleted.
   </div>';
   }

    if (isset($_GET['w']))
   {
   echo '<div class="alert alert-success">
   <strong>Updated</strong> Patient Information successfully updated.
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
               <h5 class="modal-title">Delete Patient Info</h5>
               <a  href="patients.php" class="btn-close" ></a>
            </div>
            <div class="modal-body">
<label class="form-label">Are you sure you want to delete this?</label>
            </div>
            <div class="modal-footer">
               <a href="patients.php" class="btn btn-outline-default">No</a>
               <a href="backend/delp.php?delid='.$del.'" class="btn btn-outline-theme">Yes</a>
            </div>
      </div>
   </div>
</div>
  ';
   }else{
   
   if (isset($_GET['did']))
   {
         $did = $_GET["did"];
      $doc = mysqli_query($con,"select * from patient where p_id='$did'");

                  while ($datadoc = mysqli_fetch_array($doc)) {
                     echo'
<div class="card">
   <div class="card-body">
      <div class="bg-white bg-opacity-25 p-5 rounded-3">
      <div class="modal-header">
         <h1>Patient Information</h1>
          <a  href="patients.php" class="btn-close" ></a>
          </div>
          </br>
         <div class="lead">
            <div class="card">
               <div class="list-group list-group-flush">
               <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Patient Id</div>
                        <div class="text-white text-opacity-50">'.$datadoc[0].'</div>
                     </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Patient Name</div>
                        <div class="text-white text-opacity-50">'.$datadoc[1].' '.$datadoc[2].'</div>
                     </div>
                  </div>                 
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Gender</div>
                        <div class="text-white text-opacity-50">'.$datadoc[3].'</div>
                     </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Contact Number</div>
                        <div class="text-white text-opacity-50">'.$datadoc[4].'</div>
                     </div>
                  </div>
                 <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Email Address</div>
                        <div class="text-white text-opacity-50">'.$datadoc[5].'</div>
                     </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Age</div>
                        <div class="text-white text-opacity-50">'.$datadoc[7].'</div>
                     </div>
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
   </div>
   <div class="card-arrow">
      <div class="card-arrow-top-left"></div>
      <div class="card-arrow-top-right"></div>
      <div class="card-arrow-bottom-left"></div>
      <div class="card-arrow-bottom-right"></div>
   </div>
</div>
<hr class="mb-4" />                        
                     ';
                  }
   }else{
 
 ?>


<?php 
   
 if (isset($_GET['eid']))
   {
         $did = $_GET["eid"];
      $doc = mysqli_query($con,"select * from patient where p_id='$did'");
$fetch_cat = mysqli_query($con,"select * from city");
                  while ($datadoc = mysqli_fetch_array($doc)) {
                     echo'

<div>
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="post" action="backend/editp.php">
            <div class="modal-header">
               <h5 class="modal-title">Edit Patient</h5>
               <a  href="patients.php" class="btn-close" ></a>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <div class="row row-space-10">
                     <div class="col-6">
                        <label class="form-label">First Name</label>
                        <input required  class="form-control" placeholder="First Name" value="'.$datadoc[1].'" name="doc_firstname" />
                     </div>
                     <div class="col-6">
                        <label class="form-label">Last Name</label>
                        <input required  class="form-control" placeholder="Last Name" value="'.$datadoc[2].'" name="doc_lastname" />
                     </div>
                     <div class="col-6">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="doc_gender" id="Gender">
                           <option value="'.$datadoc[3].'">'.$datadoc[3].'</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                           <option value="Other">Other</option>
                        </select>
                     </div>
                     <div class="col-6">
                        <label class="form-label">Age</label>
                        <input required  type="number" class="form-control" placeholder="Age" value="'.$datadoc[7].'" name="doc_age" />
                     </div>
                  </div>
                  <div class="row row-space-10">
                     <div class="col-6">
                        <label class="form-label">Email</label>
                        <input required class="form-control" placeholder="Email" value="'.$datadoc[5].'" name="doc_email" />
                     </div>
                     
                     <div class="col-6">
                        <label class="form-label">Password</label>
                        <input required type="Password" class="form-control" placeholder="Password" value="'.$datadoc[6].'" name="doc_pass" />
                         <input  type="hidden" value="'.$datadoc[0].'" name="doc_id" />
                     </div>

                     <div class="col-6">
                        <label class="form-label">Contact</label>
                        <input required class="form-control" placeholder="Contact" value="'.$datadoc[4].'" name="doc_contact" />
                     </div>
                  </div>
                  
               </div>
            </div>
            <div class="modal-footer">
               <a href="patients.php" class="btn btn-outline-default">Close</a>
               <button type="submit" class="btn btn-outline-theme">Save changes</button>
            </div>
         </form>
      </div>
   </div>
</div>
  ';
                  }
   }
   else{
   
   
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
                     <th>Gender</th>
                     <th>Contact</th>
                     <th>Email Address</th>
                     <th>Age</th>
                    
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $fetch_cat = mysqli_query($con,"select * from patient");
                     while ($row = mysqli_fetch_array($fetch_cat)) {
                             echo "
                             <tr>
                             <th>$row[0]</th>              
                             <td>$row[1] $row[2]</td>
                             <td>$row[3]</td>
                             <td>$row[4]</td>
                             <td>$row[5]</td>                   
                             <td>$row[7]</td>
                            
                            ";
                             echo '<td><a href="patients.php?did='.$row[0].'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>
                       </td></tr>' ;      
                              
                     
                     
                            
                             
                          }
                     
                     ?>
               </tbody>
               <tfoot>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Gender</th>
                     <th>Contact</th>
                     <th>Email Address</th>
                     <th>Age</th>
                    
                     <th></th>
                  </tr>
               </tfoot>
            </table>
         </div>
         <button href="#modalEdit" data-bs-toggle="modal" type="button" class="btn btn-theme">Add Patient</button>
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
         <form method="post" action="backend/addp.php">
            <div class="modal-header">
               <h5 class="modal-title">Add Patient</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
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
<?php 
}
}
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