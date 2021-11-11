<?php
session_start();
include 'database.php';
$id = $_GET['id'];
// $username=$_SESSION['loginname'];
// $removeqry = "delete from customer_cart where customer_email='$username' and id='$id'";
// $sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));

$username=$_SESSION['loginname'];
$removeqry = "update customer_cart set `Delete`='1' where customer_email='$username' and id='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));

if ($sql) :
    echo '<script>';
    echo 'window.location.href= "../../shoping-cart.php"; 
          </script>';
else :
    header('location : ../../shoping-cart.php');
endif;

?>
