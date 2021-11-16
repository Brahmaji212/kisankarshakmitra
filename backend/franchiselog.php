<?php
include 'database.php';

$franchiseqry = "select * from registerfranchise";
$sql = mysqli_query($dbc, $franchiseqry) or die("Sorry, Something Went Wrong");
// print_r($sql); 
$franchisecount = mysqli_num_rows($sql);

if ($franchisecount > 0) {
    while ($row = mysqli_fetch_assoc($sql)) {
        // print_r($row);

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $username = $_POST['email'];
            $password = $_POST['pass'];

            if ($row['regemail'] == $username && $row['regcnfpass'] == $password) {
                session_start();
                $_SESSION['login_status'] = 1;
                $_SESSION['loginname'] = $username;
                header('location: Admin_panel/dashboard.php');
            } else {
                echo "
            <script>
            alert('Invalid Credentails Try Again');
            window.location.href = 'franchiselogin.php';
            </script>";
            }
        }
    }
} else {
    echo "
            <script>
            alert('Create An Account');
            window.location.href = '../registerfranch.html';
            </script>";
}

$dbc->close();
