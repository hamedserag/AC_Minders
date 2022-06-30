            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <style>
                        .sidebarUser{
                            margin: 20px;
                            color: #fff;
                            font-weight: bold;
                        }
                    </style>
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Navigation</li>

                            <?php
                            $query = mysqli_query($con, "SELECT `id`, `name` FROM `users` WHERE 1");
                            while ($result = mysqli_fetch_array($query)) {
                                echo ("<li class='sidebarUser'>" . $result['name'] . "</li>");
                            }
                            ?>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>