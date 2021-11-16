<?php
session_start();
include '../database.php';
$id = $_GET['id'];
$removeqry = "delete from agents where agentid='$id'";
$sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
if ($sql) :
    echo '<script>';
    echo 'alert("Removed Successfully");';
    echo 'window.location.href= "../SuperAdmin/SuperAdmin_Agent.php"; 
          </script>';
else :
    header('location : ../SuperAdmin/SuperAdmin_Agent.php');
endif;