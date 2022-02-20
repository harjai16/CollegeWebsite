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

            <nav class="navbar header-navbar pcoded-header ">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index.html">
                            <span class="text-white">COLLEGE PORTAL</span>
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close">
                                            <!-- <i class="feather icon-x"></i></span> -->
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i
                                        class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
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
                                        <div class="text-danger"> </div>
                                    </div>


                                    
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <span> <b><?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?>
                                            </b><img src="../images/user.png" alt=""></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="javascript:void(0);" onclick="chanegpasswd()">
                                                <i class="feather icon-settings"></i> Change passwd
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile.php">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../logout.php">
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
                                <li class="pcoded-hasmenu pcoded-trigger">
                                    <a href="javascript:void(0)" onclick="dashboard()">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" onclick="review()">
                                        <span class="pcoded-micon"><i class="fa fa-comment-o"></i></span>
                                        <span class="pcoded-mtext">Feedback </span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                </li>


                                <!-- <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-download"></i></span>
                                        <span class="pcoded-mtext">Docs Verification </span>
                                    </a>
                                </li> -->

                                <li class="pcoded-hasmenu">
                                    <a href="manage-feedback.php">
                                        <span class="pcoded-micon"><i class="feather icon-file"></i></span>
                                        <span class="pcoded-mtext">Feedback From User </span>
                                    </a>
                                </li>

                                <!-- <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-calendar-o"></i></span>
                                        <span class="pcoded-mtext">Result</span>
                                        <span class="pcoded-badge label label-warning">NEW FEATURE</span>
                                    </a>
                                    
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="#">
                                                <span class="pcoded-mtext">Add Ressult</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="#">
                                                <span class="pcoded-mtext">Manage Result</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->

                                    <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-bullhorn"></i></span>
                                        <span class="pcoded-mtext">Notice Board</span>
                                        <span class="pcoded-badge label label-danger"> <i class="feather icon-bell"></i></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="add-notice.php">
                                                <span class="pcoded-mtext">Add Notice</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="manage-notices.php">
                                                <span class="pcoded-mtext">Manage Notice</span>
                                            </a>
                                        </li>
                                    </ul>
                                    </li>
          
                                <!-- create course -->
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                        <span class="pcoded-mtext">Course</span>
                                        <span class="pcoded-badge label label-danger"> <i class="feather icon-bell"></i></span>
                                    </a>
                                    <!-- start sub menu -->
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)" onclick="Addcource()">
                                                <span class="pcoded-mtext">Add Course</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="javascript:void(0)" onclick="viewcourse()">
                                                <span class="pcoded-mtext">Manage Course</span>
                                            </a>
                                        </li>
                                        <!-- close submenu -->
                                    </ul>
                                </li>
                              

                                <!-- Create subject -->
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-file  "></i></span>
                                        <span class="pcoded-mtext">Subject</span>
                                        <span class="pcoded-badge label label-danger"> <i class="feather icon-bell"></i></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)" onclick="Addsubject()">
                                                <span class="pcoded-mtext">Add Subject</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="javascript:void(0)" onclick="editsubject()">
                                                <span class="pcoded-mtext">Manage Subject</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="javascript:void(0)" onclick="viewsubject()">
                                                <span class="pcoded-mtext">View Subject</span>
                                            </a>
                                        </li>
                                    </ul>
                                    </li>
                            </ul>
                    </nav>

                    <!-- <div id="styleSelector">
                    </div> -->