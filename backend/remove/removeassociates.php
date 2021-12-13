<?php
session_start();
include '../database.php';
$id = $_GET['id'];
$removeqry = "delete from associateslist where assoid ='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
if ($sql) :
    echo '<script>';
    echo 'alert("Removed Successfully");';
    echo 'window.location.href= "../Admin_panel/Associate_dashboard.php"; 
          </script>';
else :
    header('location : ../Admin_panel/Associate_dashboard.php');
endif;