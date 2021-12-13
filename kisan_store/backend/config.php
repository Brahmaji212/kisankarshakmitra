<?php 
$server= "localhost";
$username= "root";
$password= "";
$db= "kkm";

// $dbc=new PDO('mysql:host='.$server.';dbname='.$db.','.$username.'');
$dbc= new mysqli($server, $username, $password, $db);

if(!$dbc){
    die("Unable to connect please, try again later:".mysqli_connect_error());
    exit();
}
?>