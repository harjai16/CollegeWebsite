<?php
session_start();
error_reporting(0);
include('../config/config.php');
if(strlen($_SESSION['login'])==""){   
header("Location: index.php"); 
}
else{

if(isset($_REQUEST['unconfirm']))
	{
	$aeid=intval($_GET['unconfirm']);
	$memstatus=1;
	$sql = "UPDATE users SET status=:status WHERE  id=:aeid";
	$query = $dbh->prepare($sql);
	$query -> bindParam(':status',$memstatus, PDO::PARAM_STR);
	$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
	$query -> execute();
	$msg="Changes Sucessfully";
	}

	if(isset($_REQUEST['confirm']))
	{
	$aeid=intval($_GET['confirm']);
	$memstatus=0;
	$sql = "UPDATE users SET status=:status WHERE  id=:aeid";
	$query = $dbh->prepare($sql);
	$query -> bindParam(':status',$memstatus, PDO::PARAM_STR);
	$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
	$query -> execute();
	$msg="Changes Sucessfully";
	}
    if(isset($_GET['delete']))
    {
    $id=$_GET['delete'];
    $sql = "delete from feedback WHERE id=:id";
    $query = $dbh->prepare($sql);
    $query -> bindParam(':id',$id, PDO::PARAM_STR);
    $query -> execute();
    $msg="Data Deleted successfully";
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

    <title>Manage Feedback</title>

    <?php include('../link.php');?>

    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #dd3d36;
            color: #fff;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #5cb85c;
            color: #fff;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }
    </style>

</head>

<body>
    <?php include('../header.php');?>


    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-12"><div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item" style="float: left;">
                                                    <a href="dashboard.php"> <i class="feather icon-home"></i> </a>
                                                </li>
                                                <li class="breadcrumb-item" style="float: left;"><a
                                                        href="#!">FEEDBACK FROM USERS</a>
                                                </li>

                                            </ul>
                                        </div>

                                        <h4> MANAGE FEEDBACK</h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>




                    <div class="card">
                        <div class="card-header">
                            <h5>MANAGE FEEDBACK</h5>
                            <!-- <span>THIS IS THE USERS RECORD MANAGEMENT SYSTEM</span> -->

                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="order-table" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User Email</th>
                                            <th>Title</th>
                                            <th>Feedback</th>
                                            <th>Attachment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                    $reciver = 'Admin';
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
                                            <td><?php echo htmlentities($result->title);?></td>
                                            <td><?php echo htmlentities($result->feedbackdata);?></td>
                                            <td><a
                                                    href="../attachment/<?php echo htmlentities($result->attachment);?>"><?php echo htmlentities($result->attachment);?></a>
                                            </td>

                                            <td>
                                                <a href="sendreply.php?reply=<?php echo $result->sender;?>">&nbsp; <i
                                                class="fa fa-mail-reply"></i></a>&nbsp;&nbsp;
                                                
                                            </td>
                                        </tr>
                                        <?php $cnt=$cnt+1; }} ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                    <?php include('../footer.php')?>
                   
</body>

</html>
<?php }?>