<?php 

include 'database.php';
$username=$_SESSION['loginname'];

$qurey1="select * from adminlist";
$sql1=mysqli_query($dbc, $qurey1) or die(mysqli_error($dbc));
$row1=mysqli_fetch_assoc($sql1);
$qurey2="select * from admin2list";
$sql2=mysqli_query($dbc, $qurey2) or die(mysqli_error($dbc));
$row2=mysqli_fetch_assoc($sql2);
?>

<html>
<ul>
                            <li class="sidebar-dropdown">
                                <a href="../Admin_panel/dashboard.php">
                                    <!-- <i class="far fa-meter"></i> -->
                                    <i class="fas fa-chart-line fa-9x"></i>
                                    <span>Dashboard</span>

                                </a>

                            </li>

                            <li class="sidebar-dropdown">
                                <a href="../Admin_panel/Agent_dashboard.php">
                                    <i class="far fa-user"></i>
                                    <span>Agents</span>

                                </a>

                            </li>
                            <li class="sidebar-dropdown">
                                <a href="../Admin_panel/Franchise_dashboard.php">
                                    <i class="far fa-user"></i>
                                    <span>Franchises</span>

                                </a>

                            </li>
                            <li class="sidebar-dropdown">
                                <a href="../Admin_panel/Employe_dashboard.php">
                                    <i class="far fa-user"></i>
                                    <span>Employees</span>
                                </a>

                            </li>
                            <li class="sidebar-dropdown">
                                <a href="../Admin_panel/Associate_dashboard.php">
                                    <i class="far fa-user"></i>
                                    <span>Associates</span>
                                </a>
                            </li>
                            <?php if($row1['adminemail'] == $username){ ?>
                            <li class="sidebar-dropdown">
                                <a href="#">
                                  <i class="far fa-user"></i>
                                  <span>Admins</span>
                                </a>
                                <div class="sidebar-submenu">
                                  <ul>
                                    <li>
                                      <a href="../Admin_panel/SuperAdmin_list.php">Super Admin
                  
                                      </a>
                                    </li>
                                    <li>
                                      <a href="../Admin_panel/Admindashboard.php">Admin</a>
                                    </li>
                  
                                  </ul>
                                </div>
                              </li>
                              <?php } else if($row2['admin2email'] == $username) { ?>
                            <li class="sidebar-dropdown">
                                <a href="../Admin_panel/Admindashboard.php">
                                    <i class="far fa-user"></i>
                                    <span>Admin</span>
                                </a>
                                
                            </li>
                          <?php } ?>
                            <!-- <li class="sidebar-dropdown">
                                <a href="../dashboard/approvalpending.php">
                                    <i class="far fa-user"></i>
                                    <span>Approval</span>
                                </a>
                            </li> -->
                            <li class="sidebar-dropdown">
                                <a href="#"><i class="far fa-user"></i><span>Customers</span></a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a href="customerreg.php">Customer Registration</a>
                                        </li>
                                        <li>
                                            <a href="customerlist.php">Customer List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="../dashboardlogout.php">
                                    <i class="far fa-user"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
</html>