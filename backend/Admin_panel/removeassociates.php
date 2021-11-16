<?php
session_start();
include '../database.php';
$id = $_GET['id'];
$removeqry = "delete from associateslist where assoid ='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
if ($sql) :
    echo '<script>';
    echo 'alert("Removed Successfully");';
    echo 'window.location.href= "../SuperAdmin/SuperAdmin_Associate.php"; 
          </script>';
else :
    header('location : ../SuperAdmin/SuperAdmin_Associate.php');
endif;