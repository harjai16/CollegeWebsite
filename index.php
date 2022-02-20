<?php
date_default_timezone_set("Asia/Manila"); //timezone set
$now = date('F d, Y'); //get current date based from timezone set  //date('F j, Y  h:i:s a') --- Full Date
@$date = $_POST['dateinput']; // date input
if($_SERVER["REQUEST_METHOD"] == "POST" and !empty($date)){
    
  list($monthofdate, $dayofdate, $yearofdate) = explode(' ', $date); // divide date input into month, day, year
  list($monthofnow, $dayofnow, $yearofnow) = explode(' ', $now); // divide today's date into month, day, year

  // convert worded month into number
  $newmonthofdate = date('m', strtotime($monthofdate)); 
  $newmonthofnow = date('m', strtotime($monthofnow));
  $newdayofdate = substr($dayofdate,0,2);
  $newdayofnow = substr($dayofnow,0,2);

  $start_date = new DateTime($date);
  $since_start = $start_date->diff(new DateTime($now)); // compare date input from today's date
  $yearold = $since_start->y; // get year from output
  $monthold = $since_start->m;// get month from output
  $dayold = $since_start->d;// get day from output
}
?>
<!doctype html>
<html>
<?php
error_reporting(0);
include('database/db.php'); 
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <title>Engineering & Technology</title>
  <?php include ('header/link.php')?>

<body onload="startTime()">
  <style>
                            .articiles-sec {
                            margin: 28px 0 0 0;
                            border: 2px solid #f1f1f1;
                            background: #fff;
                            width: 100%;
                            border-radius: 7px;
                            padding-right: 20px;
                        }
                        
                        .articiles-sec .article {
                            background: #d33a16;
                            float: left;
                            width: 168px;
                            text-align: center;
                            border-radius: 7px 0 0 7px;
                        }
                        
                        .articiles-sec .article h4 {
                            color: #fff;
                            font-size: 21px;
                            line-height: 50px;
                            margin-top: 0;
                            margin-bottom: 0px;
                        }
                        
                        .articiles-sec .article h4 a {
                            text-decoration: none;
                            color: #fff;
                            
                        }
                        
                        .articiles-sec ul {
                            padding-right: 10px;
                            float: left;
                            margin-bottom: 0px;
                            width: 100%;
                            font-size: 13px;
                            padding-top: 11px;
                        }
                        
                        .articiles-sec ul li {
                            display: inline-block;
                            margin-left: 20px;
       
                        }
                        
                        marquee ul li {
                            padding-right: 20px;
                            /* float: left; */
                            display: inline-block;
                        }
                        
                        .articiles-sec ul li a {
                            text-decoration: none;
                        }
                        
  </style>
  <?php include('header/navbar.php');?>

  <br><br><br><br>

  <div class="header">
  <div id="clockdate">
          <div class="clockdate-wrapper container call-sec pull-left">
            <div id="clock"></div>
            <div id="date"><?php echo date('l, F j, Y'); ?></div>
          </div>
        </div>
    <div class="container" style="background-color: #000;width:100%">
      <div class="call-sec" style="text-shadow: 0.5px 0.1px #000;">
        For Online Portal Related Query - 7217608853
        <div class="product-items"><a href="#"><a href="#">Download Admission Receipt</a>||
            <a href="#" target="_blank">Examination Receipt</a> || <br>
            <a href="#">Download Registration Receipt</a>&nbsp; || &nbsp; <a href="#">Payment</a> &nbsp;||
        </div>
      </div>
    </div>
    <hr style="border: 1px solid  #ac1d16;">
  </div>




  <section id="page-title">
    <div class="container clearfix">
      <ol class="breadcrumb hidden-xs">
        <li><a href="index.php">Home</a></li>
        <li>About College &amp; Branches Information</li>
      </ol>
    </div>
  </section>
  <section id="information">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-jui panel-login" style="box-shadow: 0px 10px 10px 1px #ddd;">
            <div class="panel-heading">
              <div class="panel-title text-center" style="font-weight:500; text-shadow:0.5px 0.4px #652b7c;">
                SRI SUKHMANI INSTITUTE OF ENGINEERING & TECHNOLOGY ADMISSION OPEN
              </div>
              <hr style="border: 1px solid #ac1d16;">
            </div>
            <div class="panel-body text-danger text-justify ">
              <ul style="list-style: none;">
                <p style="color: red">
                  <!--<strong>  New registration open for students -->
                  <strong>Sri Sukhmani Institute of Engineering & Technology (SSIET), Dera Bassi
                    is affiliated to Punjab Technical University.
                    <br>
                    <br>
                    Start Date: 28<sup>th</sup> January 2022
                    <br>
                    Closing Date: 20<sup>th</sup> February 2022 </strong>
                </p>
                <li>

                </li><br>
                <li style="font-weight:700">
                  Sri Sukhmani Institute of Engineering and Technology offers full time B.Tech in Electrical Engineering
                </li><br>
                <hr>
                <li>Student registering on the admission portal shall be considered for all merit based courses
                  for all colleges, subject to the eligibility. Please read bulletin of information for
                  details.
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- close information of college -->



        <div class="col-md-6">
          <div class="panel panel-jui panel-login" style="box-shadow: 0px 10px 10px 1px #ddd;">
            <div class="panel-heading">
              <div class="panel-title text-center" style="font-weight:500; text-shadow:0.5px 0.4px #ac1d16;">
                ABOUT BRANCH </div>
              <hr style="border: 1px solid #ac1d16;">
            </div>
            <div class="panel-body text-danger text-justify ">
              <p>
                <a class="btn btn-default" style="background-color:  #ac1d16; color: #fff;" data-toggle="collapse"
                  href="#collapsecomputer" role="button" aria-expanded="false" aria-controls="collapsecomputer">
                  Computer Engineer's &nbsp;>>
                </a>

                <a class="btn btn-default" style="background-color:  #ac1d16; color: #fff;" data-toggle="collapse"
                  href="#collapseelectrical" role="button" aria-expanded="false" aria-controls="collapseelectrical">
                  Electrical Engineer's &nbsp;>>
                </a>
              </p>
              <div class="collapse" id="collapsecomputer">
                <div class="card card-body">
                  <h4><u>Computer Engineering</u></h4>
                  Computer engineering refers to the study that integrates electronic engineering with
                  computer sciences to design and develop computer systems and other technological devices.
                  Computer engineering professionals have expertise in a variety of diverse areas such as
                  software design, electronic engineering and integrating software and hardware.
                  Computer engineering allows professionals to engage in a number of areas such as
                  analyzing and designing anything from simple microprocessors to highly featured
                  circuits, software design, and operating system development. Computer engineering
                  is not limited to operating computer systems but is aimed at creating a broad way
                  to design more comprehensive technological solutions. <br>
                  <img src="./images/computer.jpg" alt="square" width="400px">
                </div>
              </div>
              <!-- 2nd branches -->
              <p>

              </p>
              <div class="collapse" id="collapseelectrical">
                <div class="card card-body">
                  <h4><u>Electrical Engineering</u></h4>
                  <p style="font-weight:500;">
                    Electrical engineering is an engineering discipline concerned with the study,
                    design, and application of equipment, devices, and systems which use electricity,
                    electronics, and electromagnetism. It emerged as an identifiable occupation in the latter
                    half of the 19th century after commercialization
                    of the electric telegraph, the telephone, and electrical power generation, distribution,
                    and use.
                  </p>


                </div>

                <!-- close second -->
              </div>
              <!-- accordance close -->
            </div>
          </div>


          <div class="col-md-12">
                    <div class="panel panel-jui panel-login" style="box-shadow: 0px 10px 10px 1px #ddd;">
                        <div class="panel-heading">
                            <div class="panel-title text-center"
                                style="font-weight:500; text-shadow:0.5px 0.5px #652b7c;">
                                
                            </div>
                            <hr style="border: 1px solid #ac1d16;">
                        </div>
                        <div class="panel-body">
                            <img src="./images/ssiet.jpg" width="500px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
  </section>




  <div class="container">
                <div class="articiles-sec">
                    <div class="row">
                        <div class="col-md-2 col-xs-4 col-sm-5">
                            <div class="article">
                                <h4 title=" "><a href="#">News</a></h4>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-8 col-sm-7">
                            <marquee direction="left" scrollamount="5" onMouseOver="this.stop()" onMouseOut="this.start()">
                                <ul>
                                <li>
                                <?php $sql = "SELECT * from tblnotice";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0)
                    {
                    foreach($results as $result)
                    {   ?> 
              <a style="color: #000; text-shadow:0.9px 0.5px #652b7c; font-size:medium; text-decoration:none;" href="notice-detail.php?nid=<?php echo htmlentities($result->id);?>"
                  target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo htmlentities($result->noticeTitle);?>&nbsp;
              <?php }} ?>
                                </ul>
                                </li>
                            </marquee>

                        </div>
                    </div>
                </div>
            </div>

  <!-- left image -->
  <div class="left_img">
    <img alt="img" class="dotted_img" src="images/leftimg.png">
  </div>

  <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top </button> -->
  <img src="./images/top.png" alt="" width="50px" onclick="topFunction()" id="myBtn" title="Go to top">
  <br><br><br>
  <?php include('header/footer.php')?>
  <!-- close footer -->


  <script>
    function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
  </script>

  <style>
#clockdate{
  float:left;
}
.clockdate-wrapper {
    background-color: #000;
    padding:30px;
    max-width:170px;
    width:100%;
    text-align:center;
  height:30px;
}
#clock{
    background-color:#000;
    font-family: sans-serif;
    font-size:20px;
    text-shadow:0px 0px 1px #000;
    color:#fff;
  margin:-10px 0 -5px 0;
}
#clock span {
  color:#888;
  text-shadow:0px 0px 1px #000;
  font-size:12px;
  position:relative;
  top:-7px;
}
#date {
    font-size:9px;
    font-family:arial,sans-serif;
    color:#fff;
  margin-top:-20px 0 -10px 0;
}

  </style>
</body>

</html>
