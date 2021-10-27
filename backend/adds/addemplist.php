<?php 
include '../database.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $empname = $_POST['empname'];
  $empaadhar = $_POST['empaadhar'];
  $emppan = $_POST['emppan'];
  $empmobile = $_POST['empmobile'];
  $empemail = $_POST['empemail'];
  $empdistrict = $_POST['empdistrict'];
  $empaddress = $_POST['empaddress'];

  $query = "INSERT INTO `employeelist`( `empname`, `empaadhar`, `emppan`, `empmobile`, `empmail`, `empdistrict`, `empaddress`) VALUES ('$empname', '$empaadhar', '$emppan', '$empmobile', '$empemail','$empdistrict','$empaddress')";
  $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
  if($sql) {
    session_start();
    $_SESSION['employeein']=$empname;
    echo '<script>';
    echo 'alert("Submitted Successfully");';
    echo 'window.location.href= "../dashboard/employlist.php"; 
          </script>';
  }else{
    echo '<script>';
    echo 'alert("Unable To Submit Details");';
    echo 'window.location.href= "../dashboard/employlist.php"; 
          </script>';
  }
}
$dbc->close();
?>