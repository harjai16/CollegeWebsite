<?php
session_start();
error_reporting(0);
include('../config/config.php');
if(strlen($_SESSION['login'])==""){   
header("Location: index.php"); 
}else{
	if(isset($_GET['reply']))
	{
	$replyto=$_GET['reply'];
	}   

	if(isset($_POST['submit']))
  {	
	$reciver=$_POST['email'];
    $message=$_POST['message'];
	$notitype='Send Message';
	$sender='Admin';
	
    $sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
    $querynoti = $dbh->prepare($sqlnoti);
	$querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
	$querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
    $querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
    $querynoti->execute();

	$sql="insert into feedback (sender, reciver, feedbackdata) values (:user,:reciver,:description)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':user', $sender, PDO::PARAM_STR);
	$query-> bindParam(':reciver', $reciver, PDO::PARAM_STR);
	$query-> bindParam(':description', $message, PDO::PARAM_STR);
    $query->execute(); 
	$msg="Feedback Send";
  }

?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Reply Users</title>
    <?php include('../link.php')?>
	

	<style>
	.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
	background: #dd3d36;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
	background: #5cb85c;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>


</head>

<body>
<?php include('../header.php')?>
        
<?php
		$sql = "SELECT * from users;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>

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

                                        <h4>REPLY USERS</h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>

	    
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group">
	<label class="col-sm-2 control-label">Email<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<input type="text" name="email" class="form-control" readonly required value="<?php echo htmlentities($replyto);?>">
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Message<span style="color:red">*</span></label>
	<div class="col-sm-6">
	<textarea name="message" class="form-control" cols="30" rows="10"></textarea>
	</div>
</div>

<input type="hidden" name="editid" class="form-control" required value="<?php echo htmlentities($result->id);?>">

<div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<button class="btn btn-primary" name="submit" type="submit">Send Reply</button>
	</div>
</div>

</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
    <?php include('../footer.php')?>
</body>
</html>
<?php }?>