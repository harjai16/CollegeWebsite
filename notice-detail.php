<?php
error_reporting(0);
include('database/db.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board</title>
</head>
<body>
    <style>
        body{
            background-image: url(https://admission.lpu.in/downloads/607ffc209bf3a846876391_banner.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  border-top: 5px solid #f58121;
        }
        .notice
        {
            text-align: justify;
            font-family: 'Raleway';
        }
        .notice_date
        {
            font-family: 'century gothic';
        }
    </style>

            <h3 style="text-align: center; text-transform:uppercase; font-family:Poppins; color:#ac1d16;">Sri Sukhmani Institute of Engineering & Technology</h3>
            <hr style="border: 1px dashed #f31017;">
            <span class="notice">
            
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
{   ?>  

                        <h3><?php echo htmlentities($result->noticeTitle);?></h3>
                        <p><?php echo htmlentities($result->noticeDetails);?></p>
                        <p><strong>Notice Posting Date:</strong>
                      <?php echo htmlentities($result->postingDate);?></p>
                      <hr style="border: 1px dashed #f31017;"/>
                        <?php }} ?>

                        </span>
                        <span class="notice_date">
    
</body>
</html>