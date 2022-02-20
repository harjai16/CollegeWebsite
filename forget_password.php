<?php
include 'database/controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot | Portal</title>
    <?php include ('header/link.php')?>
</head>

<body>
    <?php include('header/navbar.php');?>
    <style>
        body{
            font-family: 'Open sans';
        }
    </style>
    <style>
        .form-control:focus {
            border-color: rgb(255, 69, 0);
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6);
        }
    </style>


    <br><br><br>
    <br><br><br>


                <div class="container">
                <div class="container-fluid">
				<div class="row justify-content-md-center">
					<div class="col-sm-6 col-md-offset-3" style="border:4px solid #af1017;">
						<span id="error"></span>
				      	<div class="card">
                              <br>
				      		<form method="post" class="form-horizontal" action="" id="login_form">
					      		<div class="card-body">
                                  <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post" id="login_form">
                                <h4 class="card-title mt-3 text-center">Student Login System </h4>
                                <p class="divider-text">
                                    <span class="bg-danger" style="border-radius: 25px;">Make sure your account is
                                        secure</span></p>
                                <br>	
				      				<div class="row form-group">
				      					<label class="col-sm-4 col-form-label"><b>Email Address</b></label>
				      					<div class="col-sm-8">
					      					<input type="email" name="email" id="email" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" />
					      				</div>
				      				</div>
                                      <input type="hidden" name="page" value="login" />
				      				<input type="hidden" name="action" value="check_login" />
				      				<p><input type="submit" name="btn-login" id="login_button" class="btn btn-primary" value="Login" /></p>

				      			</div>
				      		</form>
				      	</div>
				    </div>
				</div>
                </div>



    <?php include('header/footer.php')?>


</body>
</html>

