<?php
include('database/db.php');
if(!empty($_POST["subid"])) 
{
$subid=$_POST["subid"];
$sql=$dbh->prepare("SELECT * FROM subject WHERE cfull=:subid");
$sql->execute(array(':subid' => $subid));	
?>
<option value="">Select Subject</option>
<?php
while($row =$sql->fetch())
{
?>
<option value="" ><?php echo $row["sub1"];?>+<?php echo $row["sub2"]; ?>+<?php echo $row["sub3"]; ?></option>
<?php
}
}
?>
