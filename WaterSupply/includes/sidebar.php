<div class="left-side-menu">
                <div class="media user-profile mt-2 mb-2">
                    <img src="../images/Yakub.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
                    <img src="../images/Yakub.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

                    <div class="media-body">
                        <h6 class="pro-user-name mt-0 mb-0"><?php echo $_SESSION['fname']; ?></h6>
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


                            <div class="dropdown-divider"></div>

                            <a href="../logout" class="dropdown-item notify-item">
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
		                        $user=$_SESSION['user_id'];

                                $sql="SELECT m.menu_id , m.menu_name, m.menu_icon from tbl_sub_menu s  inner join tbl_menu m  on m.menu_id=s.menu_id ";
                                $sql .= "INNER JOIN tbl_previlage p ON  s.sub_menu_id = p.sub_menu_id ";
                                $sql .= "WHERE p.group_id in (SELECT group_id FROM tbl_user WHERE user_id='$user') GROUP BY m.menu_name ORDER by s.sub_menu_id";
                                $query=mysqli_query($con, $sql);
                                while($record=mysqli_fetch_array($query)){
                                    $id=$record[0];
                                    $mname = $record[1];
                                
                                
                                ?>
           

                            <li>
                                
                                <a href="javascript: void(0);">
                                    <i data-feather="<?php echo $record[2]; ?>"></i>
                                    <span> <?php echo $record[1]; ?> </span>
                                  
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level" aria-expanded="false">
                                    <?php
                                        $s="SELECT s.sub_menu_id, s.sub_menu_name, s.url from tbl_sub_menu s inner join tbl_menu m on m.menu_id=s.menu_id
                                        inner join tbl_previlage p on  s.sub_menu_id=p.sub_menu_id
                                        WHERE p.group_id in (select group_id from tbl_user where user_id='$user') and s.menu_id='$id'
                                        group by s.sub_menu_name order by s.sub_menu_id";
                                        $qu=mysqli_query($con, $s);
                                        while($re=mysqli_fetch_array($qu)){
                                            
                                        
                                    ?>
                                    <li><a href="<?php echo $re[2]; ?>"><?php echo $re[1]; ?></a></li>
			  
			
			                    <?php }?>


                                  
                                </ul>
                            </li>

                          <?php }?>     


                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>

