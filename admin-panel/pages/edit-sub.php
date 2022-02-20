<?php
session_start ();
include('../config/DbFunction.php');
 $obj=new DbFunction();
if ((isset ( $_SESSION ['login']) =="")) {
	
	header ( 'location:../index.php' );
}
else{

    $id=$_GET['subid'];
    
    $rs=$obj->showSubject1($id);
    $res=$rs->fetch_object(); 

if(isset($_POST['submit'])){
	
	$id=$_GET['subid'];
	$obj->edit_subject($_POST['sub1'],$_POST['sub2'],$_POST['sub3'],$_POST['udate'],$id);
		
}
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

	<title>Edit Courses</title>
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

										<h4>Edit Subject</h4>
									</div>
								</div>
								<hr>
							</div>
						</div>
					</div>

					<div class="row justify-content-md-center">
						<div class="col-lg-12">
							<form method="post">
								<div id="wrapper">
									<div id="page-wrapper">
										<div class="row">
											<div class="col-lg-12">
												<div class="panel panel-default">
													<li class="list-group-item bg-danger text-red"> <b>EDIT SUBJECT </b>
													</li>
													<li class="list-group-item">

														<form method="post">
															<div id="wrapper">
																<div class="row">
																	<div class="col-lg-12">
																		<div class="panel panel-default">
																			<div class="panel-heading">Edit Subject
																			</div>
																			<div class="panel-body">
																				<div class="row">
																					<div class="col-lg-10">

																						<div class="form-group">
																							<div class="col-lg-4">
																								<label>Subject1</label>
																							</div>
																							<div class="col-lg-6">

																								<input
																									class="form-control"
																									name="sub1"
																									id="sub1"
																									value="<?php echo $res->sub1;?>"
																									required="required">
																							</div>

																						</div>

																						<div class="form-group">
																							<div class="col-lg-4">
																								<label>Subject2</label>
																							</div>
																							<div class="col-lg-6">
																								<input
																									class="form-control"
																									name="sub2"
																									id="sub2"
																									value="<?php echo $res->sub2;?>"
																									required="required">
																							</div>
																						</div>

																						<div class="form-group">
																							<div class="col-lg-4">
																								<label>Subject3</label>
																							</div>
																							<div class="col-lg-6">
																								<input
																									class="form-control"
																									name="sub3"
																									id="sub3"
																									value="<?php echo $res->sub3;?>"
																									required="required">
																							</div>
																						</div>

																						<div class="form-group">
																							<div class="col-lg-4">
																								<label>Date</label>
																							</div>
																							<div class="col-lg-6">
																								<input
																									class="form-control"
																									value="<?php echo date('d-m-Y');?>"
																									readonly="readonly"
																									name="udate">

																							</div>
																						</div>
																					</div>

																					<div class="form-group">
																						<div class="col-lg-4">

																						</div>
																						<div class="col-lg-6">
																							<input type="submit"
																								class="btn btn-primary"
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
										</form>
										<?php include('../footer.php') ?>
							
</body>

</html>