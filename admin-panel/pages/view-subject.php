<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
} 
   
    include('../config/DbFunction.php');
    $obj=new DbFunction();
	$rs=$obj->showSubject();


	if(isset($_GET['del']))
    {
           
          $obj->del_subject(intval($_GET['del']));
          
       
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

    <title>View subject</title>
    <?php include('../link.php') ?>

</head>

<body>

    <?php include('../header.php') ?>
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

                                        <h4>View Subject</h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class="card">
    <div class="card-header">
        <h5>VIEW COURSES</h5>
        <span>Edit cources manually </span>

    </div>
    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="order-table" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>S No</th>
                        <th>Subject1</th>
                        <th>Subject2</th>
                        <th>Subject3</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    $sn=1;
                    while($res=$rs->fetch_object()){?>
                    <tr class="odd gradeX">
                        <td><?php echo $sn?></td>
                        <td><?php echo htmlentities( strtoupper($res->sub1));?>
                        </td>
                        <td><?php echo htmlentities(strtoupper($res->sub2));?>
                        </td>
                        <td><?php echo htmlentities(strtoupper($res->sub3));?>
                        </td>
                        <td>&nbsp;&nbsp;<a href="edit-sub.php?sid=<?php echo htmlentities($res->subid);?>">
                                <p class="fa fa-edit"></p>
                            </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="view-subject.php?del=<?php echo htmlentities($res->subid); ?>">
                                <p class="fa fa-times-circle"></p>
                        </td>

                    </tr>

                    <?php $sn++;}?>
                </tbody>
                <tbody>

                <tfoot>
                    <tfoot>
                        <tr>
                            <th>S No</th>
                            <th>Subject1</th>
                            <th>Subject2</th>
                            <th>Subject3</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
            </table>
        </div>
    </div>
</div>
<?php include('../footer.php') ?>

</body>
</html>




<div class="card-block">
                                                        <div class="table-responsive dt-responsive">
                                                            <table id="dt-ajax-object"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Extn.</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Extn.</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Ajax data source (objects) table end -->
                                                <!-- Nested object data (objects) table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Nested Object Data (objects)</h5>
                                                        <span>The example below shows DataTables loading data for a
                                                            table from arrays as the data source, where the structure of
                                                            the row's data source in this example is:</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive dt-responsive">
                                                            <table id="dt-nested-object"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Extn.</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Extn.</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>


