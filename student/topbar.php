    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="dashboard.php">
                            <span class="text-white">SRI SUKHMANI INSTITUTE  TECHNOLOGY</span>
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container">
                        <ul class="nav-left">
                        <!-- <i class="feather icon-bell"></i> -->
                            <!-- <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text"  class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li> -->
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell f-20"></i>
                                        <label class="badge label-danger"> <?php 
                                            $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                            $con = mysqli_connect($server,$username,$password,$dbname);
                                            $sql="select count(*) as total from tblnotice";
                                            $result=mysqli_query($con,$sql);
                                            $data=mysqli_fetch_assoc($result);
                                            echo $data['total'];
                                            ?></label>
                                        <!-- <span class="badge bg-c-pink">5</span> -->
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6><hr>
                                            <!-- <label class="label label-danger">
                                            <?php 
                                            $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                            $con = mysqli_connect($server,$username,$password,$dbname);
                                            $sql="select count(*) as total from tblnotice";
                                            $result=mysqli_query($con,$sql);
                                            $data=mysqli_fetch_assoc($result);
                                            echo $data['total'];
                                            ?>
                                            </label> -->
                                        </li>
                                           
                                        <li class="col" style="font-weight: bold; font-family:'Raleway'">
                                        <?php 
                                            include('database/db.php'); 
                                            $sql = "SELECT * from tblnotice";
                                            $query = $dbh->prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {   ?>
                                            <p>
                                            <?php echo htmlentities($result->noticeTitle);?>
                                            </p>
                                      
                                        <?php }} ?>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                   <div class="text-danger"> </div>  
                                    </div>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <span> Hello , <b><?php echo $fetch_info['firstName'] ?> </b>
                                        <img src="../admin-panel/images/user.png" alt=""></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="change-password.php">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile.php">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="logout.php?<?php $app = base64_encode(uniqid()); echo $app; ?>">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)" onclick="dashboard()">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>

                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" onclick="admissionForm()">
                                            <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                                            <span class="pcoded-mtext">Admission form  </span>
                                            <span class="pcoded-badge label label-warning"> <?php 
                                        $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                        $con = mysqli_connect($server,$username,$password,$dbname);
                                        $sql="select count(*) as total from application";
                                        $result=mysqli_query($con,$sql);
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total'];
                                        ?></span>
                                        </a>
                                    </li>

                                    
                                    <!-- <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="feather icon-share"></i></span>
                                            <span class="pcoded-mtext">Upload Docs </span>
                                        </a>
                                    </li> -->

                                    <li class="pcoded-hasmenu">
                                        <a href="Feedback.php">
                                            <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                                            <span class="pcoded-mtext">Feedback</span>
                                        </a>
                                    </li>

                                

                                    <!-- <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="feather icon-search"></i></span>
                                            <span class="pcoded-mtext">Search Application</span>
                                        </a>
                                    </li> -->

                                    <li class="pcoded-hasmenu">
                                        <a href="notification.php">
                                            <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                                            <span class="pcoded-mtext">Enquiry</span>
                                        </a>
                                    </li>

                                    
                                    <li class="pcoded-hasmenu">
                                        <a>
                                            <span class="pcoded-micon"><i class="feather icon-bell"></i></span>
                                            <span class="pcoded-mtext">Public Notice</span>
                                            <span class="pcoded-badge label label-warning">
                                            <?php 
                                            $server="localhost"; $username= "root"; $password=""; $dbname="college-portal";
                                            $con = mysqli_connect($server,$username,$password,$dbname);
                                            $sql="select count(*) as total from tblnotice";
                                            $result=mysqli_query($con,$sql);
                                            $data=mysqli_fetch_assoc($result);
                                            echo $data['total'];
                                            ?>
                                            
                                            </span>

                                        </a>
                                    </li>

                                
                            </ul>

                        </nav>
                        <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                           