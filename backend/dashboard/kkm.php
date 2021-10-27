<!------ Include the above in your HEAD tag ---------->
<!-- Developed by  -->
<?php
error_reporting(0);
session_start();
include '../database.php';
if (!isset($_SESSION['login_status'])) {
    header('location: ../adminlogin.php');
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
        <title>Sreveen&nbsp;Dashboard</title>
        <link rel="shortcut icon" href="images/sreeven.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/sreeven.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="css/side.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="js/side.js"></script>

    </head>

    <body>
        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>
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
                            <img class="img-responsive img-rounded" src="../dashboard/images/kkm-logo.png" alt="User picture">
                        </div>

                    </div>
                    <div class="text-center">
                        <span class=" text-light"><i class="fas fa-user-circle fa-2x"></i><br>&nbsp;<strong>(<?php echo $_SESSION['loginname']; ?>)</strong></span>
                    </div><br>
                    <div class="sidebar-menu">
                        <ul>
                            <li class="sidebar-dropdown">
                                <a href="../dashboard/kkm.php">
                                    <!-- <i class="far fa-meter"></i> -->
                                    <i class="fas fa-chart-line fa-9x"></i>
                                    <span>Dashboard</span>

                                </a>

                            </li>

                            <li class="sidebar-dropdown">
                                <a href="../dashboard/Agentdashboard.php">
                                    <i class="far fa-user"></i>
                                    <span>Agents</span>

                                </a>

                            </li>
                            <li class="sidebar-dropdown">
                                <a href="../dashboard/franchizedashboard.php">
                                    <i class="far fa-user"></i>
                                    <span>Franchises</span>

                                </a>

                            </li>
                            <li class="sidebar-dropdown">
                                <a href="../dashboard/employlist.php">
                                    <i class="far fa-user"></i>
                                    <span>Employees</span>
                                </a>

                            </li>
                            <li class="sidebar-dropdown">
                                <a href="../dashboard/Associatedashboard.php">
                                    <i class="far fa-user"></i>
                                    <span>Associates</span>
                                </a>
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
                                            <a href="customardashboard.php">Customer List</a>
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

            </nav>
            <!-- sidebar-wrapper  -->
            <main class="page-content">
                <div class="container text-dark text-center" style="background: burlywood;">
                    <h1><strong>Welcome</strong></h1>
                </div>

                <div class="container text-center">
                    <div class="row">
                        <img src="images/sreeven.png" alt="" style="margin: 306px 343px;">
                    </div>
                </div>
                <!-- <div class="container-fluid">
                <h2>Admin</h2>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <table class="table table-bordered col-md-8">

                            <thead>
                                <tr>
                                    <th>Admin id</th>
                                    <th>Admin Name</th>
                                    <th>password</th>
                                    <th>Remove</th>

                                </tr>
                            </thead>

                            <tr>
                                <td>4</td>
                                <td>sailaja@gmail.com</td>
                                <td>Sailu@2506</td>
                                <td><a href='removeadmin.php?id=4'>Remove</a></td>
                            </tr>
                        </table> -->
                <!-- Trigger the modal with a button -->
                <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add
                            new
                            Admin</button> -->

                <!-- Modal -->
                <!-- <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog"> -->

                <!-- Modal content-->
                <!-- <div class="modal-content">
                                    <div class="modal-header">

                                        <h4 class="modal-title">Add New Admin</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">


                                        <form method="post" action="addadmins.php" role="form">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="name"
                                                    placeholder="Admin name" pattern="[A-Za-z]+"
                                                    title="Please Enter 'Your' Name" required="">

                                            </div>
                                            <div class="form-group">

                                                <input class="form-control" type="email" name="username"
                                                    placeholder="Admin email" required="">
                                            </div>
                                            <div class="form-group">

                                                <input class="form-control" type="password" name="password"
                                                    placeholder="Admin password"
                                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                    title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                                                    required="">

                                            </div>
                                            <div class="form-group" style="text-align: center;">


                                                <input type="submit" class="btn btn-success" value="Add Admin">
                                            </div>
                                        </form>
                                    </div>

                                </div> -->

                <!-- </div>
                        </div>
                    </div>
                </div>
            </div> -->

            </main>
            <!-- page-content" -->
        </div>
        <!-- page-wrapper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

    </body>

    </html>