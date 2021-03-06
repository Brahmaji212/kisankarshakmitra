<?php
session_start();
include '../database.php';
if (!isset($_SESSION['login_status'])) {
  header('location: ../adminlogin.php');
}
$sel_qry = "select * from customer_form";
$excute_selqry = mysqli_query($dbc, $sel_qry) or die(mysqli_error($dbc));
$userdatacount = mysqli_num_rows($excute_selqry);
?>

<!DOCTYPE html>
<html lang="en">
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
  <title>Sreveen&nbsp;Dashboard</title>
  <link rel="shortcut icon" href="images/sreeven.png" type="image/x-icon" />
  <link rel="apple-touch-icon" href="images/sreeven.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="css/side.css" rel="stylesheet">
  <script src="js/side.js"></script>

</head>

<body>
  <div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <a href="#"></a>
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="sidebar-header">
          <div class="user-pic">
            <img class="img-responsive img-rounded" src="images/kkm-logo.png" alt="User picture">
          </div>
        </div>
        <div class="text-center">
          <span class=" text-light"><i class="fas fa-user-circle fa-2x"></i><br>&nbsp;<strong>(<?php echo $_SESSION['loginname']; ?>)</strong></span>
        </div><br>

        <div class="sidebar-menu">
        <?php include 'sidenav.php' ?>


    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content">
      <div class="container-fluid">
        <h2>Customers</h2><br>
        <?php if($userdatacount > 0){?>
        <div class="row">
          <div class="col-lg-12 text-center">
          
            <table class="table table-bordered col-md-8">

              <thead>
                <tr>
                  <th>Customer id</th>
                  <th>Customer Name</th>
                  <th>Mobile number</th>
                  <th>Card Selected</th>
                  <th>Payment</th>
                  <th>Added by</th>
                </tr>
              </thead>
              <?php while($datarows = mysqli_fetch_assoc($excute_selqry)){?>
              <tr>
                <td><?php echo $datarows['form_id']; ?></td>
                <td><?php echo $datarows['name_of_applicant']; ?></td>
                <td><?php echo $datarows['whatsapp_number']; ?></td>
                <td><?php echo $datarows['cardmembership']; ?></td>
                <td><?php echo $datarows['paymentstatus']; ?></td>
                <td><?php echo $datarows['executives']; ?></td>
              </tr>
              <?php } ?>
            </table>
            
          </div>
        </div>
        <?php } else {
          echo "<br><div class='container text-center'><Strong>No Data Available!!!</strong></div>";
        }?>
      </div>

    </main>
    <!-- page-content" -->
  </div>
  <!-- page-wrapper -->
  <script src="js/cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="js/maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>