<?php
session_start();
error_reporting(0);
include('../config/config.php');
if(strlen($_SESSION['login'])==""){  
    header("Location: index.php");
     }else{
if(isset($_POST['submit']))
{
$ntitle=$_POST['noticetitle'];
$ndetails=$_POST['noticedetails']; 
$sql="INSERT INTO  tblnotice(noticeTitle,noticeDetails) VALUES(:ntitle,:ndetails)";
$query = $dbh->prepare($sql);
$query->bindParam(':ntitle',$ntitle,PDO::PARAM_STR);
$query->bindParam(':ndetails',$ndetails,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
// $msg="Notice Add Successfully!";
echo "<script>window.location.href ='manage-notices.php'</script>";
}else {
// echo '<script>alert("Something went wrong. Please try again.")</script>';
$error="Something went wrong. Please try again."; 
}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Notice</title>
    <?php include('../link.php') ?>
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }
    </style>
</head>
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

                                    <h4>Add Notice</h4>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
						<div class="col-lg-12">
								<div id="wrapper">
									<div id="page-wrapper">
										<div class="row">
											<div class="col-lg-12">
												<div class="panel panel-default">
													<li class="list-group-item bg-warning text-red">
                                                         <b>ADD NOTICE </b>
                                                    
													</li>
													<li class="list-group-item">

					                  
                                <form method="post" enctype="multipart/form-data" >
                                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>            
                
                                <div class="card-body">                   
                               <div class="form-group">
                                    <div class="form-group has-success">
                                        <label for="success" class="control-label">Notice Title</label>
                                        <div class="">
                                            <input type="text" name="noticetitle" class="form-control"
                                                 id="noticetitle" required>
                                        </div>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="success" class="control-label">Notice Details</label>
                                        <div class="">
                                            <textarea class="form-control" name="noticedetails" 
                                                rows="5" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group has-success">
                                        <div class="">
                                            <button type="submit" name="submit"
                                                class="btn btn-success btn-labeled">Submit <span
                                                    class="btn-label btn-label-right"><i
                                                        class="fa fa-check"></i></span></button>
                                         </div>
                                        </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-8 col-md-offset-2 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            </section>
            <!-- /.section -->

        </div>
        <!-- /.main-page -->

    </div>
    <!-- /.content-container -->
</div>
<!-- /.content-wrapper -->

</div>
<!-- /.main-wrapper -->

<!-- ========== COMMON JS FILES ========== -->
<?php include('../footer.php')?>
<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>

</html>
<?php  } ?>

