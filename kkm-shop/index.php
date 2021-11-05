<?php
error_reporting(0);

include 'backend/database.php';


// $_SESSION['loginname']

$prod_qry = "select * from products";
$prod_sql = mysqli_query($dbc, $prod_qry) or die(mysqli_error($dbc));
$prod_row = mysqli_fetch_assoc($prod_sql);

// $prod_qry2="select * from products where product_id="$prod_row['product_id']"";
?>




<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kisan Karshak Mitra</title>

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
    <link rel="stylesheet" href="navstyle.css" type="text/css">


    
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
	<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />


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
            <a href="#"><img style="width: 40%;" src="img/kkm-logo.png" alt=""></a>
        </div>
        <!-- <div class="humberger__menu__cart">
            <ul>
                <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div> -->
        <!-- <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li  style="margin-left: 13%;"><a href="#">Spanis</a></li>
                    <li  style="margin-left: 13%;"><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div> -->
        <!-- <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li  style="margin-left: 13%;"><a href="./shop-grid.html">Shop</a></li>
                <li  style="margin-left: 13%;"><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li  style="margin-left: 13%;"><a href="./shop-details.html">Shop Details</a></li>
                        <li  style="margin-left: 13%;"><a href="./#">Shoping Cart</a></li>
                        <li  style="margin-left: 13%;"><a href="./checkout.html">Check Out</a></li>
                        <li  style="margin-left: 13%;"><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li  style="margin-left: 13%;"><a href="./blog.html">Blog</a></li>
                <li  style="margin-left: 13%;"><a href="./contact.html">Contact</a></li>
            </ul>
        </nav> -->
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
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> info@kisankarshakmitra.in</li>
                                <li>Free Shipping for all Order of ₹99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                         <!--    <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div> -->
                           <!-- <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li  style="margin-left: 13%;"><a href="#">Spanis</a></li>
                                    <li  style="margin-left: 13%;"><a href="#">English</a></li>
                                </ul>
                            </div>-->
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
                                    background-color: #f9f9f9;
                                    min-width: 160px;
                                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                    z-index: 1;
                                }

                                .dropdown-content a {
                                    color: black;
                                    padding: 12px 16px;
                                    text-decoration: none;
                                    display: block;
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




                            <div class="header__top__right__auth">

                                    <div class="dropdown">
                                        <button class="button hvr-shutter-out-horizontal">Login</button>
                                        <div class="dropdown-content" style="text-align: left; border-radius:20px;">
                                            <a href="backend/cart_super_admin_login.html">SuperAdmin Login</a>
                                            <a href="backend/cart_admin_login.html">Admin Login</a> 
                                            <a href="backend/login.html" >User Login</a>
                                        </div>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header_main_1">
                        <a href="index.php"><img src="img/kkm-logo.png" style="height:100px;">KISAN KARSHAK
                            MITRA</a>
                    </div>
                </div>

                
                <div class="col-lg-6">
                    <!-- <form action="#">
                       
                        <input type="text" placeholder="What do yo u need?">
                        <button type="submit" class="site-btn">SEARCH</button>
                    </form> -->
                </div>
                <!-- <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div> -->
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">

                        <div class="main_nav_content d-flex flex-row">

                            <!-- Categories Menu -->

                            <div class="cat_menu_container">
                                <!-- <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                        <div class="cat_burger"><span></span><span></span><span></span></div>
                                        <div class="cat_menu_text">categories</div>
                                    </div> -->

                                <aside class="hero__categories ">
                                    <h4 class="hero__categories__all ">
                                        <b style="color:white">Categories</b>
                                    </h4>
                                    <ul class="scrollable-menu">
                                        <b> List of Items</b>
                                        <ul class="menu-list ">
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Seeds</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul >
                                                    <li style="margin-left: 13%;"><a href="seed.html">&nbsp;Vegetable Seeds</a></li>
                                                    <li style="margin-left: 13%;"><a href="seed.html">&nbsp;Cotton Seeds</a></li>
                                                    <li style="margin-left: 13%;"><a href="seed.html">&nbsp;Floriculture seeds</a></li>
                                                    <li style="margin-left: 13%;"><a href="seed.html">&nbsp;Potato Tubers</a></li>
                                                    <li style="margin-left: 13%;"><a href="seed.html">&nbsp;Grain Seeds</a></li>
                                                    <li style="margin-left: 13%;"><a href="seed.html">&nbsp;Fodder Seeds</a></li>
                                                    <li style="margin-left: 13%;"><a href="seed.html">&nbsp;Oil Seeds</a></li>
                                                    <li style="margin-left: 13%;"><a href="seed.html">&nbsp;Pulse Seeds</a></li>
                                                    <li style="margin-left: 13%;"><a href="seed.html">&nbsp;Wholesale</a></li>
                                                    <li style="margin-left: 13%;"><a href="seed.html">&nbsp;Exotic Vegetables</a></li>
                                                    <li style="margin-left: 13%;"><a href="seed.html">&nbsp;Tree Seeds</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Mushroom</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li style="margin-left: 13%;"><a href="mushroom.html">Mushroom Seeds and Spawn</a></li>
                                                    <li style="margin-left: 13%;"><a href="mushroom.html">Cultivation Supplies</a></li>
                                                    <li style="margin-left: 13%;"><a href="mushroom.html">Mushroom Culture</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Fertilizers</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li style="margin-left: 13%;"><a href="fertilizers.html"> M.P.K. (Water Soluble)</a></li>
                                                    <li style="margin-left: 13%;"><a href="fertilizers.html"> N.P.K. (Water Soluble)</a></li>
                                                    <li style="margin-left: 13%;"><a href="fertilizers.html">S.O.P. (Water Soluble)</a></li>
                                                    <li style="margin-left: 13%;"><a href="fertilizers.html">Potassium Nitrate (Water Soluble)</a></li>
                                                    <li style="margin-left: 13%;"><a href="fertilizers.html">Calcium Nitrate (Water Soluble)</a></li>
                                                    <li style="margin-left: 13%;"><a href="fertilizers.html">Sulphur</a></li>
                                                    <li style="margin-left: 13%;"> <a href="fertilizers.html">Ammonium Sulphate</a></li>
                                                    <li style="margin-left: 13%;"><a href="fertilizers.html">Magnesium Sulphate</a></li>
                                                    <li style="margin-left: 13%;"><a href="fertilizers.html">Micronutrients</a></li>
                                                    <li style="margin-left: 13%;"><a href="fertilizers.html">Speciality Fertilizers</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Certified Organic Products</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li style="margin-left: 13%;"><a href="certifi-organic.html">Fungicides</a></li>
                                                    <li style="margin-left: 13%;"><a href="certifi-organic.html">Organic Fertilizer</a></li>
                                                    <li style="margin-left: 13%;"><a href="certifi-organic.html">Insecticide</a></li>
                                                    <li style="margin-left: 13%;"><a href="certifi-organic.html">Plant Growth Stimulator</a></li>
                                                    <li style="margin-left: 13%;"><a href="certifi-organic.html">Virucide</a></li>
                                                    <li style="margin-left: 13%;"><a href="certifi-organic.html">Bactericide</a></li>
                                                    <li style="margin-left: 13%;"><a href="certifi-organic.html">Nematicide</a></li>
                                                    <li style="margin-left: 13%;"><a href="certifi-organic.html">Bio Combo Kits</a></li>
                                                    <li style="margin-left: 13%;"><a href="certifi-organic.html">Compost Agent</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Bio Products</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li style="margin-left: 13%;"><a href="bioproducts.html">Bio Fertilizer</a></li>
                                                    <li style="margin-left: 13%;"><a href="bioproducts.html">Bio Nematicide</a></li>
                                                    <li style="margin-left: 13%;"><a href="bioproducts.html">Plant Growth Promoter</a></li>
                                                    <li style="margin-left: 13%;"><a href="bioproducts.html">Bio Pesticides</a></li>
                                                    <li style="margin-left: 13%;"><a href="bioproducts.html">Bio Fungicides</a></li>
                                                    <li style="margin-left: 13%;"><a href="bioproducts.html">Bio Virucide</a></li>
                                                    <li style="margin-left: 13%;"><a href="bioproducts.html">Herbicides/Weedicides</a></li>
                                                    <li style="margin-left: 13%;"><a href="bioproducts.html">Bactericide</a></li>
                                                    <li style="margin-left: 13%;"><a href="bioproducts.html">Bio Compost Agent</a></li>
                                                    <li style="margin-left: 13%;"><a href="bioproducts.html">Sticking Agent</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Insecticides/Pesticides</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li style="margin-left: 13%;"><a href="insecticides.html">Pesticides/Insecticides</a></li>
                                                    <li style="margin-left: 13%;"><a href="insecticides.html">Fungicides</a></li>
                                                    <li style="margin-left: 13%;"><a href="insecticides.html">Growth Regulators</a></li>
                                                    <li style="margin-left: 13%;"><a href="insecticides.html">Herbicide/Weedicide</a></li>
                                                    <li style="margin-left: 13%;"><a href="insecticides.html">Sticking Agent</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Insects Traps</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li style="margin-left: 13%;"><a href="insect-trap.html">Bio Sticky Pad</a></li>
                                                    <li style="margin-left: 13%;"><a href="insect-trap.html">Lure</a></li>
                                                    <li style="margin-left: 13%;"><a href="insect-trap.html">Solar Trap</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Spray Pumps</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li style="margin-left: 13%;"><a href="spray.html">Battery Sprayer</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">Solar + Battery Sprayer</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">Manual Knapsack Hand Operated</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html"> Petrol Knapsack Power Sprayer</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">Mist Blower</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">HTP Sprayers</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">Pressure Sprayers</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">Portable Power Sprayer</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">Leaf Vaccum Blower</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">Agricultural UAV Drone Sprayers</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">X8 1500 - 5 kg</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">X4 1600 - 10 kg</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">X6 1900 - 15 kg</a></li>
                                                    <li style="margin-left: 13%;"><a href="spray.html">X6 2000 - 25 kg</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Soil Testing</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li style="margin-left: 13%;"><a href="soil-testing.html">Soil Testing Kits</a></li>
                                                    <li style="margin-left: 13%;"><a href="soil-testing.html">Digital Soil Testing Kit</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Water Testing</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li style="margin-left: 13%;"><a href="water-testing.html">Water Testing Kits</a></li>
                                                    
                                                                     
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Hydroponics</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li style="margin-left: 13%;"><a href="hydroponics.html">Darwin Starter Kits</a></li>
                                                    <li style="margin-left: 13%;"><a href="hydroponics.html">Leaf Station</a></li>
                                                    <li style="margin-left: 13%;"><a href="hydroponics.html">Air Bucket Technology</a></li>
                                                    <li style="margin-left: 13%;"><a href="hydroponics.html">Hydroponics Accessories</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Farm Machinery</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Brush Cutter</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Agriculture Reapers</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Hedge Trimmer</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Chainsaws</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Accessories / Attachments</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Manual Drawn Implements</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html"> Inter Cultivator</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Foggers</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Multi Crop Thresher</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Pressure Washers</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Augars</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Chaff Cutter</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Lawn Mower</a></li>
                                                    <li style="margin-left: 13%;"><a href="farmmachinery.html">Maize Sheller</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Farm Tools</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Watering Cans</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Fruit Picker</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Seeder</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Hedge Shears</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Manual Drawn Implements</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Manual Drawn Implements</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Sugarcane Tools</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Coconut Tools</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Sickle</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Fertilizer Tool</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Grafting Tape</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Fruit Harvester</a></li>
                                                    <li  style="margin-left: 13%;"><a href="farmtools.html">Telescopic Pruner</a></li>

                                                </ul>
                                            </li>
                                            
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Diesel Air Cooled</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="diesel-air.html">3.50 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-air.html">5.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-air.html">6.50 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-air.html">8.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-air.html">10.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-air.html">15.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-air.html">16.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-air.html">20.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-air.html">25.00 HP</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Diesel Water Cooled</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">3.50 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">5.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">6.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">6.50 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">8.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">10.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">15.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">16.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">20.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">25.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">Kerosene Engines</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">Petrol Engines</a></li>
                                                    <li  style="margin-left: 13%;"><a href="diesel-water.html">Engine Oil</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Generators</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="generators.html">Single Phase</a></li>
                                                    <li  style="margin-left: 13%;"><a href="generators.html">Three Phase</a></li>
                                                    <li  style="margin-left: 13%;"><a href="generators.html">Petrol Engines</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Single Phase Water Pumps</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="singlephase.html">Self Primming Pumps</a></li>
                                                    <li  style="margin-left: 13%;"><a href="singlephase.html">0.50 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="singlephase.html">1.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="singlephase.html">Bore Well Submersible Pumps</a></li>
                                                    <li> <a href="singlephase.html">Open Well Submersible Pumps</a></li>
                                                </ul>
                                            </li>
                                            
                                           
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;3 Phase Water Pumps</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">1.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">1.50 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">2.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">3.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">4.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">5.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">6.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">7.50 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">10.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">12.50 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">15.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">17.50 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">20.00 HP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">Open Well Submersible Pumps</a></li>
                                                    <li  style="margin-left: 13%;"><a href="threephase.html">Water Pumps</a></li>
                                                </ul>
                                            </li>
                                            
                                            
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;GSM Mobile Starter</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="gsm.html">Cell Phone Motor Starter</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Electricals</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="electricals.html">Auto Switch</a></li>
                                                    <li  style="margin-left: 13%;"><a href="electricals.html">Dry Run and Single Phase Preventer</a></li>
                                                    <li  style="margin-left: 13%;"><a href="electricals.html">Water Leveller</a></li>
                                                    <li  style="margin-left: 13%;"><a href="electricals.html">MCB / ELCB</a></li>
                                                    <li  style="margin-left: 13%;"><a href="electricals.html">Electrical Starter and Panel</a></li>
                                                    <li  style="margin-left: 13%;"><a href="electricals.html">Electric Motor</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Solar Products</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="solar.html">Portable Solar</a></li>
                                                    <li  style="margin-left: 13%;"><a href="solar.html">Solar + Battery Sprayer</a></li>
                                                    <li  style="margin-left: 13%;"><a href="solar.html">Solar Zatka - Fence Guard</a></li>
                                                    <li  style="margin-left: 13%;"><a href="solar.html">Non Solar Zatka - Fence Guard</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;LED Rechargeable Torches & Bulbs</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="led.html">Torch for Farmers</a></li>
                                                    <li  style="margin-left: 13%;"><a href="led.html">Emergency LED Torch</a></li>
                                                    <li  style="margin-left: 13%;"><a href="led.html">Portable Solar</a></li>
                                                    <li  style="margin-left: 13%;"><a href="led.html">LED Bulbs</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Cattle Care</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="cattle-care.html">Calcium Powder</a></li>
                                                    <li  style="margin-left: 13%;"><a href="cattle-care.html">Cattle Health</a></li>
                                                    <li  style="margin-left: 13%;"><a href="cattle-care.html">Mineral Mixture</a></li>
                                                    <li  style="margin-left: 13%;"><a href="cattle-care.html">Solar Zatka - Fence Guard</a></li>
                                                    <li  style="margin-left: 13%;"><a href="cattle-care.html">Milking Machines</a></li>
                                                    <li  style="margin-left: 13%;"><a href="cattle-care.html">Silage Bags</a></li>
                                                    <li  style="margin-left: 13%;"><a href="cattle-care.html">Chaff Cutter</a></li>
                                                    <li  style="margin-left: 13%;"><a href="cattle-care.html">Cattle Feed</a></li>
                                                    <li  style="margin-left: 13%;"><a href="cattle-care.html">Animal Repellent</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Fishery Products</a>
                                                <p class="menu-label">Subjects</p>
                                                

                                                        <ul>
                                                            <li  style="margin-left: 13%;"><a href="fishery.html">Fishery Seeds</a></li>
                                                            <li  style="margin-left: 13%;"><a href="fishery.html">Feed Supplement</a></li>
                                                            <li  style="margin-left: 13%;"><a href="fishery.html">Fisheries Water Testing kit</a></li>

                                                        </ul>
                                                    
                                               
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Plastic Products</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="plastic.html">Tarpaulin / Tirpal</a></li>
                                                    <li  style="margin-left: 13%;"><a href="plastic.html">Vermi Bed</a></li>
                                                    <li  style="margin-left: 13%;"><a href="plastic.html">Azolla Bed</a></li>
                                                    <li  style="margin-left: 13%;"><a href="plastic.html">Nursery Bags</a></li>
                                                    <li  style="margin-left: 13%;"><a href="plastic.html">Grow Bags</a></li>
                                                    <li  style="margin-left: 13%;"><a href="plastic.html">Mulching Film</a></li>
                                                    <li  style="margin-left: 13%;"><a href="plastic.html">Pond Lining</a></li>
                                                    <li  style="margin-left: 13%;"><a href="plastic.html">Shade Nets</a></li>
                                                    <li  style="margin-left: 13%;"><a href="plastic.html">Manhole</a></li>
                                                    <li  style="margin-left: 13%;"><a href="plastic.html"> Weed Mat</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="agri.html"><i class="fa fa-leaf"></i>&nbsp;Agri Magazines & CDs</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li><a >Krishi Jagran (11 Regional Language)</a></li>
                                                    <li><a >Agriculture World (English)</a></li>
                                                    <li><a >Compact Disc - CD</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"<i class="fa fa-leaf"></i>&nbsp;Pipes</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="pipes.html">LDPE Pipes</a></li>
                                                    <li  style="margin-left: 13%;"><a href="pipes.html">PVC Pipes & Fittings</a></li>
                                                    <li  style="margin-left: 13%;"><a href="pipes.html">Polyethylene Pipes & Fittings</a></li>
                                                    <li  style="margin-left: 13%;"><a href="pipes.html">uPVC Pipes</a></li>
                                                    <li  style="margin-left: 13%;"><a href="pipes.html">Garden Pipes</a></li>
                                                    <li  style="margin-left: 13%;"><a href="pipes.html">HDPE Pipes</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;EPE Fruit Foam Nets</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="epe-fruit.html">EPE Fruit Nets</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Irrigation System</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="irrigation.html">Micro Irrigation Systems & Parts</a></li>
                                                    <li  style="margin-left: 13%;"><a href="irrigation.html">Drip Lines</a></li>
                                                    <li  style="margin-left: 13%;"><a href="irrigation.html">Laterals</a></li>
                                                    <li  style="margin-left: 13%;"><a href="irrigation.html">Filters</a></li>
                                                    <li  style="margin-left: 13%;"><a href="irrigation.html">Sprinkler Irrigation Systems & Parts</a></li>
                                                    <li  style="margin-left: 13%;"><a href="irrigation.html">Drip Irrigation Kits</a></li>
                                                    <li  style="margin-left: 13%;"><a href="irrigation.html">Rain Irrigation system</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Solar Products</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="solar.html">Solar Pumping Systems</a></li>
                                                    <li  style="margin-left: 13%;"><a href="solar.html">3 HP 3000 WP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="solar.html">5 HP 4800 WP</a></li>
                                                    <li  style="margin-left: 13%;"><a href="solar.html">Solar Lighting and Appliances</a></li>
                                                    <li  style="margin-left: 13%;"><a href="solar.html">Solar Water Heater</a></li>
                                                    <li  style="margin-left: 13%;"><a href="solar.html">Solar Photovoltaic Module</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Green House</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="greenhouse.html">Green House</a></li>
                                                    <li  style="margin-left: 13%;"><a href="greenhouse.html">Net House</a></li>
                                                    <li  style="margin-left: 13%;"><a href="greenhouse.html">Poly House</a></li>
                                                    <li  style="margin-left: 13%;"><a href="greenhouse.html">Poly Tunnels</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Tissue Culture</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <li  style="margin-left: 13%;"><a href="tissue.html">Jain Banana</a></li>
                                                    <li  style="margin-left: 13%;"><a href="tissue.html">Jain Pomegranate</a></li>
                                                    <li  style="margin-left: 13%;"><a href="tissue.html">Balaji Banana</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-leaf"></i>&nbsp;Tractors Implement's</a>
                                                <p class="menu-label">Subjects</p>
                                                <ul>
                                                    <!-- <li><a>JSON</a></li>
                                              <li><a>AJAX</a></li> -->
                                                </ul>
                                            </li>
                                        </ul>
                                    </ul>
                                </aside>
                                <style>
                                    .scrollable-menu {
                                        height: 450px;
                                        max-height: 500px;
                                        overflow-x: hidden;

                                    }

                                    .menu-label {
                                        color: #222;
                                    }

                                    .menu-list .menu-label {
                                        padding-left: 1em;
                                    }

                                    .menu-list>li,
                                    .menu-list>li a,
                                    .menu-list>li .menu-label,
                                    .menu-list>li ul {
                                        transition-duration: 0.3s;
                                        transition-timing-function: cubic-bezier(1, 0, 1, 0);
                                        transition-property: margin, max-height, opacity, background-color, color;
                                    }

                                    .menu-list>li,
                                    .menu-list>li.is-active .menu-label,
                                    .menu-list>li.is-active ul {
                                        height: auto;
                                        max-height: 500px;
                                        opacity: 1;

                                    }

                                    .menu-list>li.is-invisible,
                                    .menu-list>li .menu-label,
                                    .menu-list>li ul {
                                        height: auto;
                                        max-height: 0;
                                        opacity: 0;
                                        overflow: hidden;
                                    }

                                    .menu-list>li:not(.is-active) .menu-label,
                                    .menu-list>li:not(.is-active) ul {
                                        margin: 0;
                                    }

                                    .menu-list>li.is-hidden2,
                                    .menu-list>li.is-hidden2 a,
                                    .menu-list>li.is-hidden2 .menu-label,
                                    .menu-list>li.is-hidden2 ul {
                                        transition-timing-function: cubic-bezier(0, 1, 0, 1);
                                    }
                                </style>
                            </div>
                            <script src="function.js"></script>
                        </div>
                    </div>





                    
                        <!-- Main Nav Menu -->
            <div class="col-lg-9">
                        <div class="main_nav_menu ml-auto" style="padding: 0 0 0 337px;">
                            <ul class="standard_dropdown main_nav_dropdown">
                                <li class="active" ><a href="index.php">Store<i class="fa fa-chevron-down"></i></a></li>
                                <li  ><a href="../k_about.html">About<i class="fa fa-chevron-down"></i></a></li>
                                <li  ><a href="../k_services.html">Services<i class="fa fa-chevron-down"></i></a></li>
                                <li ><a href="../k_memberships.html">Memberships<i class="fa fa-chevron-down"></i></a></li>
                                <li ><a href="../k_contact.html">Contact<i class="fa fa-chevron-down"></i></a></li>
                            </ul>
                        </div>

                        <!-- Menu Trigger -->

                        <div class="menu_trigger_container ml-auto">
                            <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                <div class="menu_burger">
                                    <div class="menu_trigger_text">menu</div>
                                    <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
                   
                </div>
            </div>
            </div>
        </nav>

    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/floor-cleaner.jpg">
                            <h5><a href="#">	Disinfectants / Floor Cleaners</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/seeds.jpg">
                            <h5><a href="#">SEEDS</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/mushrooms.jpg">
                            <h5><a href="#">Mushrooms</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/organic.jpg">
                            <h5><a href="#">Certified organic products</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/bio-products.jpg">
                            <h5><a href="#">Bio Products</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/insecticides.jpg">
                            <h5><a href="#">Insecticides & Pesticides</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/insect-trap.jpg">
                            <h5><a href="#">Insect traps</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/soiltesting.jpg">
                            <h5><a href="#">Soil Testing Kit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/watertesting.jpg">
                            <h5><a href="#">Water Testing Kit</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Bio-Products</li>
                            <li data-filter=".fresh-meat">Farm Machinery </li>
                            <li data-filter=".vegetables">Kisan Kraft</li>
                            <li data-filter=".fastfood">Hydroponics</li>
                            <li data-filter="."></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
              <?php
            $prod_qry = "select * from products where product_name='Bio-Fertilizer'";
            $prod_sql = mysqli_query($dbc, $prod_qry) or die(mysqli_error($dbc));
            $prod_row = mysqli_fetch_assoc($prod_sql);
                
            echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges ">
                    
                    <div class="featured__item">
                    
                        <div class="featured__item__pic set-bg" data-setbg="../kisan_store/cart_admin/backend/images//'.$prod_row['product_img'].'">
                         <ul class="featured__item__pic__hover">
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i></a></li> 
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                          <li  style="margin-left: 13%;"><a href="Shop_cart.php"><i class="fa fa-shopping-cart"></i></a></li> 
                       </ul>
                       </div>
                    
                      <div class="featured__item__text">
                            <h6><a href="#">  '.$prod_row["product_name"].' </a></h6>
                            <h5> ₹'.$prod_row["product_price"].'</h5>
                        </div>
                    </div>
                </div>';
                
            
            ?>
            <?php
                $prod_qry = "select * from products where product_name='Spray-Pumps'";
                $prod_sql = mysqli_query($dbc, $prod_qry) or die(mysqli_error($dbc));
                $prod_row = mysqli_fetch_assoc($prod_sql);
                    
            echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables ">
                    
                    <div class="featured__item">
                    
                        <div class="featured__item__pic set-bg" data-setbg="../kisan_store/cart_admin/backend/images//'.$prod_row['product_img'].'">
                         <ul class="featured__item__pic__hover">
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i></a></li> 
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                          <li  style="margin-left: 13%;"><a href="Shop_cart.php"><i class="fa fa-shopping-cart"></i></a></li> 
                       </ul>
                       </div>
                    
                      <div class="featured__item__text">
                            <h6><a href="#">  '.$prod_row["product_name"].' </a></h6>
                            <h5> ₹'.$prod_row["product_price"].'</h5>
                        </div>
                    </div>
                </div>';
            ?>
                
            <?php
                $prod_qry = "select * from products where product_name='Sprinkler'";
                $prod_sql = mysqli_query($dbc, $prod_qry) or die(mysqli_error($dbc));
                $prod_row = mysqli_fetch_assoc($prod_sql);
                    
            echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables ">
                    
                    <div class="featured__item">
                    
                        <div class="featured__item__pic set-bg" data-setbg="../kisan_store/cart_admin/backend/images//'.$prod_row['product_img'].'">
                         <ul class="featured__item__pic__hover">
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i></a></li> 
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                          <li  style="margin-left: 13%;"><a href="Shop_cart.php"><i class="fa fa-shopping-cart"></i></a></li> 
                       </ul>
                       </div>
                    
                      <div class="featured__item__text">
                            <h6><a href="#">  '.$prod_row["product_name"].' </a></h6>
                            <h5> ₹'.$prod_row["product_price"].'</h5>
                        </div>
                    </div>
                </div>';
            ?>
                
                <?php
                $prod_qry = "select * from products where product_name='Lawn-Mover'";
                $prod_sql = mysqli_query($dbc, $prod_qry) or die(mysqli_error($dbc));
                $prod_row = mysqli_fetch_assoc($prod_sql);
                    
            echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables ">
                    
                    <div class="featured__item">
                    
                        <div class="featured__item__pic set-bg" data-setbg="../kisan_store/cart_admin/backend/images//'.$prod_row['product_img'].'">
                         <ul class="featured__item__pic__hover">
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i></a></li> 
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                          <li  style="margin-left: 13%;"><a href="Shop_cart.php"><i class="fa fa-shopping-cart"></i></a></li> 
                       </ul>
                       </div>
                    
                      <div class="featured__item__text">
                            <h6><a href="#">  '.$prod_row["product_name"].' </a></h6>
                            <h5> ₹'.$prod_row["product_price"].'</h5>
                        </div>
                    </div>
                </div>';
            ?>
                
                <?php
                $prod_qry = "select * from products where product_name='Hydroponics'";
                $prod_sql = mysqli_query($dbc, $prod_qry) or die(mysqli_error($dbc));
                $prod_row = mysqli_fetch_assoc($prod_sql);
                    
            echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood ">
                    
                    <div class="featured__item">
                    
                        <div class="featured__item__pic set-bg" data-setbg="../kisan_store/cart_admin/backend/images//'.$prod_row['product_img'].'">
                         <ul class="featured__item__pic__hover">
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i></a></li> 
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                          <li  style="margin-left: 13%;"><a href="Shop_cart.php"><i class="fa fa-shopping-cart"></i></a></li> 
                       </ul>
                       </div>
                    
                      <div class="featured__item__text">
                            <h6><a href="#">  '.$prod_row["product_name"].' </a></h6>
                            <h5> ₹'.$prod_row["product_price"].'</h5>
                        </div>
                    </div>
                </div>';
            ?>    
              
                <?php
                $prod_qry = "select * from products where product_name='Hydroponic'";
                $prod_sql = mysqli_query($dbc, $prod_qry) or die(mysqli_error($dbc));
                $prod_row = mysqli_fetch_assoc($prod_sql);
                    
            echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood ">
                    
                    <div class="featured__item">
                    
                        <div class="featured__item__pic set-bg" data-setbg="../kisan_store/cart_admin/backend/images//'.$prod_row['product_img'].'">
                         <ul class="featured__item__pic__hover">
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i></a></li> 
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                          <li  style="margin-left: 13%;"><a href="Shop_cart.php"><i class="fa fa-shopping-cart"></i></a></li> 
                       </ul>
                       </div>
                    
                      <div class="featured__item__text">
                            <h6><a href="#">  '.$prod_row["product_name"].' </a></h6>
                            <h5> ₹'.$prod_row["product_price"].'</h5>
                        </div>
                    </div>
                </div>';
            ?>    
                
                <?php
                $prod_qry = "select * from products where product_name='Bio-Virucide'";
                $prod_sql = mysqli_query($dbc, $prod_qry) or die(mysqli_error($dbc));
                $prod_row = mysqli_fetch_assoc($prod_sql);
                    
            echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood ">
                    
                    <div class="featured__item">
                    
                        <div class="featured__item__pic set-bg" data-setbg="../kisan_store/cart_admin/backend/images//'.$prod_row['product_img'].'">
                         <ul class="featured__item__pic__hover">
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i></a></li> 
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                          <li  style="margin-left: 13%;"><a href="Shop_cart.php"><i class="fa fa-shopping-cart"></i></a></li> 
                       </ul>
                       </div>
                    
                      <div class="featured__item__text">
                            <h6><a href="#">  '.$prod_row["product_name"].' </a></h6>
                            <h5> ₹'.$prod_row["product_price"].'</h5>
                        </div>
                    </div>
                </div>';
            ?>    
               
                 
                 <?php
                $prod_qry = "select * from products where product_name='Insecticides-Killer'";
                $prod_sql = mysqli_query($dbc, $prod_qry) or die(mysqli_error($dbc));
                $prod_row = mysqli_fetch_assoc($prod_sql);
                    
            echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables ">
                    
                    <div class="featured__item">
                    
                        <div class="featured__item__pic set-bg" data-setbg="../kisan_store/cart_admin/backend/images//'.$prod_row['product_img'].'">
                         <ul class="featured__item__pic__hover">
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i></a></li> 
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                          <li  style="margin-left: 13%;"><a href="Shop_cart.php"><i class="fa fa-shopping-cart"></i></a></li> 
                       </ul>
                       </div>
                    
                      <div class="featured__item__text">
                            <h6><a href="#">  '.$prod_row["product_name"].' </a></h6>
                            <h5> ₹'.$prod_row["product_price"].'</h5>
                        </div>
                    </div>
                </div>';
            ?>
                
                <?php
                $prod_qry = "select * from products where product_name='Farm-Machinery'";
                $prod_sql = mysqli_query($dbc, $prod_qry) or die(mysqli_error($dbc));
                $prod_row = mysqli_fetch_assoc($prod_sql);
                    
            echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat ">
                    
                    <div class="featured__item">
                    
                        <div class="featured__item__pic set-bg" data-setbg="../kisan_store/cart_admin/backend/images//'.$prod_row['product_img'].'">
                         <ul class="featured__item__pic__hover">
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i></a></li> 
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                          <li  style="margin-left: 13%;"><a href="Shop_cart.php"><i class="fa fa-shopping-cart"></i></a></li> 
                       </ul>
                       </div>
                    
                      <div class="featured__item__text">
                            <h6><a href="#">  '.$prod_row["product_name"].' </a></h6>
                            <h5> ₹'.$prod_row["product_price"].'</h5>
                        </div>
                    </div>
                </div>';
            ?>
                
                <?php
                $prod_qry = "select * from products where product_name='Farm-Tools'";
                $prod_sql = mysqli_query($dbc, $prod_qry) or die(mysqli_error($dbc));
                $prod_row = mysqli_fetch_assoc($prod_sql);
                    
            echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat ">
                    
                    <div class="featured__item">
                    
                        <div class="featured__item__pic set-bg" data-setbg="../kisan_store/cart_admin/backend/images//'.$prod_row['product_img'].'">
                         <ul class="featured__item__pic__hover">
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-heart"></i></a></li> 
                          <li  style="margin-left: 13%;"><a href="#"><i class="fa fa-retweet"></i></a></li>
                          <li  style="margin-left: 13%;"><a href="Shop_cart.php"><i class="fa fa-shopping-cart"></i></a></li> 
                       </ul>
                       </div>
                    
                      <div class="featured__item__text">
                            <h6><a href="#">  '.$prod_row["product_name"].' </a></h6>
                            <h5> ₹'.$prod_row["product_price"].'</h5>
                        </div>
                    </div>
                </div>';
            ?>

            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/bio-products.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Bio Products</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/fertilizers.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Fertilizers</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/floor-cleaner.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Floor Cleaner</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/insect-trap.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Insect Trap</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/insecticides.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Insecticides & Pesticides</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/mushrooms.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Mushrooms</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/organic.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Organic Products</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/seeds.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Seeds</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/soiltesting.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Soil Testing</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/watertesting.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Water Testing</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/bio-products.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Bio Products</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/categories/mushrooms.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/balaji.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Jain Banana</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/batteryspray.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Battery Sprayer</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/gardenpipes.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Garden Pipes</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/agri_uav_drone_10kg.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Agri UAV drone 10kg</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/agri_uav_drone_15kg.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Agri UAV drone 15kg</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/agri_uav_drone_25kg.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Agri UAV drone 25kg</h6>
                                        <span>₹0.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <!-- <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img style="width: 40%;" src="img/kkm-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li  style="margin-left: 13%;"><a href="#">About Us</a></li>
                            <li  style="margin-left: 13%;"><a href="#">About Our Shop</a></li>
                            <li  style="margin-left: 13%;"><a href="#">Secure Shopping</a></li>
                            <li  style="margin-left: 13%;"><a href="#">Delivery infomation</a></li>
                            <li  style="margin-left: 13%;"><a href="#">Privacy Policy</a></li>
                            <li  style="margin-left: 13%;"><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li  style="margin-left: 13%;"><a href="#">Who We Are</a></li>
                            <li  style="margin-left: 13%;"><a href="#">Our Services</a></li>
                            <li  style="margin-left: 13%;"><a href="#">Projects</a></li>
                            <li  style="margin-left: 13%;"><a href="#">Contact</a></li>
                            <li  style="margin-left: 13%;"><a href="#">Innovation</a></li>
                            <li  style="margin-left: 13%;"><a href="#">Testimonials</a></li>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Designed by Aarush Technologies
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