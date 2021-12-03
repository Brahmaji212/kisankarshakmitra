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
$product_des=$prow['product_description'];
$product_cat=$prow['product_category'];
$product_exp=$prow['product_exp_date'];
$product_stock=$prow['product_stock'];
$product_img=$prow['product_img'];
$product_price=$prow['product_price'];
$total_price=$prow['product_price']*1;
$quantity=1;
if(isset($_GET['quantity']))
{
    $quantity=$_GET['quantity'];
}
if($_GET['product_id']==true){
$checkqry = "select * from customer_cart where  customer_email='$username'";
  $checksql = mysqli_query($dbc, $checkqry) or die(mysqli_error($dbc));
  if (mysqli_num_rows($checksql) > 0) {
      
    $checkqry1 = "select * from customer_cart where  customer_email='$username' and product_id='$product_id' and `Delete`='0'";
    $checksql1 = mysqli_query($dbc, $checkqry1) or die(mysqli_error($dbc));
      if(mysqli_num_rows($checksql1) > 0){
    echo '<script>';
    echo 'alert("This item already in cart");';
   
    echo 'window.location.href= "shoping-cart.php"; 
    </script>';
  } 
 
  
  else { 

$insert="INSERT INTO `customer_cart` (`product_id`,`customer_email`, `product_name`, `product_description`, `product_category`, `product_exp_date`, `product_stock`, `product_img`, `product_price`,`quantity`,`total_price`,`Delete`)values('$product_id','$username','$product_name','$product_des','$product_cat','$product_exp','$product_stock','$product_img','$product_price','$quantity','$total_price','false')";
$sqlinsert=mysqli_query($dbc,$insert) or die(mysqli_error($dbc));

  }
}
else if($product_id == true){ 
  
   
        $insert="INSERT INTO `customer_cart` (`product_id`,`customer_email`, `product_name`, `product_description`, `product_category`, `product_exp_date`, `product_stock`, `product_img`, `product_price`,`quantity`,`total_price`,`Delete`)values('$product_id','$username','$product_name','$product_des','$product_cat','$product_exp','$product_stock','$product_img','$product_price','$quantity','$total_price','false')";
        $sqlinsert=mysqli_query($dbc,$insert) or die(mysqli_error($dbc));
        $qry = "select * from  customer_cart where customer_email='$username'";
        $sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
        $productcount=mysqli_num_rows($sql);
                            }
}
$qry = "select * from  customer_cart where  `customer_email`='$username' and `Delete`='0'";

$sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));

$productcount=mysqli_num_rows($sql);

if($productcount == 0){
    $cart_value=$productcount;
}else if($productcount >0)
{
    $cart_value=$productcount;
}

$qry2 = "select * from  wishlist where  `customer_email`='$username'";

$sql2 = mysqli_query($dbc, $qry2) or die(mysqli_error($dbc));

$wish_count=mysqli_num_rows($sql2);

// for calculating cart total amount.
$query = "SELECT * FROM customer_cart where customer_email='$username' and `Delete`='0'";
        $query_run = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
        
        while($num=mysqli_fetch_assoc($query_run))
        {
            $cart_total +=$num['total_price'];
            $qr="update customer_cart set `cart_total`='$cart_total' where customer_email='$username'";
            $qr_run = mysqli_query($dbc,$qr) or die(mysqli_error($dbc));

        }


// increasing product price quantity.  

if(isset($_GET['plus']))
{   
    $ID=$_GET['idno'];
    $query = "SELECT * FROM customer_cart where id='$ID'";
    $query_run = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    $num=mysqli_fetch_assoc($query_run);
   
    $qua=$_GET['input'];
    
    $qua=$qua+1;
    $total= $num['product_price']*$qua;
    $qr="update `customer_cart` set `quantity`='$qua' , `total_price`='$total' where `customer_cart`.`id`='$ID'";
    $qr_run=mysqli_query($dbc,$qr);
    $page = $_SERVER['PHP_SELF'];
    $sec = "0";
    header("Refresh: $sec; url=$page");
    
}
if(isset($_GET['minus']))
{   
    $ID=$_GET['idno'];
    $query = "SELECT * FROM customer_cart where id='$ID'";
    $query_run = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    $num=mysqli_fetch_assoc($query_run);

    $qua=$_GET['input'];
    $qua=$qua-1;
    $total= $num['product_price']*$qua;
    $qr="update `customer_cart` set `quantity`='$qua', `total_price`='$total' where `customer_cart`.`id`='$ID'";
    $qr_run=mysqli_query($dbc,$qr);
    $page = $_SERVER['PHP_SELF'];
    $sec = "0";
    header("Refresh: $sec; url=$page");
    if($qua==0)
    {
        $qua=1;
        $total= $num['product_price']*$qua;
        $qr="update `customer_cart` set `quantity`='$qua', `total_price`='$total' where `customer_cart`.`id`='$ID'";
        $qr_run=mysqli_query($dbc,$qr);
        $page = $_SERVER['PHP_SELF'];
        $sec = "0";
        header("Refresh: $sec; url=$page");
    }
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
            <div class="header__cart__price">item: <span>₹150.00</span></div>
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
                <li>Free Shipping for all Order of ₹99</li>
            </ul>
        </div>
    </div>
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
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
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
                                                        <?php if($productcount ==0){?>
                                    <!-- <span> <?php  //echo $cart_value; ?> </span> -->
                                                            <?php } else if($productcount > 0) { ?>
                                                             <span> <?php $cart_value = $productcount; echo $cart_value; ?> </span>
                                                             <?php } ?>
                                                             </i> &nbsp; Shoping-cart 
                                                     </a>
                                                    </a> 
                                                    <a href="wishlist.php">
                                                        <i class="fa fa-heart animated faa-horizontal" style="color: green;">
                                                        <?php if($wish_count ==0){?>
                                                            <?php } else if($wish_count > 0) { ?>
                                                             <span> <?php $wish_value = $wish_count; echo $wish_value; ?> </span>
                                                             <?php } ?>
                                                    </i>&nbsp; &nbsp; Wish list  </a>
                                                    <a href="your_orders.php"><i class="fa fa-opencart animated faa-horizontal" style="color: green;"></i>&nbsp; Your Orders </a>
													<a href="profile.php?id=1"><i class="fa fa-user-circle animated faa-horizontal"style="color: green;"></i>&nbsp;  Profile </a>
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
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+91 9014434468</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shopping Cart</span>
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
                        <?php if ($productcount > 0) { ?>

                            <thead >
                                <tr>
                                    <th class="">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
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
                                    <?php echo "₹".$row['product_price'] ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                        <form method=" GET" action="">
						                    <input type="submit" class="minus" name="minus" id="minus" value="<?php echo '-'; ?>">				
						                    <input type="text" size="4" title="Qty" class="input" value="<?php   echo $row['quantity'];  ?>" name="input" id="input" max="29" min="0" step="1" style="text-align: center;">
                                            <input type='hidden' class='idno' name='idno' id='idno' value='<?php echo $row['id']; ?>'   > 
                                             <input type='submit' class='plus' name='plus' id='plus' value='+'  > 
                                        </form>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <?php echo "₹".$row['total_price'] ?>
                                    </td>
                                    
                                    <?php echo '<td class="shoping__cart__item__close"><a href="cart_admin/remove/remove_from_cart.php?id='.$row['id'].'" onClick=\'javascript: return confirm("Please confirm deletion");\'><span class="fa icon_close animated faa-bounce" ></span></a></td>';?>
                                        
                                    
                                </tr>
                                <?php } ?>
                  <?php } else { ?>
                    <p align=center style="color:#4a4a4a;">
                  <strong  > 
                    <i class="fa fa-database animated faa-horizontal"></i> <br>
                    Your cart is empty continue shopping to add items!!!</strong></p> <br>
            <?php } ?>   
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
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="index.php" class="primary-btn cart-btn" style="color:#f1f1f1;background-color:gray;">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right" style="color:#f1f1f1;background-color:gray;">
                            Upadate Cart</a>
                    </div>
                    <?php if($productcount>0) { ?>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span><?php echo "₹".$cart_total.".00"; ?></span></li>
                            <li>Total <span><?php echo "₹".$cart_total.".00"; ?></span></li>
                        </ul>
                        <a href="checkout.php" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
            <?php } ?>
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