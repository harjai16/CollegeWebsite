<?php
error_reporting(0);
include('database/db.php'); 
?>
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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board</title>
    <?php include('link.php')?>
</head>
<body>
<?php include('topbar.php')?>

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Notice</h4> 
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item" style="float: left;">
                                                            <a href="dashboard.php"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item" style="float: left;"><a
                                                                href="#!">Notice Board</a>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                
    <style>
        body{
            background-image: url(https://admission.lpu.in/downloads/607ffc209bf3a846876391_banner.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  border-top: 5px solid #f58121;
        }
        .notice
        {
            font-weight: 500;
            font-family: 'Raleway';
            
        }
        .notice_date
        {
            font-family: 'century gothic';
        }
    </style>

            <div style="border:1px solid #f58121;">
            <div class="container m-t-10">
            <h3 style="text-align: center; text-transform:uppercase; font-family:Poppins; color:#ac1d16;">Sri Sukhmani Institute of Engineering & Technology</h3>
            <hr style="border: 1px dashed #f31017;">
            <span class="notice col-md-4" >

                    <?php 
                    $noticeid=$_GET['nid'];
                    $sql = "SELECT * from tblnotice where id='$noticeid'";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0)
                    {
                    foreach($results as $result)
                    { ?>  
                         
                        <p style="font-size: larger;" class="text-center text-c-pink"><?php echo htmlentities($result->noticeDetails);?></p>
                        
                        <?php }} ?>
                      

                        </span>
                        <span class="notice_date">
                        <p class="text-right" class="text-c-orange"><strong>Notice Posting Date:</strong>
                      <?php echo htmlentities($result->postingDate);?></p>
                        </span>

<?php include('footer.php')?>
</body>
</html>