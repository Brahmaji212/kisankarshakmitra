<?php
session_start();
include 'database.php';
$id = $_GET['id'];
$removeqry = "delete from store_customer_registration where user_id='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
if ($sql) :
    echo '<script>';
    echo 'alert("Removed Successfully");';
    echo 'window.location.href= "../Regusers.php"; 
          </script>';
else :
    header('location : ../Regusers.php');
endif;

?>

