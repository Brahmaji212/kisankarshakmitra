<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['login_status'])) {
    header('location: backend/login.php');
}

include 'backend/database.php';

// taking product id 
$product_id=$_GET['product_id'];
$username=$_SESSION['loginname'];
// retrive the product data using id to store the details in cart
$pqury="select * from products where product_id='$product_id'";
$psql=mysqli_query($dbc,$pqury) or die(mysqli_error($dbc));
$prow=mysqli_fetch_assoc($psql);

$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$country=$_POST['country'];
$address=$_POST['addr'];
$address1=$_POST['addr1'];
$city=$_POST['town'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$note=$_POST['note'];

