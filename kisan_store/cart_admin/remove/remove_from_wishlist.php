<?php
session_start();
include 'database.php';
$id = $_GET['id'];
// $username=$_SESSION['loginname'];
// $removeqry = "delete from customer_cart where customer_email='$username' and id='$id'";
// $sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));

$username=$_SESSION['loginname'];
$removeqry = "delete from wishlist where customer_email='$username' and id='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));

if ($sql) :
    echo '<script>';
    echo 'window.location.href= "../../wishlist.php"; 
          </script>';
else :
    header('location : ../../wishlist.php');
endif;

?>
