<?php
include 'database/controller.php';
include('captcha-file/captcha.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Registration| Portal</title>
    <?php include ('header/link.php')?>
</head>
<body">
<?php include('header/navbar.php');?>
    <style>        
.form-control:focus {
	border-color:rgb(255,69,0);
	outline: 0;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6); }
    </style>
      <div class="container">
        <div class="col-md-6 col-md-offset-3">         
            <div class="panel panel-light" style="margin-top: 10%;">
                <div class="panel-body">
                    <div class="col-md-12" style="border: 1px solid red;">
                    <div class="row" style="margin: 20px;">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post" id="form2">
                    <h4 class="card-title mt-3 text-center" >Create your student account </h4>
                        <p class="divider-text">
                            <span class="bg-danger" style="border-radius: 25px;">Make sure your account is secure</span></p>
                            
                            <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    
                    ?>

                 <!-- This is error code while register -->
                            <div class="col-md-6">
                            <div class="form-group input-group">
                                <label for="firstName">First Name <span style="color: #ac1d16;">*</span></label> 
                                <input type="text" name="firstName" id="firstName" class="form-control text-danger" placeholder="First Name" 
                                required id="firstName" title="Please enter first name" 
                                 />
                                <small></small>
                            </div>
                            </div>

                            
                            <div class="col-md-6">
                            <div class="form-group input-group">
                                <label for="lastName">Last Name  <span style="color: #ac1d16;">*</span></label>
                                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name"
                                 required id="lastName" title="Please enter last name" 
                                required pattern="^\s*([a-zA-Z]+)\s*$">
                                <small></small>

                            </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="mobile"> Mobile Number  <span style="color: #ac1d16;">*</span></label>
                                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number"
                                    onkeypress="phoneno()" title="Please enter mobile number" maxlength="10" required />
                                    <small></small>

                                </div>
                            </div>

                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email"> Email address  <span style="color: #ac1d16;">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address"
                                    title="Please enter email address" required />
                                    <small></small>
                                </div>
                            </div>


							<div class="col-md-6">
                            <div class="form-group">
									<label for="#">Choose Country  <span style="color: #ac1d16;">*</span></label>
									<select name="country" class="form-control" id="country"  aria-describedby="basic-addon1" data-toggle="popover"
									title="Please select your country" onchange="myHome(this.value)">
									<option> Please select country</option>
									<option>India</option>
									<option>Usa</option>
									<option>Uk</option>
									<option>Russia</option>
									</select></div>
								</div>


		                    	<div class="col-md-6">
							      <div class="form-group">
									<label for="#">Choose State  <span style="color: #ac1d16;">*</span></label>
									<select name="state" class="form-control" id="states"   aria-describedby="basic-addon1" data-toggle="popover"
									title="Please select your state">
									<option>Please select state</option>
									</select></div>
								</div>
							
                      

                            
                            <div class="col-md-6">
                            <div class="form-group input-group">
                                <label for="password">Password  <span style="color: #ac1d16;">*</span></label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                                title="Please enter password" required /> <br>
                                <input type="checkbox" onclick="myFunction()"> Show Password
                                <small></small>
                            </div>
                            </div>

                            
                            <div class="col-md-6">
                            <div class="form-group input-group">
                                <label for="cpassword">Repeat Password  <span style="color: #ac1d16;">*</span></label>
                                <input type="password" name="cpassword" id="cpassword" class="form-control" 
                                placeholder="Repeat Password" title="Please enter repeat password" required /> <br>
                                <input type="checkbox" onclick="seepass()"> Show Confirm Password
                            <small></small>
                              </div>
                            </div>
                            <br>

                            <div class="col-md-5">
                                <div class="form-group ">
                                <input name="varcode" class="form-control"  placeholder="Enter Captcha" type="text"  
                                maxlength="6" title="Please enter captcha code "  style="height:35px;width:120px;text-align:center;"
                             autocomplete="off"id="varcode" onpaste="return false" 
                                autocomplete="off"  />
                                </div>
                                </div>
                                
                                <div class="col-md-5">
                                    <div style="float: left;" class="code form-control">
                                    <img id="captcha_img" src="Captcha.php" alt="code"  title="Your captcha code"
                                    style="border-width:0px;" />
                                </div>
                                </div>
                    


                            <div class="col-md-12">
                            <div class="form-group input-group">
                            <input  type="checkbox" name="rememberme" required>&nbsp;I Agree 
                            </div>
                            </div> <!--- form group//----->
                            <div class="col-md-12">
                                By clicking Submit & Continue, you agree to the <a href="#">Term &#38; Conditions</a> set out by this site. 
                                Including our cookies use.
                            </div>



                            <div class="col-md-12">
                            <div class="form-group">
                          <button type="submit" name="signup" class="btn btn-default"  style="background-color:  #ac1d16; color: #fff;">  &nbsp; Save &#38; Continue</button>
                         <button type="reset" name="reset" class="btn btn-default" style="background-color: #421c52; color:#fff;"> Remove </button>
                            </div> 
                            <hr>
                            <!--- form group//----->
                            <p class="text-center">Already account? <a href="javascript:void(0);"  onclick="info_toast()">Click here</a></p>
                            </div>
                            </form>    
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br> <br>
      <!-- Site footer -->

      <script>
          
          
      </script>


<script type="text/javascript">
    
function cap2()
{
	document.getElementById('captcha_img').src = 'captcha.php?'+ Math.random();
	document.getElementById('captcha').value = '';
	return false;
}


$(document).ready(function () {
      $('input[type=text]').bind('cut copy paste', function (e) {
         alert("You cannot copy,paste or cut text into this textbox!");
		 e.preventDefault();
      });
   });
</script>

<?php include('header/footer.php')?>


</body>
</html>