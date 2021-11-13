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

$qry= "SELECT * FROM Order_details LEFT  JOIN customer_cart ON order_details.user_id=customer_cart.customer_email and Order_details.product_id=customer_cart.product_id where order_details.user_id='$username'   and `Delete`='1'  and order_details.order_id=customer_cart.order_id    ";
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
    <link rel="stylesheet" href="css/orderstyles.css" type="text/css">
  

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
    <?php include 'header.php'; ?>
    <!-- <li class="active"><a href="your_orders.php">Orders</a></li> -->


    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                        <?php if ($productcount > 0) { ?>

                            <thead >
                                <tr>
                                    <th class="shoping__product">Product image</th>
                                    <th>Total price</th>
                                    <th>Quantity</th>
                                    <th>Booking Date</th>
                                    <th> Delivery Date</th>
                                    <th> Payment</th>
                                </tr>
                            </thead>
                            <?php while ($row = mysqli_fetch_assoc($sql)){ ?>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                    <?php echo "<img src='cart_admin/backend/images//".$row['product_img']."'>"; ?>
                                        <h5> <?php echo $row['product_name'] ?></h5>
                                        
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
                                    <td class="shoping__cart__payment">
                                    <?php echo $row['payment_method'] ?>
                                    </td>
                                    
                                        
                                    
                                </tr>
                                <?php } ?>
                  <?php } else { ?>
                    <p align=center style="color:#4a4a4a;">
                  <strong  > 
                    <i class="fa fa-database animated faa-horizontal"></i> <br>
                    YOU ARE NOT YET BOOKED ANY ORDERS. !!!</strong></p> <br>
            <?php  } ?>   
                                
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
            
        </div>
    </section>


  <?php  include 'footer.php'; ?>

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
