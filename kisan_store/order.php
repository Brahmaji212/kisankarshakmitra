<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['login_status'])) {
    header('location: backend/login.php');
}

if($_GET['id'])
{
    echo  '<p style="text-align:center; padding-top:100px; background-color:biscuit; color:slategrey;" >
             
            <h5 style="text-align:center; color:biscuit;"> Your Order Is Confirmed. <a href="index.php"  class="click">click here</a> to Continue Shopping </h5>
            </p>';
}



if(isset($_POST['submit'])){
    include 'backend/database.php';
// taking username
$username=$_SESSION['loginname'];

// retrive the product data using id to store the details in cart
$query="select * from customer_cart where customer_email='$username'";
$sql=mysqli_query($dbc,$query) or die(mysqli_error($dbc));

$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$country=$_POST['country'];
$address1=$_POST['addr'];
$address2=$_POST['addr1'];
$city=$_POST['town'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$note=$_POST['note'];
$booking_date=$_POST['booking_date'];
$delivery_date=$_POST['delivery_date'];
$payment_method=$_POST['payment'];
while($row=mysqli_fetch_assoc($sql)){

    $product_id=$row['product_id'];
    $order_id=rand(11111,999999);
    $product_name=$row['product_name'];
    $cart_total=$row['cart_total'];
    $total_price=$row['total_price'];
    $quantity=$row['quantity'];

    $insert="INSERT INTO `order_details` (`order_id`,`product_id`,`user_id`,`first_name`,`last_name`,`country`,`address1`,`address2`,`city`,`state`,`pin`,`phone`,`email`,`order_note`,`status`,`subtotal`,`total`,`quantity`,`booking_date`,`delivery_date`,`payment_method`)values('$order_id','$product_id','$username','$first_name','$last_name','$country','$address1','$address2','$city','$state','$pin','$phone','$email','$note','started','$total_price','$cart_total','$quantity','$booking_date','$delivery_date','$payment_method')";
    $sqlinsert=mysqli_query($dbc,$insert) or die(mysqli_error($dbc));
}
    if($sqlinsert)
    {
        echo  '<p style="text-align:center; padding-top:100px; background-color:biscuit; color:green;" >
            <i class="fa fa-spinner fa-spin fa-slow fa-2x" ></i> <br> 
            <h5 style="text-align:center; color:green;">please wait your order is confirming.. dont refresh upto <span id="countdowntimer" style="color:red;">10 </span>&nbsp; seconds  </h5>
            </p>';
    

    echo '<script type="text/javascript">
            var timeleft = 10;
            var downloadTimer = setInterval(function(){
            timeleft--;
            document.getElementById("countdowntimer").textContent = timeleft;
            if(timeleft <= 0)
            clearInterval(downloadTimer);
            },1000);
         </script>';

    $delquery="delete from customer_cart where customer_email='$username'";
    $delsql=mysqli_query($dbc,$delquery) or die(mysqli_error($dbc));

    $page = $_SERVER['PHP_SELF'];
    $sec = "10";
    header("Refresh: $sec; url=$page?id=1");
 
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
    
   .click:hover{
       
       color: red;
       background:none;
   }
</style>
</head>

<body>


</body>

</html>