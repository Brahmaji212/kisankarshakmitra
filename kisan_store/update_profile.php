
<?php 
include 'backend/database.php';
session_start();

if (!isset($_SESSION['login_status'])) {
    header('location: backend/login.php');
}


 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    include 'backend/database.php';

    $filename = $_FILES["fileInput"]["name"];
    $tempname = $_FILES["fileInput"]["tmp_name"];	
    $folder = "img/profile/".$filename;


    $username=$_SESSION['loginname'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $middle_name=$_POST['middle_name'];
    $email=$_POST['email'];
    $alt_email=$_POST['alt_email'];
    $phone=$_POST['phone'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $pin=$_POST['pin'];
    $area=$_POST['area'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    
    if (move_uploaded_file($tempname, $folder)) { 

    $query="update `store_customer_registration` set `first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',
    `email`='$email',`alt_email`='$alt_email',`phone`='$phone',`address1`='$address1',`address2`='$address2',`pin`='$pin',
    `area`='$area', `state`='$state', `country`='$country',`profile_img` = '$filename' where  `email`='$username'";
    $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
    }else{
        $query="update `store_customer_registration` set `first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',
        `email`='$email',`alt_email`='$alt_email',`phone`='$phone',`address1`='$address1',`address2`='$address2',`pin`='$pin',
        `area`='$area', `state`='$state', `country`='$country' where  `email`='$username'";
        $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
    }
    if($sql) {
        //session_start();
        //$_SESSION['product']=$proname;
        echo '<script>';
        echo 'alert("Updated Successfully");';
        echo 'window.location.href= "profile.php?id=1"; 
              </script>';
      }else{
        echo '<script>';
        echo 'alert("Unable To Submit Details");';
        echo 'window.location.href= "profile.php?id=1"; 
              </script>';
      }

}
$dbc->close();
?>