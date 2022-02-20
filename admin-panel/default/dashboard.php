<?php include ("database/ajax_action.php"); ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM registration WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $registration_no = $fetch_info['registration_no'];
        if($status == "active"){
        }
    }
}else{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Admission | Portal | Dashboard </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <?php include('link.php')?>
    
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index.html">
                            <span class="text-white">ONLINE ADMISSION PORTAL</span>
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text"  class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                   <div class="text-danger"> </div>  
                                    </div>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <span> Hello , <b><?php echo $fetch_info['firstName'] ?> </b><img src="../image/user.png" alt=""></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile.php">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="logout.php?<?php $app = base64_encode(uniqid()); echo $app; ?>">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                                        <span class="pcoded-mtext">Admission form  </span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                </li>

                                
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-share"></i></span>
                                        <span class="pcoded-mtext">Upload Docs </span>
                                    </a>
                                </li>

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-clock"></i></span>
                                        <span class="pcoded-mtext">Examination</span>
                                    </a>
                                </li>

                            

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-download"></i></span>
                                        <span class="pcoded-mtext">Result</span>
                                    </a>
                                </li>

                                
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-bell"></i></span>
                                        <span class="pcoded-mtext">Notification</span>
                                        
                                    </a>
                                </li>

                                
                            </ul>

                        </nav>
                        <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-12">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <span>Welcome Back: <?php echo $fetch_info['firstName'] ?></span>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page body start -->
                                    
                                    <!-- Page body end -->
                                                        <div class="col-sm-6">
                                                        <div class="card card-border-warning shadow-lg">
                                                            <div class="card-header">
                                                                <div class="card-title"><b> Registration Number: </b> <?php echo $registration_no?>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail" style="font-weight: bold;">You have not applied the admission. Please fill the Admission form</p>
                                                                        <div class="page-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <!-- Sticky Notes card start -->

                                                                                        <div class="progress progress-xs">
                                                                                     <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                     </div>
                                                                                    </div>
                                                                                <!-- Sticky Notes card end -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                          
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row text-center">
                                                    <div class="col-sm-12 invoice-btn-group text-center">
                                                        <button type="button"
                                                            class="btn btn-primary btn-print-invoice m-b-10 btn-sm waves-effect waves-light m-r-20">Print</button>
                                                        <button type="button"
                                                            class="btn btn-danger waves-effect m-b-10 btn-sm waves-light">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                </div>
                            </div>
                            <div id="styleSelector">
                            </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php')?>
</body>
</html>


