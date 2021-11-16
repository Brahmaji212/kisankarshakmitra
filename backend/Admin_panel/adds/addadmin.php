<?php
include '../database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $adminname = $_POST['adminname'];
  $adminemail = $_POST['adminemail'];
  $adminpass = $_POST['adminpassword'];
  $admincnfpass = $_POST['cnfadminpass'];

  if ($adminpass == $admincnfpass) {
    $query = "INSERT INTO `adminlist`(`adminname`, `adminemail`, `adminpass`, `admincnfpass`) VALUES ('$adminname', '$adminemail', '$adminpass', '$admincnfpass')";
    $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
    if ($sql) {
      session_start();
      $_SESSION['adminin'] = $adminname;
      echo '<script>';
      echo 'alert("Submitted Successfully");';
      echo 'window.location.href= "../SuperAdmin_list.php"; 
          </script>';
    } else {
      echo '<script>';
      echo 'alert("Unable To Submit Details");';
      echo 'window.location.href= "../SuperAdmin_list.php"; 
          </script>';
    }
  } else {
    echo '<script>';
    echo 'alert("Confirm Password Do Not Match");';
    echo 'window.location.href= "../SuperAdmin_list.php"; 
          </script>';
  }
}
$dbc->close();
