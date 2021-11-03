<?php
session_start();
include 'database.php';
$id = $_GET['id'];
$removeqry = "delete from products where product_id='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
if ($sql) :
    echo '<script>';
    echo 'alert("Removed Successfully");';
    echo 'window.location.href= "../products.php"; 
          </script>';
else :
    header('location : ../products.php');
endif;

?>

