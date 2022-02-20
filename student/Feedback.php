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
if(isset($_POST['submit']))
  {	
    $file = $_FILES['attachment']['name'];
	$file_loc = $_FILES['attachment']['tmp_name'];
	$folder="attachment/";
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);
	
	
	$title=$_POST['title'];
    $description=$_POST['description'];
	$user=$_SESSION['email'];
	$reciver= 'Admin';
    $notitype='Send Feedback';
    $attachment=' ';

	if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$attachment=$final_file;
		}
	$notireciver = 'Admin';
    $sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
    $querynoti = $dbh->prepare($sqlnoti);
	$querynoti-> bindParam(':notiuser', $user, PDO::PARAM_STR);
	$querynoti-> bindParam(':notireciver', $notireciver, PDO::PARAM_STR);
    $querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
    $querynoti->execute();

	$sql="insert into feedback (sender, reciver, title,feedbackdata,attachment) values (:user,:reciver,:title,:description,:attachment)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':user', $user, PDO::PARAM_STR);
	$query-> bindParam(':reciver', $reciver, PDO::PARAM_STR);
	$query-> bindParam(':title', $title, PDO::PARAM_STR);
	$query-> bindParam(':description', $description, PDO::PARAM_STR);
	$query-> bindParam(':attachment', $attachment, PDO::PARAM_STR);
    $query->execute(); 
	$msg="Feedback Send";
}    
}
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Student | Dashboard </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <?php include('link.php')?>

    <style>
        body {
            font-family: Poppins;
        }

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
    <?php include('topbar.php')?>


    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4 style="font-family:'monsterrat', sans-serif;">Give us Feedback </h4>
                                <span>Dashboard - Feedback</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card b-l-danger business-info services m-20">
            <div class="card-header"><span style="color: red;">******* Ask Query / Enquiry / Related : Admission / Update any else. </span> <br>
                <hr>
            </div>
            <form action="#" method="post">


                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?>
                </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

                <div class="col">
                    <div class="col-md-12">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <input type="hidden" name="user" class="form-control"
                                        value="<?php echo $fetch_info['email']?>">
                                    <div class=" row form-group">
                                        <label class="col-sm-2 control-label">Title<span
                                                style="color:red">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="title" class="form-control" required>
                                        </div>

                                        <label class="col-sm-2 control-label">Attachment<span
                                                style="color:red"></span></label>
                                        <div class="col-sm-4">
                                            <input type="file" name="attachment" class="form-control">
                                            <!-- <input type="file" name="attachment" id="file" multiple="multiple"
                                                required> -->
                                        </div>
                                    </div>

                                    <div class=" row form-group">
                                        <label class="col-sm-2 control-label">Description<span
                                                style="color:red">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" name="description"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-primary" name="submit" type="submit">Send</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </form>
    </div>
    </div>
    
    <?php include('footer.php')?>
    <script type="text/javascript">
				 $(document).ready(function () {          
					setTimeout(function() {
						$('.succWrap').slideUp("slow");
					}, 3000);
					});
	</script>

</body>

</html>