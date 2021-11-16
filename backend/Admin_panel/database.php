<?php 
$server= "localhost";
$username= "root";
$password= "";
$db= "kkm";

$dbc= mysqli_connect($server, $username, $password, $db);

if(!$dbc){
    die("Unable to connect please, try again later:".mysqli_connect_error());
    exit();
}
?>