<?php
session_start();
if (!isset($_SESSION['login_status'])) {
  header('location: ../adminlogin.php');
}
include '../database.php';

$id=$_GET['id'];

$qry = "update agents set `Approval`='pending' where agentid='$id'";
$sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
if($sql) {
    echo '<script>';
    echo 'alert("Agent Approval Dismissed");';
    echo 'window.location.href= "../Admin_panel/approvalpending.php"; 
          </script>';
  }else{
    echo '<script>';
    echo 'alert("Unable To Submit Details");';
    echo 'window.location.href= "../Admin_panel/approvalpending.php"; 
          </script>';
  }
  $dbc->close();
?>