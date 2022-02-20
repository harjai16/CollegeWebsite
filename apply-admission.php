<?php include ("database/controller.php"); ?>

<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
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
    <title>Apply Admission | Dashboard</title>
    <?php include ('header/link.php')?>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="js/toastr.min.css"> -->
</head>
<body >
<style>
body
{
  
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}


</style>
<!-- navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background:#000888;"> 
		<div class="container-fluid">
		  <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#" data-toggle="modal" data-target="#exampleModal" style="color:#fff">SRI SUKHMANI INSTITUTE OF ENGINEERING & TECHNOLOGY</a>
		  </div>
	  
		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
        <li><a href="apply-admission.php" class="active">APPLY NOW</a></li>
        <li><a href="javascript:void();">NOTIFICATION</a></li>
        <li><a href="javascript:void();">RESULT</a></li>
        <li><a href="javascript:void();">FEEDBACK</a></li>
			  

			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li class="dropdown">
				<a href="#" class="active dropdown-toggle text-uppercase" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo $fetch_info['firstName'] ?>&nbsp;<?php echo $fetch_info['lastName'] ?> <span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="javascript:void(0);">UPDATE PROFILE</a></li>
				  <li><a href="#">CHANGE PASSWORD</a></li>
				  <li><a href="javascript:void(0)" onclick="adminlogin()">NOTIFICATION</a></li>
				  <li role="separator" class="divider"></li>
                  <li><a href="#" data-toggle="modal" data-target="#exampleModal">LOGOUT</a></li>

				</ul>
			  </li>
			</ul>
		  </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	  </nav>


  

 <div class="container">
    <div class="col-md-6 col-md-offset-3">
     <p>Welcome: &nbsp;<?php echo $fetch_info['firstName'] ?>  &nbsp;<?php echo $fetch_info['lastName'] ?> </p>
     <hr style="border: 1px solid  #ac1d16;">
    </div>
 </div>

 <div class="container">
   <div class="col-md-6 col-md-offset-3">
     <div class="panel panel-primary">
       <div class="panel-heading">Admission Open 2022</div>
       <div class="panel-body">
         
         <form action="#">
         <div class="col-lg-10">
		  	<div class="form-group">
		    <div class="col-lg-6">
			<label>Select Course<span id="" style="font-size:11px;color:red">*</span>	</label>
			</div>
			<div class="col-lg-6">
      <select class="form-control" name="course-short" id="cshort" 
       onchange="showSub(this.value)" required="required" >			
      <option VALUE="">SELECT</option>
      <?php while($res=$rs->fetch_object()){?>
      <option VALUE="<?php echo htmlentities($res->cid);?>"><?php echo htmlentities($res->cshort)?></option>
      <?php }?> 
                    </select>
										</div>	
										</div>	
                    <div class="form-group">
		<div class="col-lg-4">
		<label>Select Subject<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
    <div class="form-group">
											<div class="col-lg-4">
												<label>Select Course<span id=""
														style="font-size:11px;color:red">*</span> </label>
											</div>
											<div class="col-lg-6">
												<select class="form-control" name="course-short" id="cshort"
													onchange="showSub(this.value)" required="required">
													<option VALUE="">SELECT</option>
													<?php while($res=$rs->fetch_object()){?>

													<option VALUE="<?php echo htmlentities($res->cid);?>">
														<?php echo htmlentities($res->cshort)?></option>


													<?php }?>
												</select>
											</div>

										</div>

										<br><br>

										<div class="form-group">
											<div class="col-lg-4">
												<label>Select Subject<span id=""
														style="font-size:11px;color:red">*</span></label>
											</div>
											<div class="col-lg-6">
												<input class="form-control" name="c-full" id="c-full">
												</select>
											</div>
										</div>

										<br><br>

										<div class="form-group">
											<div class="col-lg-4">
												<label>Current Session<span id=""
														style="font-size:11px;color:red">*</span></label>
											</div>
											<div class="col-lg-6">

												<input class="form-control" name="session"
													value="<?php echo htmlentities($res1->session);?>" readonly>
											</div>

											<br><br>

										</div>
										<br><br>

                    </div></div>
         </form>
       </div>
       <div class="panel-footer">&copy; 2022 <a href="#"></a></div>   <!------close footer here>
     </div>
   </div>
 </div>
<br><br><br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to logout ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" onclick="logout()" style="background-color: #ac1d16; color:#fff;">Logout now</button>
      </div>
    </div>
  </div>
</div>


<script>
function showState(val) {
    
  	$.ajax({
	type: "POST",
	url: "subject.php",
	data:'id='+val,
	success: function(data){
	  // alert(data);
		$("#state").html(data);
	}
	});
}

function showDist(val) {
    
  	$.ajax({
	type: "POST",
	url: "subject.php",
	data:'did='+val,
	success: function(data){
	  // alert(data);
		$("#dist").html(data);
	}
	});
	
}



function showSub(val) {
    
    //alert(val);
  	$.ajax({
	type: "POST",
	url: "subject.php",
	data:'cid='+val,
	success: function(data){
	  // alert(data);
		$("#c-full").val(data);
	}
	});
	
}
</script>


<script src="js/toastr.min.js"></script>
  <script src="js/jquery.js"></script>
<script src="js/logout.js"></script>
 <?php include('header/footer.php')?>
 

</body>
</html>


