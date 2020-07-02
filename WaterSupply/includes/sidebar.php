<div class="left-side-menu">
                <div class="media user-profile mt-2 mb-2">
                    <img src="../images/Yakub.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
                    <img src="../images/Yakub.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

                    <div class="media-body">
                        <h6 class="pro-user-name mt-0 mb-0">Yakub Ahmed</h6>
                        <span class="pro-user-desc">Administrator</span>
                    </div>
                    <div class="dropdown align-self-center profile-dropdown-menu">
                        <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <span data-feather="chevron-down"></span>
                        </a>
                        <div class="dropdown-menu profile-dropdown">
                            <a href="pages-profile.html" class="dropdown-item notify-item">
                                <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                                <span>My Account</span>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                                <span>Settings</span>
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                                <span>Support</span>
                            </a>

                            <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                                <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-content">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu" class="slimscroll-menu">
                        <ul class="metismenu" id="menu-bar">
                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="index.html">
                                    <i data-feather="home"></i>
                                    <span class="badge badge-success float-right">1</span>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <?php
		                        $user=$_SESSION['member_id'];

		                        $sql="select m.mid, m.mname, menuicon from submenu s inner join menu m on m.mid=s.mid inner join privilege p on  s.subid=p.subid
                                where p.groupID in (select groupID from users where User_id='$user') group by m.mname order by s.subid";
                                $query=mysqli_query($con, $sql);
                                while($record=mysqli_fetch_array($query)){
                                    $id=$record[0];
                                
                                
                                
                                ?>
                            <li class="menu-title">General</li>
           

                            <li>
                                
                                <a href="javascript: void(0);">
                                    <i data-feather="user"></i>
                                    <span> Customer </span>
                                  
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="../customer/add">Add new</a>
                                    </li>
                                    <li>
                                        <a href="../customer/manage">Manage</a>
                                    </li>
                                  
                                </ul>
                            </li>




                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>