<?php 
session_start();
unset($_SESSION['login_status']);
session_destroy();
header('Location: ../HOME');


?>