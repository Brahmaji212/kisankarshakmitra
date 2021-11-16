<?php
session_start();
include '../database.php';
$id = $_GET['id'];
$removeqry = "delete from adminlist where adminid='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
if ($sql) :
    echo '<script>';
    echo 'alert("Removed Successfully");';
    echo 'window.location.href= "../Admin_panel/SuperAdmin_list.php"; 
          </script>';
else :
    header('location : ../Admin_panel/SuperAdmin_list.php');
endif;