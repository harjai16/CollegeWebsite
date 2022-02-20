<?php 
session_start();
if(isset($_POST['submit'])){
	
	 include('../config/DbFunction.php');
	 $obj=new DbFunction();
	 $_SESSION['login']=$_POST['id'];
	 $obj->login($_POST['id'],$_POST['password']);
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
    <title>Admin Login </title>

    <?php include('../link.php');?>
    	
<style>
	 .form-control:focus {
    border-color: #222222;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6); }
    body{background: #fff;}

</style>


</head>

<body>


    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-sm-6 mt-5">
                <span id="error"></span>
                <div class="jumbotron">
                 <h3 class="text-c-green text-center text-uppercase" style="margin-top:2%;"> <u>Admin Login Panel</u></h3>
                <div class="card mt-5">
                    <form method="post" class="form-horizontal" id="login_form">
                        <!-- <div class="card-header"><h3 class="text-center">ADMIN PANEL <hr></h3></div> -->
                        <div class="card-body">                   
                            <div class="form-group">
                            <input class="form-control" placeholder="Login Id"  id="id"name="id" type="text" autofocus autocomplete="off"> 
                            </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="Password" id="password"name="password" type="password" value="">  
                            </div>
                              </div>

                             <div class="card-footer text-center">
                            <div class="form-group">
                                <button type="submit" value="login" name="submit" id="login_button" class="btn btn-success btn-user btn-block">Login</button>
                            </div>

                            <div class="form-group float-left">
                            <p><a href="/mycollege/index.php">Back to Home</a></p>
                            </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>








 <script type="text/javascript">
            
            // jQuery(function(){
            //     jQuery("#id").validate({
            //         expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
            //         message: "Should be a valid id"
            //     });
            //     jQuery("#password").validate({
            //         expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
            //         message: "Should be a valid password"
            //     });
                
            // });
        
            
            // 
            

$(document).ready(function(){

$('#login_form').parsley();

$('#login_form').on('submit', function(event){
    event.preventDefault();
    if($('#login_form').parsley().isValid())
    {
        $.ajax({
            // url:"config/DbFunction.php",
            method:"POST",
            data:$(this).serialize(),
            dataType:"JSON",
            beforeSend:function()
            {
                $('#login_button').attr('disabled', 'disabled');
                $('#login_button').val('wait...');
            },
            success:function(data)
            {
                $('#login_button').attr('disabled', false);
                if(data.error != '')
                {
                    $('#error').html(data.error);
                    $('#login_button').val('Login');
                }
                else
                {
                    window.location.href = data.url;
                }
            }
        });
    }
});

});
        </script>



</body>

</html>
