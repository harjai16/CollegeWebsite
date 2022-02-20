<?php include('../database/controller.php')?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
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
    <title>Student | Dashboard </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <?php include('link.php')?>

    <style>
        body {
            font-family: 'Monsterrat', sans-serif;
        }
    </style>

</head>

<body>
    <?php include('topbar.php')?>


    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4 style="font-family:'monsterrat', sans-serif;">Dashboard </h4>
                                <span>Home / Dashboard / Student Dashboard</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        



        <div class="tab-pane border" id="binfo" role="tabpanel">
            <!-- info card start -->
            <div class="card">
                <div class="container">
                    <div class="col m-t-20">
                        <div class="col-md-12">
                            <div class="panel panel-danger">
                                <div class="panel-body bg-inverse text-light">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number text-white h6">
                                            <marquee behavior="alternate">
                                                <p class="text-uppercase f-w-700">
                                                    Welcome to the student dashboard panel you can choose many operation
                                                    from here !!</p>
                                            </marquee>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="#" class="block-anchor btn-block footer-danger panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a> -->
                            </div>
                        </div>


                        <!-- dashboard main page -->
             <div class="content-wrapper ">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12 ">
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bg-inverse text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">1</div>
													<div class="stat-panel-title text-uppercase">Profile</div>
												</div>
											</div>
											<a href="#" class="block-anchor footer-danger btn-block panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bg-inverse text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 "> <?php 
                                        $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                        $con = mysqli_connect($server,$username,$password,$dbname);
                                        $sql="select count(*) as total from feedback";
                                        $result=mysqli_query($con,$sql);
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total'];
                                        ?></div>
													<div class="stat-panel-title text-uppercase">Feedback Messages</div>
												</div>
											</div>
											<a href="#" class="block-anchor footer-danger btn-block panel-footer">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

													<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bg-inverse text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 "> <?php 
                                        $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                        $con = mysqli_connect($server,$username,$password,$dbname);
                                        $sql="select count(*) as total from tblnotice";
                                        $result=mysqli_query($con,$sql);
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total'];
                                        ?></div>
													<div class="stat-panel-title text-uppercase">Notice Board</div>
												</div>
											</div>
											<a href="#" class="block-anchor footer-danger btn-block panel-footer">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bg-inverse text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">0</div>
													<div class="stat-panel-title text-uppercase">Deleted Users</div>
												</div>
											</div>
											<a href="#" class="block-anchor footer-danger btn-block panel-footer">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
							
								</div>
							</div>
						</div>
					</div>
				</div>
                
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card b-l-danger business-info services m-b-20">
                                        <div class="card-header">
                                            <div class="service-header">
                                                <a href="#">
                                                    <h5 class="card-header-text">
                                                        Notice For:</h5>
                                                    <h5 class="card-header-text">
                                                        <?php echo $fetch_info['firstName'] ?>
                                                        <?php echo $fetch_info['lastName'] ?> </b>
                                                    </h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">
                                                        <ul style="font-weight:bold; font-family:'Poppins'; "
                                                            class="col">

                                                            <?php 
                                            include('database/db.php'); 
                                            $sql = "SELECT * from tblnotice";
                                            $query = $dbh->prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {   ?>
                                                            <li><i class="icon-note"></i>
                                                                <a href="notice-detail.php?nid=<?php echo htmlentities($result->id);?>"
                                                                    target="_blank"><?php echo htmlentities($result->noticeTitle);?>
                                                                    <hr>

                                                            </li>
                                                            <?php }} ?>

                                                        </ul>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-danger"
                                                                role="progressbar" style="width: 100%;"
                                                                aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                </div>

                                                </p>
                                            </div>

                                            <!-- end of col-sm-8 -->
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    <!-- end of card-block -->
                                </div>
                            </div>






                            <?php include('footer.php')?>
</body>

</html>