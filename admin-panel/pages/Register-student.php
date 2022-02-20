<?php
session_start();
error_reporting(0);
include('../config/config.php');
if( strlen($_SESSION['login'])=='')
    {   
header('location:dashboard.php');
}
else{ 

// code for block student    
if(isset($_GET['inid']))
{
$id=$_GET['inid'];
$Activity=0;
$sql = "update users set Activity=:Activity  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':Activity',$Activity, PDO::PARAM_STR);
$query -> execute();
header('location:Register-student.php');
}




//code for active students
if(isset($_GET['id']))
{
$id=$_GET['id'];
$Activity=1;
$sql = "update users set Activity=:Activity  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':Activity',$Activity, PDO::PARAM_STR);
$query -> execute();
header('location:Register-student.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>View Students</title>
    <?php include('../link.php') ?>


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
                                <div class="page-header-title">
                                    <div class="d-inline">

                                        <h4> Student Records</h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>




                    <div class="card">
                        <div class="card-header">
                            <h5>STUDENT DATA</h5>
                            <span>THIS IS THE USERS RECORD MANAGEMENT SYSTEM</span>

                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="order-table" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email id </th>
                                            <th>Mobile</th>
                                            <th>Registration </th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sql = "SELECT * from users";
                                        $query = $dbh -> prepare($sql);
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt=1;
                                        if($query->rowCount() > 0)
                                        {
                                        foreach($results as $result)
                                        { ?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo htmlentities($cnt);?></td>
                                            <td class="center"><?php echo htmlentities($result->firstName);?></td>
                                            <td class="center"><?php echo htmlentities($result->lastName);?></td>
                                            <td class="center"><?php echo htmlentities($result->email);?></td>
                                            <td class="center"><?php echo htmlentities($result->mobile);?></td>
                                            <td class="center"><?php echo htmlentities($result->Registration_No);?></td>
                                            <td class="center"><?php if($result->Activity==1)
                                            {
                                                echo htmlentities("Active");
                                            } else {

                                            echo htmlentities("Blocked ");
                                            }
                                            ?></td>
                                            <td class="center">
                                                <?php if($result->Activity==1)
                                            {?>
                                                <a href="Register-student.php?inid=<?php echo htmlentities($result->id);?>"
                                                    onclick="return confirm('Are you sure you want to block this student?');"" >  <button class="
                                                    btn btn-danger"> Inactive</button>
                                                    <?php } else {?>

                                                    <a href="Register-student.php?id=<?php echo htmlentities($result->id);?>"
                                                        onclick="return confirm('Are you sure you want to active this student?');""><button class="
                                                        btn btn-primary"> Active</button>
                                                        <a href="Edit-student.php?id=<?php echo htmlentities($result->id);?>"  onclick="return confirm('Are you sure you want to Modify this student?');"">Edit Student</a>
                                                        <?php } ?>

                                            </td>
                                        </tr>
                                        <?php $cnt=$cnt+1;}} ?>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>


                    <?php include('../footer.php')  ?>

</body>

</html>
<?php } ?>