            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>Block<span>Chain</span></span><i class="mdi mdi-layers"></i></a>
                    <!-- Image logo -->
                </div>
                <div class="navbar navbar-default row justify-content-start" role="navigation">
                    <!-- Navbar-left -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>

                    </ul>
                    
                    <!-- Right(Notification) -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown user-box">
                            <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li>
                                    <h5>Hi, <?php echo ($_SESSION['login']) ?></h5>
                                </li>
                                <li><a href="change-password.php"><i class="ti-settings m-r-5"></i> Change Password</a></li>
                                <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul> <!-- end navbar-right -->
                </div><!-- end navbar -->
            </div>