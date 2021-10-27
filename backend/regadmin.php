<?php
include 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $regemail = $_POST['email'];
  $regpass = $_POST['pass'];
  $regcnfpass = $_POST['conpsw'];
  $selqry = "select * from registeradmin where regemail='$regemail' or regcnfpass='$regcnfpass'";
  $selsql = mysqli_query($dbc, $selqry) or die(mysqli_error($dbc));
  // print_r($selsql);
  if (mysqli_num_rows($selsql) > 0) {
    echo '<script>';
    echo 'alert("User/Password Exist");';
    echo 'window.location.href= "registerAdmin.html"; 
        </script>';
  } else {
    if ($regpass == $regcnfpass) {
      
      $query = "INSERT INTO `registeradmin`(`regid`, `regemail`, `regpass`, `regcnfpass`) VALUES (null,'$regemail', '$regpass', '$regcnfpass')";
      $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
      if ($sql) {
        session_start();
        $_SESSION['regemailin'] = $regemail;
        echo '<script>';
        echo 'alert("Submitted Successfully");';
        echo 'window.location.href= "adminlogin.php"; 
          </script>';
      } else {
        echo '<script>';
        echo 'alert("Unable To Submit Details");';
        echo 'window.location.href= "../registerAdmin.html"; 
          </script>';
      }
    } else {
      echo '<script>';
      echo 'alert("Confirm Password Do Not Match");';
      echo 'window.location.href= "../registerAdmin.html"; 
          </script>';
    }
  }
}
$dbc->close();
