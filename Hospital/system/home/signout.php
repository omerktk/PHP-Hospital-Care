<?php 
    include("connection.php");
session_start();
if(!isset($_SESSION["adminid"]))
{
  
}
else
{
     header("location:dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/hud/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 21:16:36 GMT -->

<!-- Mirrored from localhost:44358/home/signout?log=0 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Dec 2021 21:48:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>HUD | Login</title>
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
                <div class="bg-white bg-opacity-25 p-5 rounded-3">
                    <h1 class="display-4">SignOut!</h1>

                    <hr class="my-4">
                            <div class="alert alert-success">Your Account Logout Successfully.</div>

                    <p>login Again:</p>
                    <a href="../index.php" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Login Page</a>

                    <hr class="my-4">

                </div>
            </div>

        </div>


        <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


    </div>


    <script src="../assets/js/vendor.min.js" type="3c39c2cbd3638aacd91417b6-text/javascript"></script>
    <script src="../assets/js/app.min.js" type="3c39c2cbd3638aacd91417b6-text/javascript"></script>

    <script src="../assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="3c39c2cbd3638aacd91417b6-|49" defer=""></script>

</body>

<!-- Mirrored from seantheme.com/hud/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 21:16:36 GMT -->

<!-- Mirrored from localhost:44358/home/signout?log=0 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Dec 2021 21:48:40 GMT -->
</html>
