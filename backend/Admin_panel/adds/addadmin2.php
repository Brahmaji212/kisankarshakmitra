<?php
include '../database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $adminname = $_POST['adminname'];
  $adminemail = $_POST['adminemail'];
  $adminpass = $_POST['adminpassword'];
  $admincnfpass = $_POST['cnfadminpass'];

  if ($adminpass == $admincnfpass) {
    $query = "INSERT INTO `admin2list`( `admin2name`, `admin2email`, `admin2pass`, `admin2cnfpass`) VALUES ('$adminname', '$adminemail', '$adminpass', '$admincnfpass')";
    $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
    if ($sql) {
      session_start();
      $_SESSION['adminin'] = $adminname;
      echo '<script>';
      echo 'alert("Submitted Successfully");';
      echo 'window.location.href= "../Admindashboard.php"; 
          </script>';
    } else {
      echo '<script>';
      echo 'alert("Unable To Submit Details");';
      echo 'window.location.href= "../Admindashboard.php"; 
          </script>';
    }
  } else {
    echo '<script>';
    echo 'alert("Confirm Password Do Not Match");';
    echo 'window.location.href= "../Admindashboard.php"; 
          </script>';
  }
}
$dbc->close();
