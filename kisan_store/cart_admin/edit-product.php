<?php
error_reporting(0);
session_start();
include 'backend/database.php';
if (!isset($_SESSION['login_status'])) {
    header('location: ../../backend/logout.php');
}

if (isset($_GET['product_id']))
{
  include 'backend/database.php';
  $_SESSION['product_id']=$_GET['product_id'];
  $qry = "select * from products where product_id='".$_SESSION['product_id']."'";
  $sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
  $productcount=mysqli_num_rows($sql);
  $row=mysqli_fetch_assoc($sql);
  $username=$_SESSION['loginname'];  
}


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
    <title>Edit Product </title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->


  
 <link rel="shortcut icon" href="sidenav/images/sreeven.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/sreeven.png">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="sidenav/css/side.css" rel="stylesheet">
        <link href="sidenav/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="sidenav/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="sidenav/js/side.js"></script> 


  <style> 


</style>

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
                  <span class=" text-light"><i class="fas fa-user-circle fa-2x"></i><br>&nbsp;<strong>(<?php echo $username; ?>)</strong></span>
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

      </nav><!-- side nav ends here -->


      <main class="page-content">
        <div class="container text-dark text-center" style="background: burlywood;">
            <h1><strong>Welcome</strong></h1>
        </div>
  



    <div class="container tm-mt-big ">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="backend/update_product.php" method="POST" class="tm-edit-product-form" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      value='<?php echo $row['product_name']?> '
                      class="form-control validate"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea                    
                      class="form-control validate tm-small"
                      rows="5" name="description"
                      required
                    ><?php echo $row['product_description']?></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category" name="category"
                    >
                      <option selected> <?php echo $row['product_category']?> </option>
                      <option value="veg" name="category">Vegetable seeds</option>
                      <option value="cotton" name="category">Cotton Seeds</option>
                      <option value="flor" name="category">Floriculture Seeds</option>
                      <option value="potato" name="category">Potato Tubers</option>
                      <option value="grain" name="category">Grain Seeds</option>
                      <option value="fodder" name="category">Fodder Seeds</option>
                      <option value="oil" name="category">Oil Seeds</option>
                      <option value="pulse" name="category">Pulse Seeds</option>
                      <option value="wholesale" name="category">Wholesale</option>
                      <option value="exo" name="category">Exotic Vegetables</option>
                      <option value="spices" name="category">Tree Seeds</option>
                    </select>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            >Expire Date
                          </label>
                          <input
                            id="expire_date"
                            name="expire_date"
                            type="text"
                            value='<?php echo $row['product_exp_date']?>'
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="stock"
                            >Units In Stock
                          </label>
                          <input
                            id="stock"
                            name="stock"
                            type="text"
                            value='<?php echo $row['product_stock']?>'
                            class="form-control validate"
                          />
                        </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-edit mx-auto">
                <?php echo "<img src='backend/images//".$row['product_img']."' alt='Product image' class='img-fluid d-block mx-auto'>"; ?>  
                <!-- <img src="img/product-image.jpg" alt="Product image" class="img-fluid d-block mx-auto"> -->
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file"  name="fileInput" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="CHANGE IMAGE NOW"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>

                <div class="col-xl-13 col-lg-13 col-md-13">
                <div class="form-group mt-3 mb-3">
                  <label for="price" > Price </label>
                  <input type="text" name="price" id="price" class="form-control validate" value='<?php echo $row["product_price"] ?>' autocomplete="off">
                
                  
                
                </div>
                </div>
                
              <div class="col-14">
                <button type="submit" id='<?php echo $id; ?>' class="btn btn-primary btn-block text-uppercase">Update Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
      </main>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 large">
            Copyright &copy; <b><?php echo date("Y") ?></b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="" class="tm-footer-link">@Aarush Group</a>
        </p>
        </div>
    </footer> 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker({
          defaultDate: "10/22/2020"
        });
      });
    </script>
  </body>
</html>
