<?php
session_start();
error_reporting(0);
include('../config/config.php');
if(strlen($_SESSION['login'])==""){   
header("Location: index.php"); 
}else{
//For Deleting the notice

if($_GET['id'])
{
$id=$_GET['id'];
$sql="delete from reviews where id=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
echo '<script>alert("Review deleted.")</script>';
echo "<script>window.location.href ='review.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Reviews</title>
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

                                        <h4>FEEDBACK SYSTEM</h4>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                       
                        

                        <div class="card">
                        <div class="card-header">
                            <h5>MANAGE ALL REVIEWS OR FEEDBACK</h5>
                            <span>Allow receive or delete Review</span>

                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="order-table" class="table table-striped table-bordered nowrap">
                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>id</th>
                                                                        <th>Page id</th>
                                                                        <th>Name</th>
                                                                        <th>Content</th>
                                                                        <th>Rating</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                              
                                                                <tbody>
                                                                    <?php $sql = "SELECT * from reviews";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
                                                                    <tr>
                                                                        <td><?php echo htmlentities($cnt);?></td>
                                                                        <td><?php echo htmlentities($result->id);?></td>
                                                                        <td><?php echo htmlentities($result->page_id);?>
                                                                        </td>
                                                                        <td><?php echo htmlentities($result->name);?>
                                                                        </td>
                                                                        <td><?php echo htmlentities($result->content);?>
                                                                        </td>
                                                                        <td><?php echo htmlentities($result->rating);?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="review.php?id=<?php echo htmlentities($result->id);?>"
                                                                                onclick="return confirm('Do you really want to delete review?');">
                                                                                <i class="icofont icofont-ui-delete fa-2x"
                                                                                    title="Delete this Record"
                                                                                    style="color:red;"></i> </a>

                                                                        </td>
                                                                    </tr>
                                                                    <?php $cnt=$cnt+1;}} ?>


                                                                </tbody>
  <tfoot>
                                    <tfoot>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>id</th>
                                                                        <th>Page id</th>
                                                                        <th>Name</th>
                                                                        <th>Content</th>
                                                                        <th>Rating</th>
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
<?php } ?>


