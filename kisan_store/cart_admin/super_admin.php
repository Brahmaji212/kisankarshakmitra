<?php
error_reporting(0);
session_start();
include 'backend/database.php';
if (!isset($_SESSION['login_status'])) {
    header('location: ../../backend/logout.php');
}
$qry = "select * from cart_super_admin";
$sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
$admincount=mysqli_num_rows($sql);

$username= $_SESSION['loginname'];



$qry1 = "select * from cart_admin";
$sql1 = mysqli_query($dbc, $qry1) or die(mysqli_error($dbc));
$super_admincount=mysqli_num_rows($sql1);
$row1=mysqli_fetch_assoc($sql1);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Super Admin</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!-- for animating  -->
    <link rel="stylesheet" href="font-awesome-animation-1.1.1/package/css/font-awesome-animation.min.css">
    

    <link rel="apple-touch-icon" href="sidenav/images/sreeven.png">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="sidenav/css/side.css" rel="stylesheet">
        <link href="sidenav/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="sidenav/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="sidenav/js/side.js"></script>
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
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
                                <a href="#">
                                    <i class="far fa-user"></i>
                                    <span>Associates</span>
                                </a>
                            </li>
                           <?php if(!$row1['email'] == $username){ ?>
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
                            <li class="sidebar-dropdown">
                                <a href="#"><i class="far fa-user"></i><span>Customers</span></a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a href="#">Customer Registration</a>
                                        </li>
                                        <li>
                                            <a href="#">Customer List</a>
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

            </nav>

            <main class="page-content">
                <div class="container text-dark text-center" style="background: burlywood;">
                    <h1><strong >Welcome</strong></h1>
                </div>

    <div class=" mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-15 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
          <form action="remove/remove_multiple_superadmin.php" method="POST" >
            <div class="tm-product-table-container">
              
              <table class="table table-hover tm-table-small tm-product-table">
              <?php if ($admincount > 0) { ?>
                
                <thead>
                  <tr align="center">
                    <th scope="col">SELECT</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">EMAIL ADDRESS</th>
                    <!-- <th scope="col">PHONE NUMBER</th> -->
                    <!-- <th scope="col">EXPIRE DATE</th>  -->
                    <th scope="col">Remove</th>
                  </tr>
                </thead>
                
                <?php while ($row = mysqli_fetch_assoc($sql)) { 
                  // $_SESSION['user_id']=$row['user_id'];
                  ?>
                <tbody>
                
                  <tr align="center">
                    <th scope="row"><input type="checkbox" name='checkbox[]' value='<?php echo $row["id"]; ?>' id="checkbox"/></th>
                    <td class="tm-product-name"><?php echo $row['name'] ?> </td>
                    <td><?php echo $row['email']  ?></td>
                    <!-- <td>  //echo $row['phone'] ?> -->
                    <!-- <td>  //echo $row['product_exp_date'] </td> -->
                    <?php echo "<td>
                      <a href='remove/remove_superadmin.php?id=" . $row['id'] . "' class='tm-product-delete-link' onClick=\"javascript: return confirm('Please confirm deletion');\">
                        <i class='far fa-trash-alt tm-product-delete-icon' ></i>
                       
                      </a> 
                    </td>"?>
                  </tr>
                  <?php } ?>
                  <?php } else { ?>
              <p align=center style="color:rgb(188 189 155);"><strong  > <i class="fas fa-database faa-horizontal animated"></i> <br>No Data Available!!!</strong></p> <br>
            <?php } ?>
                              <style>
                                    img {
                                             border: 1px solid #ddd;
                                             border-radius: 4px;
                                             padding: 5px;
                                             width: 150px;
                                            }
                                        
                                       
                                </style>
                </tbody>
                
              </table>
             
            
            </div>
            <!-- table container -->
            <input type="submit" name="submit" id="submit" value="Delete Selected Admins " class="btn btn-primary btn-block text-uppercase" onClick="javascript: return confirm('Please confirm deletion');">
            
            </form> 

<!-- for adding new super admin -->

            &nbsp;                            
         
            <button type="button" name="submit" id="submit" value="Add New Admin" data-toggle="modal"  data-target="#myModal" class="btn btn-primary btn-block text-uppercase" >Add New Admin</button>
           
  

            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">

                    <h4 class="modal-title">Add New Cart Admin</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">


                    <form method="post" action="adds/add_superadmin.php" role="form">
                      <div class="form-group mb-3">
                        <input class="form-control validation" type="text" name="adminname" placeholder="Admin name" title="Please Enter 'Your' Name"  required="">

                      </div>
                      <div class="form-group">

                        <input class="form-control" type="email" name="adminemail" placeholder="Admin email" required="">
                      </div>
                      <div class="form-group">

                        <input class="form-control" type="password" name="adminpassword" placeholder="Admin password" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required="">

                      </div>
                      <div class="form-group">
                        <input class="form-control" type="password" name="cnfadminpass" placeholder="Confirm Your password" title="Must contain Same mentioned Password" required>
                      </div>
                      <div class="form-group" style="text-align: center;">
                        <input type="submit" class="btn btn-primary btn-block text-uppercase" value="Add Admin">
                      </div>
                    </form>
                  </div>

                </div>

              </div>
            </div>
            <!-- ending of add admin  -->
     
          </div>
        </div>
      </div>
    </div>
                                          </main>

          <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 large">
          Copyright &copy; <b><?php echo date("Y") ?></b> All rights reserved. 
          
          Design: <a rel="nofollow noopener" href="#" class="tm-footer-link">Aarush Group</a>
        </p>
      </div>
    </footer>




        </div>
        
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "";
        });
      });
    </script>
  </body>
</html>