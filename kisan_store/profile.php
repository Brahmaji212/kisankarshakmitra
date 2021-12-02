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
    $qry1= "select * from order_details where user_id='$username'";
    $sql1 = mysqli_query($dbc, $qry1) or die(mysqli_error($dbc));
    $order_count=mysqli_num_rows($sql1);
//   query for retrive cart
    $qry2= "select * from customer_cart where customer_email='$username' and `Delete`='0'";
    $sql2 = mysqli_query($dbc, $qry2) or die(mysqli_error($dbc));
    $cart_total=mysqli_num_rows($sql2);
//   query for retrive wishlist 
    $qry3 = "select * from  wishlist where  `customer_email`='$username'";
    $sql3 = mysqli_query($dbc, $qry3) or die(mysqli_error($dbc));   
    $wish_count=mysqli_num_rows($sql3);


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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>

<?php include 'header.php'; ?>

<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: grey; background:none;">Profile</h2>
                        <div class="breadcrumb__option">
                        
                            <a href="./index.php" style="color: grey; background:none; ">Home</a>
                            <span style="color:grey;">Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
<body class="profile_body">
    <!-- profile view started  -->
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
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <?php 
                    if($row['profile_img']==NULL){ 
                            echo "<i class='fa fa-user-circle fa-5x '></i> ";

                            } else {
                                $_SESSION['image']=$row['profile_img'];
                                 echo "<img class='rounded-circle mt-5' width='150px' src='img/profile//".$row['profile_img']."' >";  
                            }
             ?>
               <br> <span class="font-weight-bold" style="font-weight: 600; font-size:17px;"><?php echo $row['first_name']." ".$row['last_name'] ?></span>
                <span class="text-black-50"><?php  ?></span><span> </span>
            </div>
            <div class="profile">
            <div class="about_profile"> 
            <div class="row-cols-md-6">
                <label for="orders"> Orders</label>
                <label for="wishlist">Wishlist</label>
                <label for="cart">Cart</label>
            </div>
            <div class="row-cols-md-6">
                <label for="order_details"> <?php echo $order_count; ?> </label>
                <label for="wishlist_details"><?php echo $wish_count; ?></label>
                <label for="cart_details"><?php echo $cart_total; ?></label>
            </div>
            </div> 
            </div>   
            
            
            
            <div class="container data">
            <label for=""><?php echo $row['phone'] ?></label><br>
                <label for=""><?php echo $row['email'] ?></label><br>
                <label for=""><?php echo $row['address1'] ?></label><br>
                <label for=""><?php echo $row['address2'] ?></label><br>
                <label for=""><?php echo $row['state']." ".$row['country'] ?></label>
                
            </div>
        </div>    
        <a href="profile.php?id=2"><i class="fa fa-edit fa-2x"></i></a>
    </div>
    </div>
<?php } ?>
<!-- profile view ended -->

<!-- profile edit  -->
<?php if($_GET['id'] == 2){ ?>
<form action="update_profile.php" method="POST" enctype="multipart/form-data" autocomplete="off">
<div class="container rounded bg-white mt-5 mb-5" >
    
    <div class="row">
        <div class="col-md-3 border-right">
                    <div class="back">
                        <a href="profile.php?id=1"><i class="fa fa-backward fa-2x"></i></a>
                    </div>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <?php if($row['profile_img']==NULL){ 
                        echo "<i class='fa fa-user-circle fa-5x' style='color:rgb(74, 139, 238);'></i> ";

                    } else {
                        echo "<img class='rounded-circle mt-5' width='150px' src='img/profile//".$row['profile_img']."' > 
                        <span class='profile_image'><a href='remove_profile_img.php?id=".$row['user_id']."'  onClick=\"javascript: return confirm('Please confirm deletion');\"> <i class='fa fa-trash fa-2x' style='color: grey; background:whitesmoke; border-radius:40px;'></i> </a></span>";  
                    } ?>
                
               
                
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" name="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block "
                    value="<?php echo 'Edit photo' ?>"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
                <span class="font-weight-bold"><?php echo $row['first_name']." ".$row['last_name'] ?></span>
                <span class="text-black-50"><?php echo $row['email'] ?></span><span> </span>
            </div>
            
        </div>
       
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" name="first_name" class="form-control" placeholder="first name" value="<?php echo $row['first_name'] ?>" autocomplete="off"></div>
                    <div class="col-md-6"><label class="labels">Middle Name</label><input type="text" name="middle_name" class="form-control" value="<?php echo $row['middle_name'] ?>" placeholder="middle name"  autocomplete="off"></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name'] ?>" placeholder="last name"  autocomplete="off"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="phone" class="form-control" placeholder="phone number" value="<?php echo $row['phone'] ?>"  autocomplete="off"> </div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" name="address1" class="form-control" placeholder="enter address line 1" value="<?php echo $row['address1'] ?>"  autocomplete="off"> </div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" name="address2" class="form-control" placeholder="enter address line 2" value="<?php echo $row['address2'] ?>"  autocomplete="off"></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" name="pin" class="form-control" placeholder="Enter postcode" value="<?php echo $row['pin'] ?>"  autocomplete="off"></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" name="state" class="form-control" placeholder="Enter state" value="<?php echo $row['state'] ?>"  autocomplete="off"></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" name="area" class="form-control" placeholder="Enter Area" value="<?php echo $row['area'] ?>" autocomplete="off"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" name="email" class="form-control" placeholder=" email id" value="<?php echo $row['email'] ?>"  autocomplete="off"></div>
                    <div class="col-md-12"><label class="labels">Alternate Email ID</label><input type="text" name="alt_email" class="form-control" placeholder=" alternate email id" value="<?php echo $row['alt_email'] ?>"  autocomplete="off"></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" name="" class="form-control" placeholder="education" value=""  autocomplete="off"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" name="country" class="form-control" placeholder="country" value="<?php echo $row['country'] ?>"  autocomplete="off"></div>
                    <div class="col-md-6"><label class="labels">Region</label><input type="text" name="region" class="form-control" value="" placeholder="state"  autocomplete="off"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" onClick="javascript: return confirm('Click on ok to save the profile');">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><a href="backend/logout.php" class="a">Logout</a></span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""  autocomplete="off"></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""  autocomplete="off"></div>
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

