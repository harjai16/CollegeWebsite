<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
} 
   
    include('../config/DbFunction.php');
    $obj=new DbFunction();
	$rs=$obj->showCourse();


	if(isset($_GET['del']))
    {
           
          $obj->del_course(intval($_GET['del']));
          
       
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

    <title>view course</title>
    <?php include('../link.php')?>
</head>

<body>
    
<?php include('../header.php')?>

      
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

                                    <h4>View Course</h4>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

            
                        
                        <div class="card">
                        <div class="card-header">
                            <h5>VIEW COURSE</h5>
                            <span>Easily you can view & update course</span>

                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="order-table" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                        <th>S No</th>
                                            <th>Short Name</th>
                                            <th>Full Name</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                        $sn=1;
                                    while($res=$rs->fetch_object()){?>	
                                        <tr class="odd gradeX">
                                            <td><?php echo $sn?></td>
                                            <td><?php echo htmlentities( strtoupper($res->cshort));?></td>
                                            <td><?php echo htmlentities(strtoupper($res->cfull));?></td>
                                            <td><?php echo htmlentities($res->cdate);?></td>
                                            <td>&nbsp;&nbsp;<a href="edit-course.php?cid=<?php echo htmlentities($res->cid);?>"><p class="fa fa-edit"></p></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="view-course.php?del=<?php echo htmlentities($res->cid); ?>"> <p class="fa fa-times-circle"></p></td>
                                            
                                        </tr>
                                        
                                    <?php $sn++;}?>   	           
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th>S No</th>
                                            <th>Short Name</th>
                                            <th>Full Name</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

    <?php include('../footer.php')?>
</body>
</html>
