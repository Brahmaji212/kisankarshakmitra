<?php 
include '../database.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $franchisename = $_POST['franchisename'];
  $franaadharnumber = $_POST['franaadharnumber'];
  $franpannumber = $_POST['franpannumber'];
  $franmobilenumber = $_POST['franmobilenumber'];
  $franemail = $_POST['franemail'];
  $frandistrict = $_POST['frandistrict'];
  $franaddress = $_POST['franaddress'];

  $query = "INSERT INTO `franchiseslist`( `franname`, `franaadhar`, `franpan`, `franmoblie`, `franemail`, `frandistrict`, `franaddress`) VALUES ('$franchisename', '$franaadharnumber', '$franpannumber', '$franmobilenumber', '$franemail','$frandistrict','$franaddress')";
  $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
  if($sql) {
    session_start();
    $_SESSION['franchisein']=$franchisename;
    echo '<script>';
    echo 'alert("Submitted Successfully");';
    echo 'window.location.href= "../Admin_panel/Franchise_dashboard.php"; 
          </script>';
  }else{
    echo '<script>';
    echo 'alert("Unable To Submit Details");';
    echo 'window.location.href= "../Admin_panel/Franchise_dashboard.php"; 
          </script>';
  }
}
$dbc->close();
