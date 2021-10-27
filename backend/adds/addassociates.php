<?php 
include '../database.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $nameassociates = $_POST['nameassociates'];
  $assnameaadhar = $_POST['assnameaadhar'];
  $asspannumber = $_POST['asspannumber'];
  $assmobilenumber = $_POST['assmobilenumber'];
  $assemail = $_POST['assemail'];
  $assdistrict = $_POST['assdistrict'];
  $assaddress = $_POST['assaddress'];

  $query = "INSERT INTO `associateslist`( `assoname`, `assoaadhar`, `assopan`, `assomobile`, `assoemail`, `assodistrict`, `assoaddress`) VALUES ('$nameassociates', '$assnameaadhar', '$asspannumber', '$assmobilenumber', '$assemail','$assdistrict','$assaddress')";
  $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
  if($sql) {
    session_start();
    $_SESSION['associatesin']=$nameassociates;
    echo '<script>';
    echo 'alert("Submitted Successfully");';
    echo 'window.location.href= "../dashboard/Associatedashboard.php"; 
          </script>';
  }else{
    echo '<script>';
    echo 'alert("Unable To Submit Details");';
    echo 'window.location.href= "../dashboard/Associatedashboard.php"; 
          </script>';
  }
}
$dbc->close();
?>