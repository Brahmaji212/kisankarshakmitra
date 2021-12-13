<?php 
include '../database.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $agentname = $_POST['agentname'];
  $agentaadhar = $_POST['agentaadhar'];
  $agentpan = $_POST['agentpannumber'];
  $agentphone = $_POST['agentphone'];
  $agentdistrict = $_POST['agentdistrict'];
  $agentemail = $_POST['agentemail'];
  $agentaddress = $_POST['agentaddress'];
  $approval="pending";

  $query = "INSERT INTO `agents`( `agentname`, `agentaadhar`, `agentpan`, `agentphone`, `agentemail`, `agentdistrict`, `agentaddress`,`Approval`) VALUES ('$agentname', '$agentaadhar', '$agentpan', '$agentphone', '$agentemail','$agentdistrict','$agentaddress','$approval')";
  $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
  if($sql) {
    session_start();
    $_SESSION['agentin']=$agentname;
    echo '<script>';
    echo 'alert("Submitted Successfully");';
    echo 'window.location.href= "../Admin_panel/Agent_dashboard.php"; 
          </script>';
  }else{
    echo '<script>';
    echo 'alert("Unable To Submit Details");';
    echo 'window.location.href= "../Admin_panel/Agent_dashboard.php"; 
          </script>';
  }
}
$dbc->close();
?>