<?php
session_start();
include 'database.php';
$id = $_GET['id'];
$removeqry = "delete from cart_admin where id='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
if ($sql) :
    echo '<script>';
    echo 'alert("admin Removed Successfully");';
    echo 'window.location.href= "../Regadmins.php"; 
          </script>';
else :
    header('location : ../Regadmins.php');
endif;

?>

