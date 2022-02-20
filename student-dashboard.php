<?php include ("database/controller.php"); ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Dashboard</title>
    <?php include ('header/link.php')?>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="js/toastr.min.css"> -->
</head>
<body >
<!-- navbar -->



<nav class="navbar navbar-inverse navbar-fixed-top" style="background:#000888;"> 
		<div class="container-fluid">
		  <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#" data-toggle="modal" data-target="#exampleModal" style="color:#fff">SRI SUKHMANI INSTITUTE OF ENGINEERING & TECHNOLOGY</a>
		  </div>
	  
		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
        <li><a href="Apply.php" class="">APPLY NOW</a></li>
        <li><a href="javascript:void();">NOTIFICATION</a></li>
        <li><a href="javascript:void();">RESULT</a></li>
        <li><a href="javascript:void();">FEEDBACK</a></li>
			  

			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li class="dropdown">
				<a href="#" class="active dropdown-toggle text-uppercase" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo $fetch_info['firstName'] ?>&nbsp;<?php echo $fetch_info['lastName'] ?> <span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="javascript:void(0);">UPDATE PROFILE</a></li>
				  <li><a href="#">CHANGE PASSWORD</a></li>
				  <li><a href="javascript:void(0)" onclick="adminlogin()">NOTIFICATION</a></li>
				  <li role="separator" class="divider"></li>
                  <li><a href="#" data-toggle="modal" data-target="#exampleModal">LOGOUT</a></li>

				</ul>
			  </li>
			</ul>
		  </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	  </nav>


  
<style>
body
{
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
</style>
 <br><br><br>


 <div class="container">
        <div class="col-md-9 col-md-offset-1">                   
            <div class="panel panel-light" style="margin-top: 10%;">
                <div class="panel-body">
                    <div class="col-md-12" style="border: 1px solid red;">
                    <div class="row" style="margin: 20px;">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
                    <h4 class="card-title mt-3 text-center" ><p style="text-align: center;"><b><i>Now you are the member of Sri Sukhmani Institute of Engineering and Technology</i></b></p>
                    </h4>
                        <p class="divider-text">
                            <span class="bg-danger" style="border-radius: 25px;">Make sure your account is secure</span></p>
                            <br>
                            <p style="text-align:left; font-weight:bold; font-size:22px;">Name:<?php echo $fetch_info['firstName'] ?>&nbsp;<?php echo $fetch_info['lastName'] ?></p>
                            <p style="text-align:left; font-weight:bold; font-size:22px;">Email: <?php echo $fetch_info['email'] ?></p>
                            <p style="text-align:left; font-weight:bold; font-size:22px;">Mobile: <?php echo $fetch_info['mobile'] ?></p>
                            <p style="text-align:left; font-weight:bold; font-size:22px;">Registration No: <?php echo $fetch_info['Registration_No'] ?></p>
                            <p style="text-align:left; font-weight:bold; font-size:22px;">Country :<?php echo $fetch_info['country'] ?></p>
                            <p style="text-align:left; font-weight:bold; font-size:22px;">States: <?php echo $fetch_info['state'] ?></p>
                            <p style="text-align:left; font-weight:bold; font-size:22px;">Status :<?php echo $fetch_info['status'] ?></p>
                            <p style="text-align: center;"><a class="btn btn-default btn-lg"
                            style="background-color:  #ac1d16; color: #fff;" href="#"
                            data-toggle="modal" data-target="#exampleModal" >Exit Now</a></p>
                          </form></div>
                        </div>
                </div>
            </div>
        </div>
 </div>
<br><br><br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to logout ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" onclick="logout()" style="background-color: #ac1d16; color:#fff;">Logout now</button>
      </div>
    </div>
  </div>
</div>
<script src="js/toastr.min.js"></script>
  <script src="js/jquery.js"></script>
<script src="js/logout.js"></script>
 <?php include('header/footer.php')?>
 

</body>
</html>
