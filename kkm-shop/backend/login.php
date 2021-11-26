<?php
include 'database.php';

$adminqry = "select * from store_customer_registration";
$sql = mysqli_query($dbc, $adminqry) or die("Sorry, Something Went Wrong");
// print_r($sql); 
$admincount = mysqli_num_rows($sql);
if ($admincount > 0) {
    while ($row = mysqli_fetch_assoc($sql)) {
        // print_r($row);

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $username = $_POST['email'];
            $password = $_POST['pass'];
            
            if ($row['email'] == $username && $row['conf_password'] == $password) {
                session_start();
                
                $_SESSION['adminname'] = 1;
                $_SESSION['login_status'] = 1;
                $_SESSION['loginname'] = $username;
                header('location: ../../kisan_store/index.php');
            } else {
                echo "
            <script>
            alert('Invalid Credentails Try Again');
            window.location.href = 'login.html';
            </script>";
            }
        }
    }
} else {
    echo "
            <script>
            alert('Create An Account');
            window.location.href = 'Register.php';
            window.location.href = 'login.html';
            </script>";
}
$dbc->close();
?>




