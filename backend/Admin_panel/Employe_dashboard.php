<?php
session_start();
if (!isset($_SESSION['login_status'])) {
  header('location: ../adminlogin.php');
}
include '../database.php';
$qry = "select * from employeelist";
$sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
$countemp = mysqli_num_rows($sql);

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
            <img class="img-responsive img-rounded" src="../dashboard/images/kkm-logo.png" alt="User picture">
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
        <h2>Employee List</h2>

        <div class="row">
          <div class="col-lg-12 text-center">
            <table class="table table-bordered col-md-8">

              <thead>
                <tr>
                  <th>Employee id</th>
                  <th>Employee Name</th>
                  <th>Username</th>
                  <!-- <th>Number of cards sold</th> -->
                  <th>Remove</th>
                </tr>
              </thead>
              <?php if ($countemp > 0) {
                while ($row = mysqli_fetch_assoc($sql)) { ?>
                  <tr>
                    <td><?php echo $row['empid'] ?></td>
                    <td><?php echo $row['empname'] ?></td>
                    <td><?php echo $row['empmail'] ?></td>
                    <!-- <td>0</td> -->
                    <?php  echo "<td><a href='../SuperAdmin/removeemployee.php?id=".$row['empid']."'><i class='fa fa-trash-alt'></i></a></td>"; ?>
                    <!-- <td>3</td>
                <td><a href='viewagent.php?id=3&type=frnc' target='_blank'>aditya</a></td>
                <td>aditya@gmail.com</td>
                <td>0</td>
                <td><a href='remove.php?id=3&type=franchise'>Remove</a></td> -->
                  </tr>
              <?php }
              } ?>
            </table><!-- Trigger the modal with a button -->
            <?php if($row1['adminemail'] == $username || $row2['admin2email'] == $username){ ?>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Employee</button>
            <?php } ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="../SuperAdmin/adds/addemplist.php" method="POST">
                      <div class="form-group">

                        <input type="text" class="form-control" name="empname" id="recipient-name" placeholder="Enter Employee Name" title=" Name should contain only characters" required>
                      </div>
                      <div class="form-group">

                        <input type="text" class="form-control" id="recipient-name" placeholder="Enter employee  Aadhar Number" name="empaadhar" title="Aadhar Should Conatin only Numbers" required>
                      </div>
                      <div class="form-group">

                        <input type="text" class="form-control" id="recipient-name" placeholder="Enter employee  PAN Number" name="emppan" title="Enter your PAN ID" required>
                      </div>
                      <div class="form-group">

                        <input type="text" class="form-control" id="recipient-name" placeholder="Enter employee  Mobile Number" name="empmobile" title="Enter your Mobile Number" required>
                      </div>
                      <div class="form-group">

                        <input type="email" class="form-control" id="recipient-name" name="empemail" placeholder="Enter employee  Email">
                      </div>
                      <div class="form-group">

                        <input type="text" class="form-control" id="recipient-name" name="empdistrict" placeholder="Enter employee  District">
                      </div>
                      <div class="form-group">

                        <textarea class="form-control" id="message-text" placeholder="Enter employee  Address" name="empaddress"></textarea>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary text-center">Submit</button>
                      </div>

                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

    </main>
    <!-- page-content" -->
  </div>
  <!-- page-wrapper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>