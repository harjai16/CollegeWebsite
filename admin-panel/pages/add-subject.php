<?php
session_start ();
include('../config/DbFunction.php');
	$obj=new DbFunction();
	$rs=$obj->showCourse();
	$rs1=$obj->showCourse();
if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}
  if(isset($_POST['submit'])){
	
	$obj=new DbFunction();
	
	$obj->create_subject($_POST['course-short'],$_POST['course-full'],$_POST['sub1'],$_POST['sub2'],$_POST['sub3']);	
	
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
	<title>Add Subject</title>
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

										<h4>Add Subject</h4>
									</div>
								</div>
								<hr>
							</div>
						</div>
					</div>


					<div class="row justify-content">
						<div class="col-lg-12">
							<form method="post">
								<div id="wrapper">
									<div id="page-wrapper">
										<div class="row">
											<div class="col-lg-12">
												<div class="panel panel-default">
												<li class="list-group-item bg-warning text-red"> <b>ADD SUBJECT </b> </li>
                                    			<li class="list-group-item">
													<!-- <div class="panel-heading">Add Subject</div> -->
													<div class="panel-body">
														<div class="row">
															<div class="col-lg-10">
																<div class="form-group">
																	<div class="col-lg-4">
																		<label>Course Short Name<span id=""
																				style="font-size:11px;color:Red">*</span>
																		</label>
																	</div>

																	<div class="col-lg-6">
																		<select class="form-control" name="course-short"
																			id="cshort" onchange="courseAvailability()"
																			required="required">
																			<option VALUE="">SELECT</option>
																			<?php while($res=$rs->fetch_object()){?>

																			<option
																				VALUE="<?php echo htmlentities($res->cid);?>">
																				<?php echo htmlentities($res->cshort)?>
																			</option>


																			<?php }?> </div>

																	</select>
																	<span id="course-availability-status"
																		style="font-size:12px;"></span>
																</div>
															</div>

															<div class="form-group">
																<div class="col-lg-4">
																	<label>Course Full Name<span id=""
																			style="font-size:11px;color:red">*</span></label>
																</div>
																<div class="col-lg-6">
																	<select class="form-control" name="course-full"
																		id="cfull" required="required" 
																		onchange="coursefullAvail()">
																		<option VALUE="">SELECT</option>
																		<?php while($res1=$rs1->fetch_object()){?>

																		<option
																			VALUE="<?php echo htmlentities($res1->cfull);?>">
																			<?php echo htmlentities($res1->cfull)?>
																		</option>


																		<?php }?>
																	</select>
																	<span id="course-status"
																		style="font-size:12px;"></span>
																</div>
															</div>

															<div class="form-group">
																<div class="col-lg-4">
																	<label>Subject1</label>
																</div>
																<div class="col-lg-6">
																	<input class="form-control" name="sub1">
																</div>
															</div>

															<div class="form-group">
																<div class="col-lg-4">
																	<label>Subject2</label>
																</div>
																<div class="col-lg-6">
																	<input class="form-control" name="sub2">
																</div>
															</div>
															<div class="form-group">
																<div class="col-lg-4">
																	<label>Subject3</label>
																</div>
																<div class="col-lg-6">
																	<input class="form-control" name="sub3">
																</div>
															</div>
														</div>
														<div class="form-group input-group">
															<div class="col-lg-6">
																<input type="submit" class="btn btn-primary"
																	name="submit" value="Add Subject"></button>
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

				<?php include('../footer.php')?>
				<script>
					function coursefullAvail() {
						$("#loaderIcon").show();
						jQuery.ajax({
							url: "course_availability.php",
							data: 'cfull1=' + $("#cfull").val(),
							type: "POST",
							success: function (data) {
								$("#course-status").html(data);
								$("#loaderIcon").hide();
							},
							error: function () {}
						});
					}

					function courseAvailability() {
						$("#loaderIcon").show();
						jQuery.ajax({
							url: "course_availability.php",
							data: 'cshort1=' + $("#cshort").val(),
							type: "POST",
							success: function (data) {
								$("#course-availability-status").html(data);
								$("#loaderIcon").hide();
							},
							error: function () {}
						});
					}
				</script>
				</form>
</body>

</html>