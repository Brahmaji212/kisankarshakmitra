<?php
session_start();
include 'backend/database.php';
$id = $_GET['id'];
$image=$_SESSION['image'];
$removeqry = "update `store_customer_registration` set profile_img=NULL  where user_id='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
if ($sql) :
    echo '<script>';
    echo 'alert("Removed Successfully");';
    echo 'window.location.href= "profile.php?id=1"; 
          </script>';
else :
    header('location : profile.php?id=1');
endif;

?>
