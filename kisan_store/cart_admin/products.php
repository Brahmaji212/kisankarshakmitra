<?php
error_reporting(0);
session_start();
include 'backend/database.php';
if (!isset($_SESSION['login_status'])) {
    header('location: ../../backend/logout.php');
}
$qry = "select * from products";
$sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
$productcount=mysqli_num_rows($sql);

$username=$_SESSION['loginname'];

$qry1 = "select * from cart_super_admin";
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
    <title>Products</title>
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
    <link rel="stylesheet" href="font-awesome-animation-1.1.1/package/css/font-awesome-animation.min.css">



    <link rel="shortcut icon" href="images/sreeven.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/sreeven.png">
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
                            <?php if($row1['email'] == $username){ ?>
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



    <form action="remove/remove_mutiple_products.php" method="POST" >
    <div class="container mt-4">
      <div class="row tm-content-row">
        
      <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
        
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
            
              <table class="table table-hover tm-table-small tm-product-table">
              <?php if ($productcount > 0) { ?> 
                <thead>
                  <tr align="center">
                    <th scope="col">SELECT</th>
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">UNIT SOLD</th>
                    <th scope="col">IN STOCK</th>
                    <th scope="col">EXPIRE DATE</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">REMOVE</th>
                    <th scope="col">EDIT</th>
                  </tr>
                </thead>
               
                <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
                <tbody>
                
                  <tr align="center">
                    <th scope="row"><input type="checkbox"  name="checkbox[]" value=' <?php echo $row["product_id"] ?>' id="checkbox"/></th>
                    <td class="tm-product-name"><?php echo $row['product_name'] ?> </td>
                    <td><?php echo $row['unit_sold'] ?></td>
                    <td> <?php echo $row['product_stock'] ?></td>
                    <td> <?php echo $row['product_exp_date'] ?></td>
                    <td> <?php echo "₹".$row['product_price'] ?></td>
                    <?php echo "<td>
                      <a href='remove/remove_product.php?id=" . $row['product_id'] . "' class='tm-product-delete-link' onClick=\"javascript: return confirm('Please confirm deletion');\">
                        <i class='far fa-trash-alt tm-product-delete-icon' ></i>
                       
                      </a> 
                    </td>"?>
                   <?php echo '<td><a style="color:white;" href="edit-product.php?product_id='.$row['product_id'].'"><i class="fa fa-edit" ></i></a></td>';?>
                  </tr>
                  <?php } ?>
                  <?php } else { ?>
                  <p align=center style="color:rgb(188 189 155);">
                  <strong  > 
                    <i class="fas fa-database faa-horizontal animated " ></i> <br>
                    No Data Available!!!</strong></p> <br>
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
            <a
              href="add-product.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
            <button class="btn btn-primary btn-block text-uppercase" type="submit" name="submit" id="submit" onClick="javascript: return confirm('Please confirm deletion');">
              Delete selected products
            </button>
          
          </div>
      
        </div>
        
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                  <tr>
                    <td class="tm-product-name">Product Category 1</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 2</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 3</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 4</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 5</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 6</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 7</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 8</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 9</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 10</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="tm-product-name">Product Category 11</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="#"
              class="btn btn-primary btn-block text-uppercase mb-3">Add New Category</a>
          </div>
        </div>
      </div>
    </div>
    </form>
    </main>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 large">
          Copyright &copy; <b><?php  echo date("Y"); ?></b> All rights reserved. 
          
          Design: <a rel="nofollow noopener" href="" class="tm-footer-link"><b>Aarush Group</b></a>
        </p>
      </div>
    </footer>

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