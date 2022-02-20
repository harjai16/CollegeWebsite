<?php
include 'database/controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Login</title>
    <?php include ('header/link.php')?>
    <script src="student/files/extra-pages/comming-soon/js/modernizr.custom.js"></script>
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
            border-color: #000;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6);
        }
    </style>


    <!-- Loading overlay -->
    <div id="loading" class="dark-back">
        <div class="loading-bar"></div>
        <!-- <span class="loading-text opacity-0">So Excited ?</span> -->
    </div>
    <br><br><br>
    <br><br><br>


                <div class="container">
                <div class="container-fluid">
				<div class="row justify-content-md-center">
					<div class="col-sm-6 col-md-offset-3" style="border:4px solid #af1017;">
						<span id="error"></span>
				      	<div class="card">
                              <br>
				      		<form method="post" class="form-horizontal" action="" id="form2" onsubmit="return checkForm(this);">
					      		<div class="card-body">
                                  <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post" id="login_form">
                                <h4 class="card-title mt-3 text-center">Student Login System </h4>
                                <p class="divider-text">
                                    <span class="bg-danger" style="border-radius: 25px;">Make sure your account is
                                        secure</span></p>
                                <br>
                                  <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
				      			
				      				<div class="row form-group">
				      					<label class="col-sm-4 col-form-label"><b>Email / Registration</b></label>
				      					<div class="col-sm-8">
					      					<input type="text" id="divEmail" placeholder="Enter Email / Registration Number" name="email"  class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" />
					      				</div>
				      				</div>
				      				<div class="row form-group">
				      					<label class="col-sm-4 col-form-label"><b>Password</b></label>
				      					<div class="col-sm-8">
					      					<input type="password" name="password" placeholder="Enter Password" id="divPassword" class="form-control" required />
					      				</div>
				      				</div>

                                      <!-- <div class="row form-group">
                                      <label class="col-sm-4 col-form-label"><b>Captcha</b></label>
                                      <div class="col-sm-4">
                                <input name="captcha" class="form-control"  placeholder="Enter Captcha"
                                type="text"  maxlength="6" title="Please enter captcha code " id="varcode" onpaste="return false" 
                                autocomplete="off"  />
                                </div>
                        
                                  <div class="col-sm-4">
                                    <div class="row form-control">
                                    <img id="captcha" src="Captcha.php" alt="code"  title="Your captcha code"
                                    style="border-width:10px;" />
                                </div>
                                  </div> -->
                                  <br>
				      			
				      			<div class="card-footer text-center">
				      				<br />
				      				<input type="hidden" name="page" value="login" />
				      				<input type="hidden" name="action" value="check_login" />
				      				<p><input type="submit" name="btn-login" id="login_button" class="btn btn-info" value="Login" /></p>

				      				<p><a href="forget_password.php">Forget Password</a></p>
				      			</div>
				      		</form>
				      	</div>
				    </div>
				</div>
                </div>
    <?php include('header/footer.php')?>


</body>
</html>