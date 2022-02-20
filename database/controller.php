<?php 
session_start();
require "database/config.php";
$errors = array();
error_reporting(0);

//if user signup button
if(isset($_POST['signup']))
{ if ($_POST["varcode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
        // echo "<script>alert('Incorrect verification code');</script>" ;
        $errors['varcode'] = "Incorrect verification code!";
    } 
        else {
//code for captach verification
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $code_feed = "012345ABCDE0123456789";
    $code_length = 6;  // Set this to be your desired code length
    $registration_no = "SSIET";
    $feed_length = strlen($code_feed);
    
    for($i = 0; $i < $code_length; $i ++) {
        $feed_selector = rand(0,$feed_length-1);
        $registration_no	 .= substr($code_feed,$feed_selector,1);
    }
     $registration_no	;


    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
        
    }
    $email_check = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
        }

    
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO users (firstName, lastName, email, mobile,  password, Registration_no, country, state, code, status)
                        values('$firstName', '$lastName', '$email', '$mobile', '$encpass', '$registration_no', '$country', '$state', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Sri Sukhmani Institute of Engineering and Technology";
            $message = " Hello! $firstName $lastName \n Email address: $email \n Registration No: $registration_no \n Your verification code $code \n \n \n Thanks for Online Registration \n Have a nice day!";
            $sender = "From: webdev016@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location:user-otp.php');  
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
                $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['firstName'] = $firstName;
                $_SESSION['lastName'] = $lastName;
                $_SESSION['email'] = $email;
                header('location: student/dashboard.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click login button
    if(isset($_POST['btn-login'])){

        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM users WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                    header('location: student/dashboard.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "You have entered Incorrect email or password!";
            }
        }else{
            $errors['email'] = "You're not a member! Click to Registration .";
        }
    }
    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM users WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE users SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "College Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: webdev016@gmail.com";
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
        $check_code = "SELECT * FROM users WHERE code = $otp_code";
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
            $update_pass = "UPDATE users SET code = $code, password = '$encpass' WHERE email = '$email'";
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
