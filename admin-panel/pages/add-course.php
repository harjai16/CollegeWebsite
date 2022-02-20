<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}

if(isset($_POST['submit'])){
	
	include('../config/DbFunction.php');
	$obj=new DbFunction();
	$obj->create_course($_POST['course-short'],$_POST['course-full'],$_POST['cdate']);
	
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
	<title>Add course</title>
	<?php include('../link.php')  ?>
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
										<h4>Add course</h4>
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
													<li class="list-group-item bg-danger text-red">
														 <b>ADD COURSE </b>
													</li>
													<li class="list-group-item">

				
                        
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
									<div class="form-group">
										<div class="col-lg-10">
											<label>Course Short Name
												<span id="" style="font-size:11px;color:red">*</span> </label>
										</div>
										<div class="col-lg-10">

											<input class="form-control" name="course-short" id="cshort"
												required="required" onblur="courseAvailability()">
											<span id="course-availability-status" style="font-size:12px;"></span> </div>

									</div>
									<div class="form-group">
										<div class="col-lg-10">
											<label>Course Full Name<span id=""
													style="font-size:11px;color:red">*</span></label>
										</div>
										<div class="col-lg-10">
											<input class="form-control" name="course-full" id="cfull"
												required="required" onblur="coursefullAvail()">
											<span id="course-status" style="font-size:12px;"></span> </div>
									</div>
									<div class="form-group">
										<div class="col-lg-10">
											<label>Creation Date</label>
										</div>
										<div class="col-lg-10">
											<input class="form-control" value="<?php echo date('d-m-Y');?>"
												readonly="readonly" name="cdate">

										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-6"><br><br>
										<input type="submit" class="btn btn-primary" name="submit"
											value="Create Course"></button>
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

	<?php include('../footer.php')  ?>
	<script>
		function courseAvailability() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "course_availability.php",
				data: 'cshort=' + $("#cshort").val(),
				type: "POST",
				success: function (data) {
					$("#course-availability-status").html(data);
					$("#loaderIcon").hide();
				},
				error: function () {}
			});
		}

		function coursefullAvail() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "course_availability.php",
				data: 'cfull=' + $("#cfull").val(),
				type: "POST",
				success: function (data) {
					$("#course-status").html(data);
					$("#loaderIcon").hide();
				},
				error: function () {}
			});
		}
	</script>
</body>
</html>