<?php
session_start();
if (!isset($_SESSION['login_status'])) {
  header('location: ../adminlogin.php');
}
include '../database.php';
$qry = "select * from associateslist";
$sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
$countassociates = mysqli_num_rows($sql);


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
        <h2>ASSOCIATES</h2>

        <div class="row">
          <div class="col-lg-12 text-center"><br>
            <?php if ($countassociates > 0) { ?>
              <table class="table table-bordered col-md-8">

                <thead>
                  <tr>
                    <th>Associate ID</th>
                    <th>Associate Name</th>
                    <th>Username</th>
                    <!-- <th>Number of cards sold</th> -->
                    <th>Remove</th>
                  </tr>
                </thead>
                <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
                  <tr>
                    <td><?php echo $row['assoid'] ?></td>
                    <td><?php echo $row['assoname'] ?></td>
                    <td><?php echo $row['assoemail'] ?></td>
                    <!-- <td>0</td> -->
                    <?php
                    if($row1['adminemail'] == $username || $row2['admin2email'] == $username){ 
                      echo "<td><a  href='../remove/removeassociates.php?id=".$row['assoid']."'><i class='fa fa-trash-alt' onClick=\"javascript: return confirm('Please confirm deletion');\"></i></a></td>"; 
                  } else {
                  echo "<td><a href='#'><i class='fa fa-trash-alt' onClick=\"javascript: return confirm('You are not Autharized Super Admin to DELETE');\"></i></a></td>"; 
                  }
                  ?>
                    
                  </tr>
                <?php
                }
                ?>
              </table>
            <?php } else { ?>
              <!-- Trigger the modal with a button -->
              <strong>No Data Available!!!</strong>
              <br>
              <br>
            <?php } ?>
            <?php if($row1['adminemail'] == $username || $row2['admin2email'] == $username || $row3['regemail'] == $username){ ?>
            <button class="btn btn-info" type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Associate</button>
              <?php } ?>
          </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Associate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="../adds/addassociates.php" method="POST">
                  <div class="form-group">

                    <input type="text" class="form-control" id="recipient-name" name="nameassociates" title="Please Enter 'Your' Name" required="" placeholder="Enter Associate Name" >
                  </div>
                  <div class="form-group">

                    <input type="text" class="form-control" id="recipient-name" name="assnameaadhar" placeholder="Enter Associate  Aadhar Number" title="please enter your Aadhar Number" >
                  </div>
                  <div class="form-group">

                    <input type="text" class="form-control" id="recipient-name" name="asspannumber" placeholder="Enter Associate  PAN Number" title="please enter your PAN Number" style="text-transform:uppercase" required>
                  </div>
                  <div class="form-group">

                    <input type="text" class="form-control" id="recipient-name" placeholder="Enter Associate  Mobile Number" name="assmobilenumber" title="please enter your Mobile Number">
                  </div>
                  <div class="form-group">

                    <input type="email" class="form-control" name="assemail" id="recipient-name" placeholder="Enter Associate  Email">
                  </div>
                  <div class="form-group">

                    <input type="text" class="form-control" name="assdistrict" id="recipient-name" placeholder="Enter Associate  District">
                  </div>
                  <div class="form-group">

                    <textarea class="form-control" name="assaddress" id="message-text" placeholder="Enter Associate  Address"></textarea>
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

    </main>
    <!-- page-content" -->
  </div>
  <!-- page-wrapper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>