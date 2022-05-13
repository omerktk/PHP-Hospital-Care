<?php 
   include("connection.php");
   $page = 2;
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<h1 class="page-header">
   Doctors <small>
   Hospital Management System. 
   </small>
</h1>
<hr class="mb-4" />
<?php 
   if (isset($_GET['q']))
   {
   echo '<div class="alert alert-success">
   <strong>Uploaded</strong> New Doctor Information successfully uploaded.
   </div>';
   }

   if (isset($_GET['e']))
   {
   echo '<div class="alert alert-success">
   <strong>Deleted</strong> Doctor Information successfully deleted.
   </div>';
   }

    if (isset($_GET['w']))
   {
   echo '<div class="alert alert-success">
   <strong>Updated</strong> Doctor Information successfully updated.
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
               <h5 class="modal-title">Delete Doctor Info</h5>
               <a  href="Doctors.php" class="btn-close" ></a>
            </div>
            <div class="modal-body">
<label class="form-label">Are you sure you want to delete this?</label>
            </div>
            <div class="modal-footer">
               <a href="Doctors.php" class="btn btn-outline-default">No</a>
               <a href="backend/deldoc.php?delid='.$del.'" class="btn btn-outline-theme">Yes</a>
            </div>
      </div>
   </div>
</div>
  ';
   }else{
   
   if (isset($_GET['did']))
   {
         $did = $_GET["did"];
      $doc = mysqli_query($con,"select * from doctor where doc_id='$did'");

                  while ($datadoc = mysqli_fetch_array($doc)) {
                     echo'
<div class="card">
   <div class="card-body">
      <div class="bg-white bg-opacity-25 p-5 rounded-3">
      <div class="modal-header">
         <h1>Doctor Information</h1>
          <a  href="Doctors.php" class="btn-close" ></a>
          </div>
          </br>
         <div class="lead">
            <div class="card">
               <div class="list-group list-group-flush">
               <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Doctor Id</div>
                        <div class="text-white text-opacity-50">'.$datadoc[0].'</div>
                     </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Doctor Name</div>
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
                        <div>Address</div>
                        <div class="text-white text-opacity-50">'.$datadoc[5].'</div>
                     </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Email</div>
                        <div class="text-white text-opacity-50">'.$datadoc[6].'</div>
                     </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Password</div>
                        <div class="text-white text-opacity-50">'.$datadoc[7].'</div>
                     </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>City</div>
                        <div class="text-white text-opacity-50">'.$datadoc[8].'</div>
                     </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Education</div>
                        <div class="text-white text-opacity-50">'.$datadoc[9].'</div>
                     </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Speciality</div>
                        <div class="text-white text-opacity-50">'.$datadoc[10].'</div>
                     </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Experience</div>
                        <div class="text-white text-opacity-50">'.$datadoc[11].'</div>
                     </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                     <div class="flex-1 text-break">
                        <div>Availability</div>
                        <div class="text-white text-opacity-50">'.$datadoc[12].' to '.$datadoc[13].'</div>
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
      $doc = mysqli_query($con,"select * from doctor where doc_id='$did'");
$fetch_cat = mysqli_query($con,"select * from city");
                  while ($datadoc = mysqli_fetch_array($doc)) {
                     echo'

<div>
   <div class="modal-dialog">
      <div class="modal-content">
         <form method="post" action="backend/editdoc.php">
            <div class="modal-header">
               <h5 class="modal-title">Edit Doctor</h5>
               <a  href="Doctors.php" class="btn-close" ></a>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <div class="row row-space-10">
                     <div class="col-4">
                        <label class="form-label">First Name</label>
                        <input required  class="form-control" placeholder="First Name" value="'.$datadoc[1].'" name="doc_firstname" />
                     </div>
                     <div class="col-4">
                        <label class="form-label">Last Name</label>
                        <input required  class="form-control" placeholder="Last Name" value="'.$datadoc[2].'" name="doc_lastname" />
                     </div>
                     <div class="col-4">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="doc_gender" id="Gender">
                           <option value="'.$datadoc[3].'">'.$datadoc[3].'</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                           <option value="Other">Other</option>
                        </select>
                     </div>
                  </div>
                  <div class="row row-space-10">
                     <div class="col-4">
                        <label class="form-label">City</label>
                        <select class="form-select" name="doc_city" id="City">
                        <option value="'.$datadoc[8].'">'.$datadoc[8].'</option>
                        ';

                         
                     while ($row = mysqli_fetch_array($fetch_cat)) {
                             echo '
                           <option value="'.$row[1].'">'.$row[1].'</option>
                           ';}

                           echo'
                        </select>
                     </div>
                     <div class="col-4">
                        <label class="form-label">Contact</label>
                        <input required class="form-control" placeholder="Contact" value="'.$datadoc[4].'" name="doc_contact" />
                     </div>
                     <div class="col-4">
                        <label class="form-label">Password</label>
                        <input required type="Password" class="form-control" placeholder="Password" value="'.$datadoc[7].'" name="doc_pass" />
                     </div>
                  </div>
                  <div class="row row-space-10">
                     <div class="col-6">
                        <label class="form-label">Email</label>
                        <input required class="form-control" placeholder="Email" value="'.$datadoc[6].'" name="doc_email" />
                     </div>
                     <div class="col-6">
                        <label class="form-label">Education</label>
                        <input required class="form-control" placeholder="Education" value="'.$datadoc[9].'" name="doc_study" />
                     </div>
                  </div>
                  <div class="row row-space-10">
                     <div class="col-6">
                        <label class="form-label">Speciality</label>
                        <select class="form-select" name="doc_speciality" id="City">
                        <option value="'.$datadoc[10].'">'.$datadoc[10].'</option>
                        <option value="Heart Specialist">Heart Specialist</option>
                        <option value="Skin Specialist">Skin Specialist</option>
                        <option value="Eyes Specialist">Eyes Specialist</option>
                        <option value="Lungs Specialist">Lungs Specialist</option>
                        <option value="X-Ray Specialist">X-Ray Specialist</option>
                        <option value="Bone Specialist">Bone Specialist</option>
                        <option value="Cancer Specialist">Cancer Specialist</option>
                        </select>
                     </div>
                     <div class="col-6">
                        <label class="form-label">Experience</label>
                        <select class="form-select" name="doc_exp" id="City">
                        <option value="'.$datadoc[11].'">'.$datadoc[11].'</option>
                           <option value="1 years">1 year</option>
                           <option value="2 years">2 years</option>
                           <option value="3 years">3 years</option>
                           <option value="4 years">4 years</option>
                           <option value="+5 years">+5 years</option>
                        </select>
                     </div>
                  </div>
                  <div class="row row-space-10">
                     <div class="col-6">
                        <label class="form-label">Form</label>
                        <select class="form-select" name="doc_from" id="City">
                        <option value="'.$datadoc[12].'">'.$datadoc[12].'</option>
                           <option value="Monday">Monday</option>
                           <option value="Tuesday">Tuesday</option>
                           <option value="Wednesday">Wednesday</option>
                           <option value="Thursday">Thursday</option>
                           <option value="Friday">Friday</option>
                           <option value="Saturday">Saturday</option>
                           <option value="Sunday">Sunday</option>
                        </select>
                     </div>
                     <div class="col-6">
                        <label class="form-label">To</label>
                        <select class="form-select" name="doc_to" id="City">
                        <option value="'.$datadoc[13].'">'.$datadoc[13].'</option>
                           <option value="Sunday">Sunday</option>
                           <option value="Saturday">Saturday</option>
                           <option value="Friday">Friday</option>
                           <option value="Thursday">Thursday</option>
                           <option value="Wednesday">Wednesday</option>
                           <option value="Tuesday">Tuesday</option>
                           <option value="Monday">Monday</option>
                        </select>
                     </div>
                  </div>
                  <div class="row row-space-10">
                     <div class="col-9">
                        <label class="form-label">Address</label>
                        <input  required class="form-control" placeholder="Address" value="'.$datadoc[5].'" name="doc_address" autocomplete="off"/>
                         <input  type="hidden" value="'.$datadoc[0].'" name="doc_id" />
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <a href="Doctors.php" class="btn btn-outline-default">Close</a>
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
                     <th>Address</th>
                     <th>City</th>
                     <th>Speciality</th>
                     <th>Experience</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     $fetch_cat = mysqli_query($con,"select * from doctor");
                     while ($row = mysqli_fetch_array($fetch_cat)) {
                             echo "
                             <tr>
                             <th>$row[0]</th>              
                             <td>$row[1] $row[2]</td>
                             <td>$row[3]</td>
                             <td>$row[4]</td>
                             <td>$row[5]</td>                   
                             <td>$row[8]</td>
                             <td>$row[10]</td>
                        
                             <td>$row[11]</td>
                            ";
                             echo '<td><a href="Doctors.php?did='.$row[0].'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>
                       <a href="Doctors.php?eid='.$row[0].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-edit"></span></a>
                       <a href="Doctors.php?delid='.$row[0].'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a></td></tr>' ;      
                              
                     
                     
                            
                             
                          }
                     
                     ?>
               </tbody>
               <tfoot>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Gender</th>
                     <th>Contact</th>
                     <th>Address</th>
                     <th>City</th>
                     <th>Speciality</th>
                     <th>Experience</th>
                     <th></th>
                  </tr>
               </tfoot>
            </table>
         </div>
         <button href="#modalEdit" data-bs-toggle="modal" type="button" class="btn btn-theme">Add Doctor</button>
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
         <form method="post" action="backend/adddoc.php">
            <div class="modal-header">
               <h5 class="modal-title">Add Doctor</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <div class="row row-space-10">
                     <div class="col-4">
                        <label class="form-label">First Name</label>
                        <input required  class="form-control" placeholder="First Name" value="" name="doc_firstname" />
                     </div>
                     <div class="col-4">
                        <label class="form-label">Last Name</label>
                        <input required  class="form-control" placeholder="Last Name" value="" name="doc_lastname" />
                     </div>
                     <div class="col-4">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="doc_gender" id="Gender">
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                           <option value="Other">Other</option>
                        </select>
                     </div>
                  </div>
                  <div class="row row-space-10">
                     <div class="col-4">
                        <label class="form-label">City</label>
                        <select class="form-select" name="doc_city" id="City">
                        
                     
                         <?php  
                         $city = mysqli_query($con,"select * from city");
                     while ($row1 = mysqli_fetch_array($city)) 
                        {
                            echo '<option value="'.$row1[1].'">'.$row1[1].'</option>';
                        }
                          ?>

                          
                        </select>
                     </div>
                     <div class="col-4">
                        <label class="form-label">Contact</label>
                        <input required class="form-control" placeholder="Contact" value="" name="doc_contact" />
                     </div>
                     <div class="col-4">
                        <label class="form-label">Password</label>
                        <input required type="Password" class="form-control" placeholder="Password" value="" name="doc_pass" />
                     </div>
                  </div>
                  <div class="row row-space-10">
                     <div class="col-6">
                        <label class="form-label">Email</label>
                        <input required class="form-control" placeholder="Email" value="" name="doc_email" />
                     </div>
                     <div class="col-6">
                        <label class="form-label">Education</label>
                        <input required class="form-control" placeholder="Education" value="" name="doc_study" />
                     </div>
                  </div>
                  <div class="row row-space-10">
                      <div class="col-6">
                        <label class="form-label">Speciality</label>
                        <select class="form-select" name="doc_speciality" id="City" >
                        <option value="Heart Specialist">Heart Specialist</option>
                        <option value="Skin Specialist">Skin Specialist</option>
                        <option value="Eyes Specialist">Eyes Specialist</option>
                        <option value="Lungs Specialist">Lungs Specialist</option>
                        <option value="X-Ray Specialist">X-Ray Specialist</option>
                        <option value="Bone Specialist">Bone Specialist</option>
                        <option value="Cancer Specialist">Cancer Specialist</option>
                        </select>
                     </div>
                     <div class="col-6">
                        <label class="form-label">Experience</label>
                        <select class="form-select" name="doc_exp" id="City">
                           <option value="1 years">1 year</option>
                           <option value="2 years">2 years</option>
                           <option value="3 years">3 years</option>
                           <option value="4 years">4 years</option>
                           <option value="+5 years">+5 years</option>
                        </select>
                     </div>
                  </div>
                  <div class="row row-space-10">
                     <div class="col-6">
                        <label class="form-label">Form</label>
                        <select class="form-select" name="doc_from" id="City">
                           <option value="Monday">Monday</option>
                           <option value="Tuesday">Tuesday</option>
                           <option value="Wednesday">Wednesday</option>
                           <option value="Thursday">Thursday</option>
                           <option value="Friday">Friday</option>
                           <option value="Saturday">Saturday</option>
                           <option value="Sunday">Sunday</option>
                        </select>
                     </div>
                     <div class="col-6">
                        <label class="form-label">To</label>
                        <select class="form-select" name="doc_to" id="City">
                           <option value="Sunday">Sunday</option>
                           <option value="Saturday">Saturday</option>
                           <option value="Friday">Friday</option>
                           <option value="Thursday">Thursday</option>
                           <option value="Wednesday">Wednesday</option>
                           <option value="Tuesday">Tuesday</option>
                           <option value="Monday">Monday</option>
                        </select>
                     </div>
                  </div>
                  <div class="row row-space-10">
                     <div class="col-9">
                        <label class="form-label">Address</label>
                        <input  required class="form-control" placeholder="Address" value="" name="doc_address" autocomplete="off"/>
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