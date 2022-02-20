<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Contact </title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/interior.css">
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<!--fav-icon-->
<link rel="shortcut icon" href="images/favicon.png"/>
</head>

<body>
  <style>
    body
    {
      background-color: #e9eff5;
    }
  </style>
    <section class="main" style="background-image: url(images/hero-bg.png);">

        <nav>
            <a href="index.php" class="logo">
                <!-- <img src="images/ptu_logo.png" width="150px" /> -->
                <h4 style="text-transform: uppercase;font-family:Raleway,sans-serif; color:#6f0000;">Sri Sukhmani
         Institute of Engineering & Technology</h4>
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <ul class="menu" style="border-radius: 5px;">
            <li><a href="javascript:void(0);" onclick="homepage()">Home</a></li>
                <li><a href="pdf/College_admission.pdf">About</a></li>
                <li><a href="javascript:void()" onclick="notify()">Notification</a></li>
                <li><a href="javascript:void()" onclick="notify()">Results</a></li>
                <li><a href="javascript:void()" onclick="notify()">courses</a></li>
                <li><a class="active" href="#">contact</a></li>
                <li><a href="Register.php">Register Now</a></li>
                <li><a  onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius: 5px; cursor: pointer;">Login</a></li>
            </ul>
        </nav>
       
       

        <!--main-content-->
        <div class="home-content">
            
            <!--text-->
            <div class="home-text" >
                
                <h3 style="color: white; letter-spacing: 3px;">Welcome to Sri Sukhmani Institute of Engineering & Technology</h3>
                <h1 style="color: white;"> Student Portal</h1>
                <p style="color: white;">The purpose of Schools is to prepare students with promise
                    to enhance their intellectual, physical, social, emotional, spiritual,
                    and artistic growth so that they may realize their power for good
                    as citizens</p>
            <!--login-btn-->
            <a href="#" class="main-login" style="border-radius: 5px;">Apply Now</a>
            </div>
            <!--img-->
            <div class="home-img" style="width: 700px; border:2px dashed #6f0000; ">
                <img src="images/college.jpg" width="500px" style="text-shadow: 20px 22px;"/>
              
            </div>
        </div>
        
        <!--arrow-->
        <!-- <div class="arrow"></div>
        <span class="scroll">Scroll</span> -->
    </section>
    <!--services----------------------->
    <section class="services">
      
      <div style="border: 1px dashed #000; font-weight:bold">

      <marquee width="100%"  behavior=alternate onmouseover="this.stop();"
                onmouseout="this.start();">
                <a href="#" style="color: #000989; ">Welcome to college admission management system.</a> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="notice-detail.php?<?php echo rand(999,111)?>" style="color: #000989; text-align:center">Admission notice for Diploma / Degree / BCA / MCA</a> 
                    </marquee>       
      </div>
        <!--heading----------->
        <div class="services-heading">
            <h2>CONTACT OUR COLLEGE </h2>
            <i><b>Find our way</b></i>
        </div>
        <!--box-container----------------->
        <div class="box-container">
            <!--box-1-------->
            <div class="box">
                <img src="images/location.png">
                <font>Contact</font>
                <p>&#9742; +91 8527946030</p>
                <p>Address: Saraswati Vihar, Dera Bassi, Punjab 140507</p>
                <a href="#">Contact Now</a>
            </div>
            <!--box-4-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Computer Science</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua.</p>
                <!--btn--------->
                <a href="#">Apply Now</a>
            </div>

            <div class="box">
                <img src="images/icon5.png">
                <font>Computer Science</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua.</p>
                <!--btn--------->
                <a href="#">Apply Now</a>
            </div>
            
            <div class="box">
                <img src="images/icon5.png">
                <font>Computer Science</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua.</p>
                <!--btn--------->
                <a href="#">Apply Now</a>
            </div>
            
            <div class="box">
                <img src="images/icon5.png">
                <font>Computer Science</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua.</p>
                <!--btn--------->
                <a href="#" >Apply Now</a>
            </div>
            

        </div>
    </section>
    
    <!--footer------------->

  <!--footer------------->
  <footer style="background-color: skyblue;">
    <p>Copyright &copy; - 2022 | Developed By <a href="#" style="font-size: 20px; font-weight:bold;">Ashwani </br> <p">&hearts;&hearts;</p> </a> </p>
  </footer>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
          <script>
          function notify()
        {
            window.location.href = 'underwork.php';
        }
          

          // home page location
          function homepage()
          {
            window.loacation = "index.php";
          }
        </script>

<script>
         function homepage(){
            window.location.href = 'index.php';
  
         };
         
      </script>


</body>

</html>
