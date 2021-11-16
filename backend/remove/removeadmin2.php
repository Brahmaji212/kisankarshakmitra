<?php
session_start();
include '../database.php';
$id = $_GET['id'];
$removeqry = "delete from admin2list where admin2id='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
if ($sql) :
    echo '<script>';
    echo 'alert("Removed Successfully");';
    echo 'window.location.href= "../Admin_panel/Admindashboard.php"; 
          </script>';
else :
    header('location : ../Admin_panel/Admindashboard.php');
endif;