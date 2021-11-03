<?php
include '../backend/database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $adminname = $_POST['adminname'];
  $adminemail = $_POST['adminemail'];
  $adminpass = $_POST['adminpassword'];
  $admincnfpass = $_POST['cnfadminpass'];

// checking the admins count to stop inserstion of more than 5 admins.
$qry1 = "select * from cart_super_admin";
$sql1 = mysqli_query($dbc, $qry1) or die(mysqli_error($dbc));
$admincount=mysqli_num_rows($sql1);
if($admincount == 5){
    echo '<script>';
    echo 'alert("super admins not exceeded to more than 5 members.");';
    echo 'window.location.href= "../super_admin.php"; 
        </script>';    

}


 else if ($adminpass == $admincnfpass) {
    $query = "INSERT INTO `cart_super_admin`(`name`, `email`, `password`, `conf_password`) VALUES ('$adminname', '$adminemail', '$adminpass', '$admincnfpass')";
    $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
    if ($sql) {
      session_start();
      $_SESSION['adminin'] = $adminname;
      echo '<script>';
      echo 'alert("New Admin Added Successfully");';
      echo 'window.location.href= "../super_admin.php"; 
          </script>';
    } else {
      echo '<script>';
      echo 'alert("Unable To Submit Details");';
      echo 'window.location.href= "../super_admin.php"; 
          </script>';
    }
  } else {
    echo '<script>';
    echo 'alert("Confirm Password Do Not Match");';
    echo 'window.location.href= "../super_admin.php"; 
          </script>';
  }
}
$dbc->close();
