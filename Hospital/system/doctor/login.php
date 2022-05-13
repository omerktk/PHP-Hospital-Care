
<?php 
    include("connection.php");
session_start();

if(isset($_SESSION["active"]))
{
    header("location:dashboard.php");
}
else
{


        if(isset($_POST["btn"]))
        {
            
            $uemail         = $_POST["txtemail"];
            $upassword      = $_POST["txtpassword"];
            


            $login = mysqli_query($con,"select * from doctor where doc_id='$uemail' && doc_pass='$upassword'");
            $check = mysqli_num_rows($login);
            $a = mysqli_fetch_array($login);
            if($check>0)
            {
                $_SESSION["docname"] = "$a[1] $a[2]";
                $_SESSION["docid"] = $a[0];
                $_SESSION["active"] = 1;
                header("location:dashboard.php");
            }
            else
            {
                $aii = 0;
               
               
            }
            
        }
        ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/hud/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 21:16:36 GMT -->

<!-- Mirrored from localhost:44358/home/admin by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Dec 2021 21:48:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
     <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/user-interface-216/24/link_interface-512.png"  sizes="16x16">
    <title>Doctor Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../assets/css/app.min.css" rel="stylesheet" />

</head>
<body class='pace-top'>

    <div id="app" class="app app-full-height app-without-header">

        <div class="login">

            <div class="login-content">
                <form method="POST" name="login_form" autocomplete="off">
                    <h1 class="text-center">Sign In</h1>
                    <div class="text-white text-opacity-50 text-center mb-4">
                        Please verify your identity.
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Doctor ID<span class="text-danger">*</span></label>
                       <input type="number" name="txtemail" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="" required />
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                        </div>
                        <input type="password"  name="txtpassword" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="" required />
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
       
                        </div>
                    </div>
                    <button type="submit"  name="btn"  class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
                </form>
 <?php
                 if (isset($aii))
                 {
                     echo '<div class="alert alert-danger">Invalid User Name or Password</div>';
                 }
          
       
             ?>

            </div>

        </div>


        <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


    </div>


    <script src="../assets/js/vendor.min.js" type="3c39c2cbd3638aacd91417b6-text/javascript"></script>
    <script src="../assets/js/app.min.js" type="3c39c2cbd3638aacd91417b6-text/javascript"></script>

    <script src="../assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="3c39c2cbd3638aacd91417b6-|49" defer=""></script>

</body>


</html>

<?php } ?>