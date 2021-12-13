<?php
include 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $username = $_POST['uname'];
  $regemail = $_POST['email'];
  $regpass = $_POST['pass'];
  $regcnfpass = $_POST['conpsw'];
  $regphone = $_POST['phn'];
  $selqry = "select * from store_customer_registration where email='$regemail' or username='$username' or 	conf_password='$regcnfpass' or phone='$regphone'";
  $selsql = mysqli_query($dbc, $selqry) or die(mysqli_error($dbc));
  // print_r($selsql);
  if (mysqli_num_rows($selsql) > 0) {
    echo '<script>';
    echo 'alert("User/Password Exist");';
    echo 'window.location.href= "Register.html"; 
    </script>';
  } else {
    if ($regpass == $regcnfpass) {
      
      $query = "INSERT INTO  `store_customer_registration`(`first_name`,`last_name`,`username`, `email`, `password`, `conf_password`, `phone` ) VALUES ('$first_name','$last_name','$username','$regemail', '$regpass', '$regcnfpass', '$regphone')";
      $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
      if ($sql) {
        session_start();
        $_SESSION['regemailin'] = $regemail;
        echo '<script>';
        echo 'alert("Submitted Successfully");';
        echo 'window.location.href= "login.html"; 
          </script>';
      } else {
        echo '<script>';
        echo 'alert("Unable To Submit Details");';
        echo 'window.location.href= "Register.html"; 
          </script>';
      }
    } else {
      echo '<script>';
      echo 'alert("Confirm Password Do Not Match");';
      echo 'window.location.href= "Register.html"; 
          </script>';
    }
  }
}
$dbc->close();

?>



