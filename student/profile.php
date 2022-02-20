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
    <?php include('topbar.php')?>

    <div class="content-wrapper ">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12 ">
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default m-t-10">
											<div class="panel-body bg-inverse text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h6 "><?php echo $fetch_info['firstName']?><?php echo $fetch_info['lastName']?></div>
													<div class="stat-panel-title text-uppercase">Full Name</div>
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
             


























                                                        <div class="col-sm-12">
                                                        <div class="card card-border-danger">
                                                            <div class="card-header">
                                                                <form action="#">
                                                                    <div class="col">
                                                                    <div class=" row form-group">
                                                                        <div class="col-sm-4">
                                                                            <div class="row"></div>
                                                                            <label for="firstName">Full Name: </label>
                                                                            <input type="text" class="form-control"  value="<?php echo $fetch_info['firstName'] ?> <?php echo $fetch_info['lastName'] ?>"> 
                                                                        </div></div>

                                                                        <div class=" row form-group">
                                                                        <div class="col-sm-4">
                                                                            <div class="row"></div>
                                                                            <label for="email">Email address: </label>
                                                                            <input type="text" class="form-control"  value="<?php echo $fetch_info['email'] ?>"> 
                                                                        </div></div>
                                                                    </div>

                                                                    

                                                                        <div class="col-md-4">
                                                                            <label for="mobile">Mobile: </label>
                                                                            <input type="text" name="mobile" class="form-control" value="<?php echo $fetch_info['mobile'] ?> ">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row form-group">
                                                                        <div class="col-md-4">
                                                                            <label for="Registration_No">Registration no: </label>
                                                                            <input type="text" name="Registration_No" class="form-control" value="<?php echo $fetch_info['Registration_No'] ?> ">
                                                                        </div>



                                                                        <div class="col-md-6">
                                                                            <label for="status">Status:</label>
                                                                            <select name="status" id="status" class="form-control">
                                                                                <option value="#"><?php echo $fetch_info['status'];?></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                               
                                                             </div>                                               
                                                    </div>
                                                    <div class="row text-center">
                                                    <div class="col-sm-12 invoice-btn-group text-center">
                                                        <button type="button"
                                                            class="btn btn-primary btn-print-invoice
                                                             m-b-10 btn-sm waves-effect waves-light m-r-20">Update Profile</button>
                                                        <!-- <button type="button" name="change"
                                                            class="btn btn-warning waves-effect m-b-10 btn-sm waves-light">Change</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- <div id="styleSelector">
                            </div> -->
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php')?>
</body>
</html>


