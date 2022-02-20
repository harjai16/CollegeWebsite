<?php include('../database/controller.php')?>
<?php include('database/db.php')?>
<?php
session_start();
ob_start();
error_reporting(0);
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
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
	
	<title>Notifications</title>
	<?php include('link.php')?>

<style>
	body{
		font-family: Helvetica;
	}
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
<?php include('topbar.php')?>


            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-12">
                                <div class="page-header-title">
                                    <div class="d-inline">

                                        <h4> Enquiry</h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>


								<div class="panel panel-default">
									<div class="panel-heading">Notification</div>
								<div class="panel-body">
								<?php if($error){?><div class="errorWrap" id="msgshow"><?php echo htmlentities($error); ?> </div><?php } 
								else if($msg){?><div class="succWrap" id="msgshow"><?php echo htmlentities($msg); ?> </div><?php }?>
								<div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="order-table" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>Message</th>
											<th>Action</th>
                                        </tr>
                                    </thead>


<?php 
$reciver = $_SESSION['login'];
$sql = "SELECT * from  feedback where reciver = (:reciver)";
$query = $dbh -> prepare($sql);
$query-> bindParam(':reciver', $reciver, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($result->sender);?></td>
											<td><?php echo htmlentities($result->feedbackdata);?></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
										
									</tbody>
                                        </div>
                                    </div></div>
								</div>
</table>
                </div>
            </div>
		<?php include('footer.php')?>
</body>
</html>
<?php } ?>