<?php
session_start();
include 'database.php';
$id = $_GET['id'];
$removeqry = "delete from cart_super_admin where id='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
if ($sql) :
    echo '<script>';
    echo 'alert("admin Removed Successfully");';
    echo 'window.location.href= "../super_admin.php"; 
          </script>';
else :
    header('location : ../super_admin.php');
endif;

?>

