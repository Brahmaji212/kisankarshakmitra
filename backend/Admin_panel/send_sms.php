<?php
session_start();
if (!isset($_SESSION['login_status'])) {
    header('location: ../cselogin.php');
  }
include '../database.php';

$mobile=$_SESSION['mobile'];

	// script for sending an text messages
// Authorisation details.
$username = "brahmajig1999@gmail.com";
$hash = "a74f1af3ffe803dd55ec70423732ab7ec8c30700f519080e059101877530a608";

// Config variables. Consult http://api.textlocal.in/docs for more info.
$test = "0";

// Data for text message. This is the text message data.
$sender = "TXTLCL"; // This is who the message appears to be from.
$numbers = $mobile; // A single number or a comma-seperated list of numbers
$message = "Welcome to KisanKarshakMitra, Send by AarushGroup.";
// 612 chars or less
// A single number or a comma-seperated list of numbers
$message = urlencode($message);
$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
$ch = curl_init('http://api.textlocal.in/send/?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
curl_close($ch);

if($result)
{
    echo "msg sent successfully";
}
?>