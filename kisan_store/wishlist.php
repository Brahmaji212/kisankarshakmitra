
<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['login_status'])) {
    header('location: backend/login.php');
}

include 'backend/database.php';

// taking product id 
$product_id=$_GET['product_id'];

$username=$_SESSION['loginname'];
// retrive the product data using id to store the details in cart
$pqury="select * from products where product_id='$product_id'";
$psql=mysqli_query($dbc,$pqury) or die(mysqli_error($dbc));
$prow=mysqli_fetch_assoc($psql);

$product_name=$prow['product_name'];
$product_cat=$prow['product_category'];
$product_stock=$prow['product_stock'];
$product_img=$prow['product_img'];
$product_price=$prow['product_price'];
$quantity=1;
if($_GET['product_id']==true){
$checkqry = "select * from wishlist where  customer_email='$username'";
  $checksql = mysqli_query($dbc, $checkqry) or die(mysqli_error($dbc));
  if (mysqli_num_rows($checksql) > 0) {
      
    $checkqry1 = "select * from wishlist where  customer_email='$username' and product_id='$product_id' ";
    $checksql1 = mysqli_query($dbc, $checkqry1) or die(mysqli_error($dbc));
      if(mysqli_num_rows($checksql1) > 0){
    echo '<script>';
    echo 'alert("This product already added");';
   
    echo 'window.location.href= "wishlist.php"; 
    </script>';
  } 
 
  
  else { 

$insert="INSERT INTO `wishlist` (`product_id`,`customer_email`, `product_name`, `product_stock`, `product_img`, `product_price`)values('$product_id','$username','$product_name','$product_stock','$product_img','$product_price')";
$sqlinsert=mysqli_query($dbc,$insert) or die(mysqli_error($dbc));

  }
}
else if($product_id == true){ 
  
   
        $insert="INSERT INTO `wishlist` (`product_id`,`customer_email`, `product_name`, `product_stock`, `product_img`, `product_price`)values('$product_id','$username','$product_name','$product_stock','$product_img','$product_price')";
        $sqlinsert=mysqli_query($dbc,$insert) or die(mysqli_error($dbc));
        $qry = "select * from  wishlist where customer_email='$username'";
        $sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
        $wishllist_count=mysqli_num_rows($sql);
                            }
}
$qry = "select * from  wishlist where  `customer_email`='$username' ";

$sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));

$wishllist_count=mysqli_num_rows($sql);

if($wishllist_count == 0){
    $wish_value=$wishllist_count;
}else if($wishllist_count >0)
{
    $wish_value=$wishllist_count;
}




?> 

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo "Ksan Wishlist"; ?> </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="cart_admin/font-awesome-animation-1.1.1/package/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="css/orderstyles.css" type="text/css">


    <style>
												.dropbtn {
													background-color: #77b81e;
													color: white;
													padding: 16px;
													font-size: 16px;
													border: none;
													cursor: pointer;
												}

												.dropdown {
													position: relative;
													display: inline-block;
												}

												.dropdown-content {
													display: none;
													position: absolute;
                                                    background-color: whitesmoke;
                                                    
                                                    
													min-width: 160px;
													box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
													z-index: 1;
												}

												.dropdown-content a {
													color: black;
													padding: 12px 16px;
													text-decoration: none;
													display: block;
                                                    text-align: left;
                                                    background-color: white;
												}

												.dropdown-content a:hover {
                                                    background-color: #b5aeae;
                                                    transition-duration: 0.5s;
                                                    padding: 5px 5px 5px 5px; 
                                                    border-bottom: solid 1px green; 
												}

												.dropdown:hover .dropdown-content {
													display: block;
												}

												.dropdown:hover .dropbtn {
													background-color: #77b81e;
												}
                                                .shoping__cart__table table tbody tr td.shoping__cart__item__close span {
	                                                font-size: 22px;
                                                    font-weight: 700;
	                                                color: gray;
	                                                cursor: pointer;
                                                }
                                                .shoping__cart__table table tbody tr td.shoping__cart__total a{
                                                	font-size: 13px;
                                                	color: white;
	                                                
                                                	
                                                    
                                                    }
                                                    .shoping__cart__table table tbody tr td.shoping__cart__total i{
                                                	font-size: 13px;
                                                	color: white;
	                                                
                                                	
                                                    
                                                    }    
											</style>   

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/kkm-logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"></i><span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>???150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            
            <div class="header__top__right__auth">
                <a href="backend/logout.php"><i class="fa fa-user"></i> Logout</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a class="">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./k_contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> info@kisankarshakmitra.in</li>
                <li>Free Shipping for all Order of ???99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php include 'header.php'; ?>
    <!-- Header Section End -->


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Wishlist</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Wishlist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                        <?php if ($wishllist_count > 0) { ?>

                            <thead >
                                <tr>
                                    <th class="">Product Name</th>
                                    <th> Unit Price</th>
                                    <th>Stock Status</th>
                                    <th>Add to cart</th>
                                    <th> Remove</th>
                                </tr>
                            </thead>
                            <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                    <?php echo "<img src='cart_admin/backend/images//".$row['product_img']."'>"; ?>
                                        <h5> <?php echo $row['product_name'] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?php echo "???".$row['product_price'] ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                       <label for=""></label>
						                    <label for="status"> 
                                            <?php if($row['product_stock'] > 0) {   
                                            echo '<label style="color:green;">In Stock</label>'; }
                                            else if($row['product_stock'] == 0){
                                                echo '<label style="color:red;">Out of Stock</label>';
                                            }
                                            else if($row['product_stock'] <= 5){
                                                echo '<label style="color:red;">Hurry up, very less stock! </label>';
                                            } ?></label>
                                        
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fa fa-shopping-cart pr-2"></i> 
                                    <?php echo '<a href="shoping-cart.php?product_id='.$row['product_id'].'" title="add to cart" >Add to cart</a>  '?>
                                    </button>
                                    </td>
                                    
                                    <?php echo '<td class="shoping__cart__item__close"><a href="cart_admin/remove/remove_from_wishlist.php?id='.$row['id'].'" onClick=\'javascript: return confirm("Please confirm deletion");\'><span class="fa icon_close animated faa-bounce" ></span></a></td>';?>
                                        
                                    
                                </tr>
                                <?php } ?>
                  <?php } else { ?>
                    <p align=center style="color:#4a4a4a;">
                  <strong  > 
                    <i class="fa fa-database animated faa-horizontal"></i> <br>
                    Your wishlist is empty!!!</strong></p> <br>
            <?php } ?>   
                                <style>
                                    img {
                                             border: 1px solid #ddd;
                                             border-radius: 4px;
                                             padding: 5px;
                                             width: 200px;
                                            }
                                        strong{
                                            align-content: center;
                                        }
                                        
                                </style>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="index.php" class="primary-btn cart-btn cart-btn-right" style="color:#f1f1f1;background-color:gray;">
                            CONTINUE SHOPING</a>
                    </div>
                 
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +91 9014434468</li>
                            <li>Email: info@kisankarshakmitra.in</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="../about.html">About Us</a></li>
                            <li><a href="../services.html">Services</a></li>
                            <li><a href="../memberships.html">Membership</a></li>
                            <li><a href="../contact.html">Contact</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="https://www.facebook.com/Kisan-Karshak-Mitra-101919921948814"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/kisan_karshak_mitra/"><i class="fa fa-instagram"></i></a>
                            <a href="https://twitter.com/KisankarshakM"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/company/75733190/ "><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  Designed by Aarush Technologies
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>