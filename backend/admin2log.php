<?php
include 'database.php';

$adminqry = "select * from admin2list";
$sql = mysqli_query($dbc, $adminqry) or die("Sorry, Something Went Wrong");
// print_r($sql); 
$admincount = mysqli_num_rows($sql);
if ($admincount > 0) {
    while ($row = mysqli_fetch_assoc($sql)) {
        // print_r($row);

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $username = $_POST['email'];
            $password = $_POST['pass'];

            if ($row['admin2email'] == $username && $row['admin2cnfpass'] == $password) {
                session_start();
                $_SESSION['admin2name'] = 1;
                $_SESSION['login_status'] = 1;
                $_SESSION['loginname'] = $username;
                header('location: Admin/kkm.php');
            } else {
                echo "
            <script>
            alert('Invalid Credentails Try Again');
            window.location.href = 'admin2login.php';
            </script>";
            }
        }
    }
} else {
    echo "
            <script>
            alert('Create An Account');
            // window.location.href = '../registerAdmin.html';
            window.location.href = 'admin2login.php';
            </script>";
}
$dbc->close();
