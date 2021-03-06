<?php
error_reporting(0);
session_start();
include '../../backend/database.php';
if (!isset($_SESSION['login_status'])) {
    header('location: ../../backend/cart_admin_login.html');
}
$username=$_SESSION['loginname'];

$qry = "select * from cart_admin where email='$username'";
$sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));


$row = mysqli_fetch_assoc($sql);


$qry1 = "select * from cart_super_admin where email='$username'";
$sql1 = mysqli_query($dbc, $qry1) or die(mysqli_error($dbc));
$super_admincount=mysqli_num_rows($sql1);
$row1=mysqli_fetch_assoc($sql1);

$qry2= "select * from order_details";
$sql2 = mysqli_query($dbc, $qry2) or die(mysqli_error($dbc));
$count=mysqli_num_rows($sql2);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin-Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="font-awesome-animation-1.1.1/package/css/font-awesome-animation.min.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
    <link rel="shortcut icon" href="images/sreeven.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/sreeven.png">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="sidenav/css/side.css" rel="stylesheet">
        <link href="sidenav/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="sidenav/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="sidenav/js/side.js"></script>


</head>

<body id="reportsPage">
<div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>
<!-- side_nav starts from here -->

    <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="#"></a>
                        <div id="close-sidebar">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <div class="sidebar-header">
                        <div class="user-pic">
                            <img class="img-responsive img-rounded" src="sidenav/images/kkm-logo.png" alt="User picture">
                        </div>

                    </div>
                    <div class="text-center">
                        <span class=" text-light"><i class="fas fa-user-circle fa-2x"></i><br>&nbsp;<strong>(<?php echo $_SESSION['loginname']; ?>)</strong></span>
                    </div><br>
                    <div class="sidebar-menu">
                        <ul>
                            <li class="sidebar-dropdown">
                                <a href="index.php">
                                    <!-- <i class="far fa-meter"></i> -->
                                    <i class="fas fa-chart-line fa-9x"></i>
                                    <span>Dashboard</span>

                                </a>

                            </li>

                            <li class="sidebar-dropdown">
                                <a href="products.php">
                                <i class="fab fa-product-hunt"></i>
                                    <span>Products</span>

                                </a>

                            </li>
                            <li class="sidebar-dropdown">
                                <a href="Regusers.php">
                                <i class="fas fa-users"></i>
                                    <span>Registered Users</span>

                                </a>

                            </li>
                            <li class="sidebar-dropdown">
                                <a href="accounts.php">
                                    <i class="fas fa-user-circle"></i>
                                    <span>Accounts</span>
                                </a>

                            </li>
                            <li class="sidebar-dropdown">
                                <a href="../SuperAdmin/SuperAdmin_Associate.php">
                                    <i class="far fa-user"></i>
                                    <span>Associates</span>
                                </a>
                            </li>
                            <?php if($row1['email']== $username){ ?>
                            <li class="sidebar-dropdown">
                                <a href="#">
                                <i class="fas fa-user-shield"></i>
                                    <span>Super Admin</span>
                                </a>
                                <div class="sidebar-submenu">
                                <ul>
                                  <li>
                                      <a href="super_admin.php">Super Admin
                                        </a>
                                  </li>
                                  <li>
                                      <a href="Regadmins.php">Admin</a>
                                  </li>
                                </ul>
                                </div>
                            </li>
                         <?php } else { ?>
                            <li class="sidebar-dropdown">
                                <a href="Regadmins.php">
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
                                            <a href="SuperAdmin_customerreg.php">Customer Registration</a>
                                        </li>
                                        <li>
                                            <a href="SuperAdmin_customerlist.php">Customer List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="../backend/logout.php">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>

            </nav><!-- side nav ends here -->

        
        <main class="page-content">
        
        <div class="container text-dark text-center" style="background: burlywood;">
                    <h1><strong>Welcome</strong></h1>
                </div>


        



<!-- main page content starts from here -->

        
        
            <div class="row">
                <div class="col">
                    <p class="text-white mt-2 mb-2" style="text-align: right;"> <b style="color: #455c71;">Welcome &nbsp;<?php echo "<strong>".$row['name']." ".$row1['name']."</strong>"; ?></b></p>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">Latest Hits</h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">Performance</h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller">
                        <h2 class="tm-block-title">Storage Information</h2>
                        <div id="pieChartContainer">
                            <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                        </div>                        
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                        <h2 class="tm-block-title">Notification List</h2>
                        <div class="tm-notification-items">
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Jessica</b> and <b>6 others</b> sent you new <a href="#"
                                            class="tm-notification-link">product updates</a>. Check new orders.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Oliver Too</b> and <b>6 others</b> sent you existing <a href="#"
                                            class="tm-notification-link">product updates</a>. Read more reports.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Victoria</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">order updates</a>. Read order information.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Laura Cute</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product records</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Samantha</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">order stuffs</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Sophie</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Lily A</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Amara</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Cinthela</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Orders List</h2>
                        <?php if($count>0){ ?>
                        <table class="table">
                            <thead>
                                <tr align="center">
                                    <th scope="col">ORDER ID.</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">PRODUCT ID</th>
                                    <th scope="col">ADDRESS</th>
                                    <th scope="col">PAYMENT METHOD</th>
                                    <th scope="col">BOOKING DATE</th>
                                    <th scope="col">EST DELIVERY DUE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row2=mysqli_fetch_assoc($sql2)){ ?>
                                <tr align="center">
                                    <th scope="row"><b><?php echo $row2['order_id'] ?></b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div><?php echo $row2['status'] ?></td>
                                    <td><b> <?php echo $row2['product_id'] ?> </b></td>
                                    <td><b><?php echo $row2['address1'] ?></b></td>
                                    <td><b><?php echo $row2['payment_method'] ?></b></td>
                                    <td><?php echo $row2['booking_date'] ?></td>
                                    <td><?php echo $row2['delivery_date'] ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } else{ ?>
                            <p align=center style="color:rgb(199 189 155);">
                  <strong  > 
                    <i class="fas fa-database faa-horizontal animated " ></i> <br>
                    Orders Not Yet Booked!</strong></p> <br>
            <?php } ?>
                    </div>
                </div>
            </div>
       
        </main>
    <!-- main page content ends here -->
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 large">
                    Copyright &copy; <b> <?php echo date("Y"); ?></b> All rights reserved. 
                    
                    Design: <a rel="nofollow noopener" href="" class="tm-footer-link">Aarush Group</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>