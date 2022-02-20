<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}

if(isset($_POST['submit'])){
	
	include('../config/DbFunction.php');
	// $obj=new DbFunction();
	$obj->create_course($_POST['course-short'],$_POST['course-full'],$_POST['cdate']);
	
}

?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Admission | Dashboard </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <?php include('../link.php')?>

</head>

<body>
    <?php include('../header.php')  ?>


    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-12">
                                <div class="col-lg-4 pull-right">
                                    <div class="col-lg-12">
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item" style="float: left;">
                                                    <a href="dashboard.php"> <i class="feather icon-home"></i> </a>
                                                </li>
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">Dashboard</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h5><b><?php echo strtoupper("Welcome:"." ".htmlentities($_SESSION['login']));?> </b>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- register users -->

                <div class="page-body">
                    <!-- statustic with progressbar  start -->
                    <!-- start first row -->
                    
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#" onclick="Registerstudent()">
                                    <div class="card b-l-danger business-info services m-b-80">
                                        <div class="card-header">
                                            <div class="service-header">
                                                <label class="label bg-danger">
                                                    <i class="icon-user-follow f-30 text-c-white"></i>
                                                </label>
                                                <span class="pcoded-badge label label-danger pull-right">
                                                    <?php 
                                        $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                        $con = mysqli_connect($server,$username,$password,$dbname);
                                        $sql="select count(*) as total from users";
                                        $result=mysqli_query($con,$sql);
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total'];
                                        ?>
                                                </span>
                                </a>
                            </div>
                        </div>
                        <h6 class="col">Register Student</h6>
                        <div class="card-block">
                            <p class="task-detail">
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" role="progressbar"
                                        style="width: 100%;">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>







                <div class="col-md-4">
                    <a href="#" onclick="review()">
                        <div class="card b-l-primary business-info services m-b-80">
                            <div class="card-header">
                                <div class="service-header">
                                    <label class="label bg-danger">
                                        <i class="icon-bubbles f-30 text-c-white"></i>
                                    </label>
                                    <span class="pcoded-badge label label-danger pull-right">
                                        <?php 
                                        $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                        $con = mysqli_connect($server,$username,$password,$dbname);
                                        $sql="select count(*) as total from reviews";
                                        $result=mysqli_query($con,$sql);
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total'];
                                        ?>
                                    </span>
                    </a>
                </div>
            </div>
            <h6 class="col">FeedBack</h6>
            <div class="card-block">
                <p class="task-detail">
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-primary" role="progressbar" style="width: 100%;">
                        </div>
                    </div>
            </div>
        </div>
    </div>



    <div class="col-md-4">
        <a href="#" onclick="viewcourse()">
            <div class="card b-l-info business-info services m-b-80">
                <div class="card-header">
                    <div class="service-header">
                        <label class="label bg-danger">
                            <i class="icon-book-open  f-30 text-c-white"></i>
                        </label>
                        <span class="pcoded-badge label label-danger pull-right">
                            <?php 
                                            $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                            $con = mysqli_connect($server,$username,$password,$dbname);
                                            $sql="select count(*) as total from tbl_course";
                                            $result=mysqli_query($con,$sql);
                                            $data=mysqli_fetch_assoc($result);
                                            echo $data['total'];
                                            ?>
                        </span>
        </a>
    </div>
    </div>
    <h6 class="col">Total Course</h6>
    <div class="card-block">
        <p class="task-detail">
            <div class="progress progress-xs">
                <div class="progress-bar progress-bar-info" role="progressbar" style="width: 100%;">
                </div>
            </div>
    </div>
    </div>
    </div>
    <!---------end first row------>

    <div class="card-block">
        <div class="row">
            <div class="col-md-4">
                <a href="#" onclick="addnotice()">
                    <div class="card b-l-warning business-info services m-b-80">
                        <div class="card-header">
                            <div class="service-header">
                                <label class="label bg-warning">
                                    <i class="icon-note  f-30 text-c-white"></i>
                                </label>
                                <span class="pcoded-badge label label-warning pull-right">
                                    <?php 
                                        $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                        $con = mysqli_connect($server,$username,$password,$dbname);
                                        $sql="select count(*) as total from tblnotice";
                                        $result=mysqli_query($con,$sql);
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total'];
                                        ?>
                                </span>
                </a>
            </div>
        </div>
        <h6 class="col">Public Notice</h6>
        <div class="card-block">
            <p class="task-detail">
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 100%;">
                    </div>
                </div>
        </div>
    </div>
    </div>





    <div class="col-md-4">
        <a href="manage-feedback.php">
            <div class="card b-l-primary business-info services m-b-80">
                <div class="card-header">
                    <div class="service-header">
                        <label class="label bg-warning">
                            <i class="feather icon-settings  f-30 text-c-white"></i>
                        </label>
                        <span class="pcoded-badge label label-info pull-right">
                            <?php 
                                        $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                        $con = mysqli_connect($server,$username,$password,$dbname);
                                        $sql="select count(*) as total from feedback";
                                        $result=mysqli_query($con,$sql);
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total'];
                                        ?>
                        </span>
        </a>
    </div>
    </div>
    <h6 class="col">Student Enquiry</h6>
    <div class="card-block">
        <p class="task-detail">
            <div class="progress progress-xs">
                <div class="progress-bar progress-bar-primary" role="progressbar" style="width: 100%;">
                </div>
            </div>
    </div>
    </div>
    </div>



    <div class="col-md-4">
        <a href="#" onclick="viewsubject()">
            <div class="card b-l-info business-info services m-b-80">
                <div class="card-header">
                    <div class="service-header">
                        <label class="label bg-danger">
                            <i class="icon-doc  f-30 text-c-white"></i>
                        </label>
                        <span class="pcoded-badge label label-info pull-right">
                            <?php 
                                            $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                            $con = mysqli_connect($server,$username,$password,$dbname);
                                            $sql="select count(*) as total from subject";
                                            $result=mysqli_query($con,$sql);
                                            $data=mysqli_fetch_assoc($result);
                                            echo $data['total'];
                                            ?>
                        </span>
        </a>
    </div>
    </div>
    <h6 class="col">Manage Subject</h6>
    <div class="card-block">
        <p class="task-detail">
            <div class="progress progress-xs">
                <div class="progress-bar progress-bar-info" role="progressbar" style="width: 100%;">
                </div>
            </div>
    </div>
    </div>
    </div>
    <!---------end first row------>



    <div class="col-xl-4 col-md-6">
        <div class="card statustic-progress-card">
            <div class="card-block shadow-lg">
                <div class="row align-items-center">
                    <div class="col">
                        <label class="label">
                            <i class="icon-user-unfollow  f-30 text-c-pink"></i>
                            <!-- Notice <i class="m-l-10 feather icon-arrow-up"></i> -->
                        </label>
                    </div>
                    <div class="col text-right">
                        <h5 class="text-c-pink">Rejected</h5>
                    </div>
                </div><br>
                <h6>Rejected Application</h6>
                <div class="progress m-t-15">
                    <div class="progress-bar bg-c-pink" style="width:100%">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-xl-4 col-md-6">
        <div class="card statustic-progress-card">
            <div class="card-block shadow-lg">
                <div class="row align-items-center">
                    <div class="col">
                        <label class="label">
                            <i class="icon-user-following f-30 text-c-green"></i>
                            <!-- Notice <i class="m-l-10 feather icon-arrow-up"></i> -->
                        </label>
                    </div>
                    <div class="col text-right">
                        <h5 class="text-c-green">Selected</h5>
                    </div>
                </div><br>
                <h6>Selected Application</h6>
                <div class="progress m-t-15">
                    <div class="progress-bar bg-c-green" style="width:100%">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 col-md-6">
        <div class="card statustic-progress-card">
            <div class="card-block shadow-lg">
                <div class="row align-items-center">
                    <div class="col">
                        <label class="label">
                            <i class="icon-people f-30 text-c-green"></i>
                            <!-- Notice <i class="m-l-10 feather icon-arrow-up"></i> -->
                        </label>
                    </div>
                    <div class="col text-right">
                        <h5 class="text-c-green">Pending Application</h5>
                    </div>
                </div><br>
                <h6>Pending Application</h6>
                <div class="progress m-t-15">
                    <div class="progress-bar bg-c-lite-pink" style="width:100%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- statustic with progressbar  end -->

    <!-- end -->
    <?php include('../footer.php')?>
</body>

</html>