<?php
session_start();
include '../database.php';
$id = $_GET['id'];
$removeqry = "delete from franchiseslist where franid ='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
if ($sql) :
    echo '<script>';
    echo 'alert("Removed Successfully");';
    echo 'window.location.href= "../dashboard/franchizedashboard.php"; 
          </script>';
else :
    header('location : ../dashboard/franchizedashboard.php');
endif;