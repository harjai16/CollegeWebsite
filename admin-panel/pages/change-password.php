
<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}

if(isset($_POST['submit'])){
	
	include('../config/DbFunction.php');
	$obj=new DbFunction();
	$obj->create_course($_POST['course-short'],$_POST['course-full'],$_POST['cdate']);
	
}

?>
<?php
include('../config/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==1)
    {   
header('location:dashboard.php');
}
else{ 
if(isset($_POST['change']))
  {
$password=$_POST['password'];
$newpassword=$_POST['newpassword'];
$loginid=$_SESSION['login'];
  $sql ="SELECT Password FROM tbl_admin where loginid=:loginid and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':loginid', $loginid, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tbl_admin set Password=:newpassword where loginid=:loginid";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':loginid', $loginid, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Your current password is wrong";  
}
}
}
?>
<title>Change passwd</title>
<?php include('../link.php') ?>
<style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
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
                                <div class="page-header-title">
                                    <div class="d-inline">

                                    <h4>Change password</h4>
                                </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>

					<div class="row justify-content">
						<div class="col-md-12">
								<div id="wrapper">
									<div id="page-wrapper">
										<div class="row">
											<div class="col-lg-10">
												<div class="panel panel-default">
													<li class="list-group-item bg-info text-red"> <b>CHANGE PASSWORD </b>
													</li>
													<li class="list-group-item">
                <form role="form" method="post" onSubmit="return valid();" name="chngpwd">
                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
             else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>            
                        <!--LOGIN PANEL START-->     
                        <!-- <div class="card-header"><h3 class="text-center">PASSWORD CHANGE <hr></h3></div> -->
                        <div class="card-body">                   
                            <div class="form-group">
                            <label>Current Password</label>
                            <input class="form-control" type="password" name="password" autocomplete="off" required  />
                            </div>
                            <div class="form-group">
                            <label>Enter Password</label>
                            <input class="form-control" type="password" name="newpassword" autocomplete="off" required  />
                            </div>

                            <div class="form-group">
                            <label>Confirm Password </label>
                            <input class="form-control"  type="password" name="confirmpassword" autocomplete="off" required  />
                            </div>
                        </div>
                             <div class="card-footer text-center">
                            <div class="form-group">   
                             <button type="submit" name="change" class="btn btn-danger">Change password </button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                                                 
                                </div>
                            </div>
                            <!-- <div id="styleSelector"> -->
                            </div>
                </div>
            </div>
        </div>
    </div>
<?php include('../footer.php')?>
