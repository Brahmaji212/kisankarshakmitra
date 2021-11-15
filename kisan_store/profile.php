<?php
error_reporting(0);
session_start();
include 'backend/database.php';

if (!isset($_SESSION['login_status'])) {
    header('location: backend/login.php');
}

    $username=$_SESSION['loginname'];
    $qry = "select * from store_customer_registration where email='$username'";
    $sql = mysqli_query($dbc, $qry) or die(mysqli_error($dbc));
    $row = mysqli_fetch_assoc($sql);
    
   


?>


<html>
<title> Profile </title>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" type="text/css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/css">
    <link rel="stylesheet" href="css/profilestyles.css" type="text/css">
    <link rel="stylesheet" href="" type="text/css">


    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="cart_admin/font-awesome-animation-1.1.1/package/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="css/orderstyles.css" type="text/css">
  

    </head>

<?php include 'header.php'; ?>


   
<body class="profile_body">
    <?php if($_GET['id'] == 1) { ?>
        <div class="container body">

    <?php 
    echo '<div class="profile_page">
    <form action="profile.php" method="post" >
    
    
    </form>
    </div>' ;
    ?>
    <div class="card badge ">
        <div class="row mt-1">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="cart_admin/img/avatar.png" ><i class='fa fa-camera'></i><span class="font-weight-bold"><?php echo $row['first_name']." ".$row['last_name'] ?></span><span class="text-black-50"><?php echo $row['email'] ?></span><span> </span></div>
            
            
            
            <div class="container data">
                <input type="text" name="first_name" class="form-control" placeholder="first name" value="<?php echo $row['address1']." ".$row['address2']." ".$row['state'] ?>">
                <input type="text" name="first_name" class="form-control" placeholder="first name" value="<?php echo $row['country'] ?>">
                
            </div>
        </div>    
        <a href="profile.php?id=2"><i class="fa fa-edit"></i></a>
    </div>
    </div>
<?php } ?>



<?php if($_GET['id'] == 2){ ?>
<form action="update_profile.php" method="POST" enctype="multipart/form-data" autocomplete="off">
<div class="container rounded bg-white mt-5 mb-5" >
    
    <div class="row">
        <div class="col-md-3 border-right">
                    <div class="back">
                        <a href="profile.php?id=1"><i class="fa fa-backward fa-2x"></i></a>
                    </div>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="cart_admin/img/avatar.png" ><i class='fa fa-camera'></i><span class="font-weight-bold"><?php echo $row['first_name']." ".$row['last_name'] ?></span><span class="text-black-50"><?php echo $row['email'] ?></span><span> </span></div>
        
        </div>
       
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" name="first_name" class="form-control" placeholder="first name" value="<?php echo $row['first_name'] ?>"></div>
                    <div class="col-md-6"><label class="labels">Middle Name</label><input type="text" name="middle_name" class="form-control" value="<?php echo $row['middle_name'] ?>" placeholder="middle name"></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name'] ?>" placeholder="last name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="phone" class="form-control" placeholder="phone number" value="<?php echo $row['phone'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" name="address1" class="form-control" placeholder="enter address line 1" value="<?php echo $row['address1'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" name="address2" class="form-control" placeholder="enter address line 2" value="<?php echo $row['address2'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" name="pin" class="form-control" placeholder="Enter postcode" value="<?php echo $row['pin'] ?>"></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" name="state" class="form-control" placeholder="Enter state" value="<?php echo $row['state'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" name="area" class="form-control" placeholder="Enter Area" value="<?php echo $row['area'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" name="email" class="form-control" placeholder=" email id" value="<?php echo $row['email'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Alternate Email ID</label><input type="text" name="alt_email" class="form-control" placeholder=" alternate email id" value="<?php echo $row['alt_email'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" name="" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" name="country" class="form-control" placeholder="country" value="<?php echo $row['country'] ?>"></div>
                    <div class="col-md-6"><label class="labels">Region</label><input type="text" name="region" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" onClick="javascript: return confirm('Click on ok to save the profile');">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><a href="backend/logout.php" class="a">Logout</a></span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
      
    </div>

</div>
</form>
<?php } ?>
</div>
</div>

<?php include 'footer.php'; ?>
      </body>
 
</html>

