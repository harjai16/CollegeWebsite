<?php
session_start ();
include('../config/DbFunction.php');
 $obj=new DbFunction();
if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}

    $id=$_GET['cid'];
   
    $rs=$obj->showCourse1($id);
    $res=$rs->fetch_object(); 

if(isset($_POST['submit'])){
	
	 // echo  $id=$_GET['cid'];exit;
		//echo $_POST['course-short'].$_POST['course-full'].$_POST['udate'].$id;exit;
	$obj->edit_course($_POST['course-short'],$_POST['course-full'],$_POST['udate'],$id);
	
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
	<title>Edit course</title>
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

										<h4>EDIT COURSE</h4>
									</div>
								</div>
								<hr>
							</div>
						</div>
					</div>



					<form action="#" method="POST">
						<div class="row justify-content">
							<div class="col-sm-9">
					
									<section class="section">
										<div class="container-fluid">

											<div class="row">
												<div class="col-lg-12">
													<div class="panel panel-default">
													<li class="list-group-item bg-success text-red"> <b>EDIT COURSE </b>
													</li>
													<li class="list-group-item">
														<div class="panel-body">
															<div class="row">
																<div class="col-lg-12">

																	<div class="form-group">
																		<div class="col-lg-4">
																			<label>Course Short Name<span id=""
																					style="font-size:11px;color:red">*</span>
																			</label>
																		</div>
																		<div class="col-lg-6">

																			<input class="form-control"
																				name="course-short" id="cshort"
																				value="<?php echo $res->cshort;?>"
																				required="required"
																				onblur="courseAvailability()">
																			<span id="course-availability-status"
																				style="font-size:12px;"></span> </div>

																	</div>

																	<div class="form-group">
																		<div class="col-lg-4">
																			<label>Course Full Name<span id=""
																					style="font-size:11px;color:red">*</span></label>
																		</div>
																		<div class="col-lg-6">
																			<input class="form-control"
																				name="course-full" id="cfull"
																				value="<?php echo $res->cfull;?>"
																				required="required"
																				onblur="coursefullAvail()">
																			<span id="course-status"
																				style="font-size:12px;"></span>
																		</div>
																	</div>

																	<div class="form-group">
																		<div class="col-lg-4">
																			<label>Date</label>
																		</div>
																		<div class="col-lg-6">
																			<input class="form-control"
																				value="<?php echo date('d-m-Y');?>"
																				readonly="readonly" name="udate">

																		</div>
																	</div>
																</div>

																<div class="form-group">
																	<div class="col-lg-12">
																		<input type="submit" class="btn btn-success"
																			name="submit"
																			value="Update Course"></button>
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


						</div>

						<?php include('../footer.php') ?>
						<script>
							function courseAvailability() {

								jQuery.ajax({
									url: "course_availability.php",
									data: 'cshort=' + $("#cshort").val(),
									type: "POST",
									success: function (data) {
										$("#course-availability-status").html(data);


									},
									error: function () {}
								});
							}

							function coursefullAvail() {

								jQuery.ajax({
									url: "course_availability.php",
									data: 'cfull=' + $("#cfull").val(),
									type: "POST",
									success: function (data) {
										$("#course-status").html(data);


									},
									error: function () {}
								});
							}
						</script>
					</form>
</body>

</html>