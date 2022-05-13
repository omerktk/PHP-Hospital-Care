<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/hud/layout_fixed_footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 21:15:58 GMT -->

<!-- Mirrored from localhost:44358/home/Dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Dec 2021 21:48:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>Hospital System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
  <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/user-interface-216/24/link_interface-512.png"  sizes="16x16">
    <link href="../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../assets/css/app.min.css" rel="stylesheet" />



    <link href="../assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />

</head>
<body>

    <div id="app" class="app app-footer-fixed">

        <div id="header" class="app-header">

            <div class="desktop-toggler">
                <button type="button" class="menu-toggler">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>


            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>


            <div class="brand">
                <a href="../index.php" class="brand-logo">
                   
                    <span class="brand-text ">Hospital Management System</span>
                </a>
            </div>


            <div class="menu">

                <div class="menu-item dropdown dropdown-mobile-full">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                        <div class="menu-img online">
                                                    <img src="../assets/img/user/profile.jpg" height="60px" />                            
                        </div>
                        <div class="menu-text d-sm-block d-none">
                            <span>

                                <?php 
                                if(isset($_SESSION["docid"]))
                                {
                                         echo  $_SESSION["docname"];
                                 }
                                  
                                 ?>


   

                            </span>
                        </div>
                    </a>
                    <?php 
   
if(!isset($_SESSION["adminid"]))
{
    echo ' <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
                        <a class="dropdown-item d-flex align-items-center" href="profile.php">PROFILE <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center" href="logout.php">LOGOUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
                    </div>';
}
else

{
     echo ' <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
                   
                        <a class="dropdown-item d-flex align-items-center" href="logout.php">LOGOUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
                    </div>';
}
?>
                   
                </div>
            </div>


            <form class="menu-search" method="POST" name="header_search_form">
                <div class="menu-search-container">
                    <div class="menu-search-icon"><i class="bi bi-search"></i></div>
                    <div class="menu-search-input">
                        <input type="text" class="form-control form-control-lg" placeholder="Search menu..." />
                    </div>
                    <div class="menu-search-icon">
                        <a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
                    </div>
                </div>
            </form>

        </div>


        <div id="sidebar" class="app-sidebar">

            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

                <div class="menu" style="font-size: 17px;">
                    <div class="menu-header">Navigation</div>
                    <div class="menu-item 
                    <?php
                    
if($page == 1 )
{
echo'active';
}

                ?>">
                        <a href="Dashboard.php" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </div>
                    
                    <div class="menu-item 
                    <?php
                    
if($page == 3 )
{
echo'active';
}

                ?>">
                        <a href="Patients.php" class="menu-link">
                            <span class="menu-icon"><i class="fas fa-user"></i></span>
                            <span class="menu-text">Patients</span>
                        </a>
                    </div>
                    
                   <div class="menu-item 
                    <?php
                    
if($page == 4 )
{
echo'active';
}

                ?>">
                        <a href="Appointments.php" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-collection"></i></span>
                            <span class="menu-text">Appointments</span>
                        </a>
                    </div>
                 
                   

                    <div class="menu-item 
                    <?php
                    
if($page == 2 )
{
echo'active';
}

                ?>">
                        <a href="profile.php" class="menu-link">
                            <span class="menu-icon"><i class="fas fa-user-md"></i></span>
                            <span class="menu-text">My Profile</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>


        <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>


        <div id="content" class="app-content">


