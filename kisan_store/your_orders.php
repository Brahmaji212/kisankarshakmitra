<?php
session_start();
error_reporting(0);
include 'backend/database.php';
if(!isset($_SESSION['login_status']))
{
    header('location: backend/login.php');
}
$qry2= "select * from order_details";
$sql2 = mysqli_query($dbc, $qry2) or die(mysqli_error($dbc));
$count=mysqli_num_rows($sql2);
$row2=mysqli_fetch_assoc($sql2);
$order_id=$row2['order_id'];
$username=$_SESSION['loginname'];

$qry= "SELECT * FROM Order_details INNER JOIN customer_cart ON order_details.user_id='$username' where Order_details.product_id=customer_cart.product_id     ";
$sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
$productcount=mysqli_num_rows($sql);


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo "Ksan Shoping-cart"; ?> </title>

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
												}

												.dropdown-content a:hover {
													background-color: #f1f1f1
												}

												.dropdown:hover .dropdown-content {
													display: block;
												}

												.dropdown:hover .dropbtn {
													background-color: #77b81e;
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
    
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> info@kisankarshakmitra.in</li>
                                <li>Free Shipping for all Order of ₹99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <!-- <a href="./index.php"><img src="img/logo.png" alt=""></a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="../k_contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                        <li class="sidebar-dropdown">
                                        
                                        <div class="dropdown">
												<a class=""><i class="fa fa-bars"></i></a>  
												<div class="dropdown-content">
													<a href="index.php"><i class="fa fa-shopping-cart animated faa-horizontal" style="color: green;"> </i> &nbsp; Store</a>
													<a href="shoping-cart.php">
                                                        <i class="fa fa-shopping-bag animated faa-horizontal" style="color: green;">
                                                      
                                                             </i> &nbsp; Shoping-cart 
                                                     </a>
                                                    </a> 
                                                    <a href="#"><i class="fa fa-heart animated faa-horizontal" style="color: green;"></i>&nbsp; Wish list  </a>
                                                    <a href="#"><i class="fa fa-opencart animated faa-horizontal" style="color: green;"></i>&nbsp; Your Orders </a>
													<a href="#"><i class="fa fa-user-circle animated faa-horizontal"style="color: green;"></i>&nbsp;  Profile </a>
													<a href="backend/logout.php"><i class="fa fa-user animated faa-horizontal" style="color: green;"></i>&nbsp; Logout  </a>
												</div>
											</div>
                                       
                                        
                                    </li>
                        </ul>
                        <!-- <div class="header__cart__price">item: <span>₹150.00</span></div> -->
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>


    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                        <?php if ($productcount > 0) { ?>

                            <thead >
                                <tr>
                                    <th class="">Product image</th>
                                    <th>Total price</th>
                                    <th>Quantity</th>
                                    <th>Booking Date</th>
                                    <th> Delivery Date</th>
                                </tr>
                            </thead>
                            <?php while ($row = mysqli_fetch_assoc($sql) and $username=$row2['user_id']) { ?>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                    <?php echo "<img src='cart_admin/backend/images//".$row['product_img']."'>"; ?>
                                        <h5> <?php echo $row['product_name'] ?></h5>
                                        <h6><?php echo $row['order_id'] ?> </h6>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?php echo "₹".$row['total_price'] ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                        
						                   				
						                    <input type="text" size="4" title="Qty" class="input" value="<?php   echo $row['quantity'];  ?>" name="input" id="input" max="29" min="0" step="1" style="text-align: center;">
                                            
                                            
                                       
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <?php echo $row['booking_date'] ?>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <?php echo $row['delivery_date'] ?>
                                    </td>
                                    
                                        
                                    
                                </tr>
                                <?php } ?>
                  <?php } else { ?>
                    <p align=center style="color:#4a4a4a;">
                  <strong  > 
                    <i class="fa fa-database animated faa-horizontal"></i> <br>
                    Your cart is empty continue shopping to add items!!!</strong></p> <br>
            <?php  } ?>   
                                <style>
                                    img {
                                             border: 1px solid #ddd;
                                             border-radius: 4px;
                                             padding: 5px;
                                             width: 150px;
                                            }
                                        strong{
                                            align-content: center;
                                        }
                                        .plus{
                                            border: transparent;
                                            border: 0%;
                                            
                                        }
                                        .plus:hover{
                                            background-color: transparent;
                                        }

                                        .minus{
                                            border:transparent;
                                        }
                                        .minus:hover{
                                            background:transparent;
                                        }
                                        .input{
                                            border: transparent;
                                        }
                                </style>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
            
        </div>
    </section>


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
