<?php 

include 'database.php';
$username=$_SESSION['loginname'];

$qurey1="select * from adminlist";
$sql1=mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
$row1=mysqli_fetch_assoc($sql1);
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