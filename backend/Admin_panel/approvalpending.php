<?php
session_start();
include 'database.php';
if (!isset($_SESSION['login_status'])) {
    header('location: ../adminlogin.php');
}

$qry = "select * from agents";
$sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
$countagents = mysqli_num_rows($sql);

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
    <title>Sreeven&nbsp;Dashboard</title>
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
         
                <?php include 'sidenav.php'; ?>

        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <h2>Agents</h2>

                <div class="row">
                    <div class="col-lg-12 text-center">
                    <?php if ($countagents > 0) {?>
            <table class="table table-bordered col-md-8">

              <thead>
                <tr>
                  <th>Agent id</th>
                  <th>Agent Name</th>
                  <th>Username</th>
                  <th>Approval</th>
                  <!-- <th>Number Of Cards Sold</th> -->
                  <th>Remove</th>

                </tr>
              </thead>
              <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
                  <tr>
                    <td><?php echo $row['agentid'] ?></td>
                    <td><?php echo $row['agentname'] ?></td>
                    <td><?php echo $row['agentemail'] ?></td>
                    <?php if($row['Approval']== 'pending'){ ?>
                    <td align="">
                        <a href='approveagent.php?id=<?php echo $row['agentid'] ?>' class='btn btn-success'
                         onClick="javascript: return confirm('Confirm Approval');">Approve</a>
                    </td>
                    <?php } 
                    if($row['Approval']== 'Success'){ ?>
                    <td>
                        <a style="color:white; background-color:red;" href='disapprove.php?id=<?php echo $row['agentid'] ?>'
                         class='btn btn-success ' onClick="javascript: return confirm('Confirm Dis Approval');">Dis Approve</a>
                    </td>
                     <?php } ?>
                    <!-- <td>0</td> -->
                    <?php
                    if($row1['adminemail'] == $username || $row2['admin2email'] == $username ){ 
                      echo "<td><a  href='../remove/removeagents.php?id=".$row['agentid']."'><i class='fa fa-trash-alt' onClick=\"javascript: return confirm('Please confirm deletion');\"></i></a></td>"; 
                  } else {
                  echo "<td><a href='#'><i class='fa fa-trash-alt' onClick=\"javascript: return confirm('You are not Autharized Super Admin to DELETE');\"></i></a></td>"; 
                  }
                  ?>
                  </tr> <?php
                      }
                        ?>
            </table><!-- Trigger the modal with a button -->
          <?php } else {
                echo "<strong>No Agents Found</strong>";
              } ?> <br>
                        <h1>Assosciates</h1>No Approvals required<br><br>
                        <h1>Franchise</h1>No Approvals required<br><br>
                        <h1>Employee</h1>No Approvals required<br><br>
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