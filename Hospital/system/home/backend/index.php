<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/hud/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 21:16:36 GMT -->

<!-- Mirrored from localhost:44358/home/admin by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Dec 2021 21:48:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
     <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/user-interface-216/24/link_interface-512.png"  sizes="16x16">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="../../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../../assets/css/app.min.css" rel="stylesheet" />

</head>
<body class='pace-top'>

<div id="app" class="app app-full-height app-without-header">

<div class="error-page">

<div class="error-page-content">
<div class="card mb-5 mx-auto" style="max-width: 320px;">
<div class="card-body">
<div class="card">
<div class="error-code">404</div>
<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
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
<h1>Oops!</h1>
<h3>We can't seem to find the page you're looking for</h3>
<hr />

<a href="../../index.php" class="btn btn-outline-theme px-3 rounded-pill"><i class="fa fa-arrow-left me-1 ms-n1"></i> Go Back</a>
</div>

</div>

<form method="post">
<button name="btn" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i>/button>

</form>


</div>


</body>

</html>
<?php 
        if(isset($_POST["btn"]))
        {
 header("location:../../index.php");
        }
         ?>