<?php 
session_start();
require "database/config.php";

// $template = file_get_contents("body.php");
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){

    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM registration WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);

        $code_feed = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $code_length = 10;  // Set this to be your desired code length
        $registration_no = "";
        $feed_length = strlen($code_feed);
        
        for($i = 0; $i < $code_length; $i ++) {
            $feed_selector = rand(0,$feed_length-1);
            $registration_no	 .= substr($code_feed,$feed_selector,1);
        }
         $registration_no	;
        $status = "Inactive";
        $insert_data = "INSERT INTO registration (firstName, lastName, email, mobile, password, registration_no, status)
                        values('$firstName', '$lastName', '$email', '$mobile', '$encpass', '$registration_no', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
                $info = "Successfully ! Create your account - $registration_no";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                exit();
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }

}   //if user click login button
    if(isset($_POST['btn-login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM registration WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'active'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                    header('location: student/dashboard.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "You're not yet a member! Register your account .";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM registration WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE registration SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            
            if($run_query){
                $subject = "IRCTC registration: Password recovery";
                $message = "Dear Candidate,\n
            Your Login ID is : $email \n
            Your Recovary password is : $code \n
            Regards,\n
            IRTS - Team." ;

                $sender = "From: sauravchaudhary774@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location:reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM registration WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location:new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE registration SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    // if(isset($_POST['login-now'])){
    //     header('Location: login-user.php');
    // }
?>
