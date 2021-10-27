<?php
session_start();
include '../database.php';
$confiramtion = 1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_of_applicant = ($_POST['name_of_applicant']);
    $fathers_name = ($_POST['fathers_name']);
    $date_of_application = ($_POST['date_of_application']);
    $mailing_address = ($_POST['mailing_address']);
    $city = ($_POST['city']);
    $pin = ($_POST['pin']);
    $mobile_1 = ($_POST['mobile_1']);
    $whatsapp_number = ($_POST['whatsapp_number']);
    $email_address = ($_POST['email_address']);

    if (!empty($_FILES['image']['name'])) {
        $image = str_replace(" ", "", $_FILES['image']['name']);
        $info = pathinfo($image);
        $extension = $info['extension'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name, "../dashboard/client-images/" . $image);
    }
    $blood_group = ($_POST['blood_group']);
    $date_of_birth = ($_POST['date_of_birth']);
    $place_of_birth = ($_POST['place_of_birth']);
    $father_name = ($_POST['father_name']);
    $mother_name = ($_POST['mother_name']);
    $married_status = ($_POST['married_status']);
    $pan_card_number = ($_POST['pan_card_number']);
    $aadhar_number = ($_POST['aadhar_number']);
    $cardmembership = $_POST['cardmemberships'];
    $paymentstatus = $_POST['paymentstatus'];
    $executives = $_POST['executives'];
    // $year_of_passing_1 = ($_POST['year_of_passing_1']);
    // $year_of_passing_2 = ($_POST['year_of_passing_2']);
    // $year_of_passing_3 = ($_POST['year_of_passing_3']);
    // $interested_self_emp = ($_POST['interested_self_emp']);
    // $year_of_passing = ($_POST['year_of_passing']);
    // $year_of_passing_4 = ($_POST['year_of_passing_4']);
    // $percentage_marks = ($_POST['percentage_marks']);
    // $percentage_marks1 = ($_POST['percentage_marks1']);
    // $percentage_marks2 = ($_POST['percentage_marks2']);
    // $percentage_marks3 = ($_POST['percentage_marks3']);
    // $percentage_marks4 = ($_POST['percentage_marks4']);
    // $ward_number = ($_POST['ward_number']);
    // $locality = ($_POST['locality']);
    // $area = ($_POST['area']);
    // $ward_incharge_name = ($_POST['ward_incharge_name']);
    // $contact_number = ($_POST['contact_number']);
    // $institute_name1 = $_POST['institute_name1'];
    // $institute_name2 = $_POST['institute_name2'];
    // $institute_name3 = $_POST['institute_name3'];
    // $institute_name4 = $_POST['institute_name4'];
    // $institute_name5 = $_POST['institute_name5'];
    // $ref_name = $_POST['ref_name'];
    // $ref_contact = $_POST['ref_contact'];



    $sel_qry = "select * from customer_form where name_of_applicant='$name_of_applicant'";
    $excute_selqry = mysqli_query($dbc, $sel_qry) or die(mysqli_error($dbc));
    $data_rows = $excute_selqry->fetch_assoc();
    $userdatacount = mysqli_num_rows($excute_selqry);

    if ($userdatacount == 1 && $date_of_birth == $data_rows['date_of_birth'] && $email_address == $data_rows['email_address'] && $aadhar_number == $data_rows['aadhar_number']) {
        echo '<script type="text/javascript">
                    alert("Sorry, Details Already Given!!!");
                    window.location.href= "customerreg.php";
              </script>';
    } else {
        $sql = " INSERT INTO `customer_form` (`name_of_applicant`, `fathers_name`, `date_of_application`, `mailing_address`, `city`, `pin`, `mobile_1`, `whatsapp_number`, `email_address`, `photograph`, `blood_group`, `date_of_birth`, `place_of_birth`, `father_name`, `mother_name`, `married_status`, `pan_card_number`, `aadhar_number`,`cardmembership`, `paymentstatus`, `executives`) VALUES ('$name_of_applicant', '$fathers_name', '$date_of_application', '$mailing_address', '$city', '$pin', '$mobile_1', '$whatsapp_number','$email_address', '$image', '$blood_group', '$date_of_birth', '$place_of_birth', '$father_name', '$mother_name', '$married_status', '$pan_card_number', '$aadhar_number', '$cardmembership', '$paymentstatus', '$executives')";

        $result = mysqli_query($dbc, $sql) or die(mysqli_error($dbc));
        $flag = false;
        if ($confiramtion == 1) {
            $flag = true;
        }
        if ($flag == true) {
            if ($result) {
                $_SESSION['registered_in'] = $name_of_applicant;
                echo '<script type="text/javascript">
                    alert("Submitted Successfully!!!");
                    window.location.href= "customardashboard.php";
                    </script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Something went wrong!!!")';
                echo 'window.location.href= "customerreg.php"';
                echo '</script>';
            }
        }
    }



    $dbc->close();
}
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

    <!-- <link rel="stylesheet" href="cssnew/bootstrap.min.css"> -->
    <link rel="stylesheet" href="cssnew/style.css">

    <script src="js/side.js"></script>
    <style>

    </style>

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
                    <ul>
                        <li class="sidebar-dropdown">
                            <a href="../dashboard/kkm.php">
                                <!-- <i class="far fa-meter"></i> -->
                                <i class="fas fa-chart-line fa-9x"></i>
                                <span>Dashboard</span>

                            </a>

                        </li>

                        <li class="sidebar-dropdown">
                            <a href="../dashboard/Agentdashboard.php">
                                <i class="far fa-user"></i>
                                <span>Agents</span>

                            </a>

                        </li>
                        <li class="sidebar-dropdown">
                            <a href="../dashboard/franchizedashboard.php">
                                <i class="far fa-user"></i>
                                <span>Franchises</span>

                            </a>

                        </li>
                        <li class="sidebar-dropdown">
                            <a href="../dashboard/employlist.php">
                                <i class="far fa-user"></i>
                                <span>Employees</span>
                            </a>

                        </li>
                        <li class="sidebar-dropdown">
                            <a href="../dashboard/Associatedashboard.php">
                                <i class="far fa-user"></i>
                                <span>Associates</span>
                            </a>
                        </li>
                        
                        <!-- <li class="sidebar-dropdown">
                            <a href="../dashboard/approvalpending.php">
                                <i class="far fa-user"></i>
                                <span>Approval</span>
                            </a>
                        </li> -->
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-user"></i>
                                <span>Customers</span>

                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="customerreg.php">Customer Registration

                                        </a>
                                    </li>
                                    <li>
                                        <a href="customardashboard.php">Customer List</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="../dashboardlogout.php">
                                <i class="far fa-user"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>

        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <h2 class="text-center">Customer Registration Form</h2>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <marquee width="100%" height="20px" style="font-weight: 700; color: rgb(160,39,39,1)">***
                            Kindly, Fill Your
                            Application Details Carefully / Please Try to View in Desktop ***</marquee>
                        <div class="container">

                            <form action="customerreg.php" method="POST" class="agile_form" enctype="multipart/form-data">
                                <div class="row" style="padding-top: 20px;">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <label>Name Of
                                            Vendor</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="" name="name_of_applicant" value="" required="" pattern="[a-zA-Z]+" title="A name must contain letters between a and z"></br>

                                        <label>Organization Name</label>&nbsp;&nbsp;<input type="text" id="" name="fathers_name" value="" required="" pattern="[a-zA-Z]+" title="A name must contain letters between a and z"></br>
                                        <label>City</label><input type="text" id="" name="city" value="" required="" pattern="[a-zA-Z]+" title="A name must contain letters between a and z">

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <label>Date of
                                            Application</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" id="" name="date_of_application" value="">
                                        <label>Blood Group</label>

                                        <select id="blood" name="blood_group">
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                        <label>Pin</label>&nbsp;&nbsp;<input type="text" id="" name="pin" value="" maxlength="6" minlength="3" required="" pattern="[0-9]*" title=" pin number must contain numbers between 0 and 9"></br>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <img id="output" width="200" height="250px">
                                        <input type="file" id="myFile" name="image" placeholder="Upload image" style="    margin: 0px 0px 0px 70px;
                                    ">
                                        <input type="file" accept="image/*" name="imagename" id="file" onchange="loadFile(event)" style="display: none;">

                                        <script>
                                            var loadFile = function(event) {
                                                var image = document.getElementById('output');
                                                image.src = URL.createObjectURL(event.target.files[0]);
                                            };

                                            function ValidateSize(file) {
                                                var FileSize = file.files[0].size / 1024 / 1024; // in MiB
                                                if (FileSize > 2) {
                                                    alert('File size exceeds 2 MB');
                                                    // $(file).val(''); //for clearing with Jquery
                                                    return true;
                                                } else {
                                                    return false;
                                                }
                                            }


                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        $('#output').attr('src', e.target.result);
                                                    }

                                                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                                                }
                                            }

                                            $("#myFile").change(function() {
                                                readURL(this);
                                            });
                                        </script>
                                    </div>
                                </div>


                                <div class="row" style="padding-top: 20px;">
                                    <div class="col-lg-6 col-md-4 col-sm-6">
                                        <label>Mailing Address</label><textarea type="text" id="" name="mailing_address" value="" required="" pattern="[a-zA-Z]+" title="A name must contain letters between a and z">
                               </textarea>


                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-2"></div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>Date of
                                            Birth</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" id="" name="date_of_birth" value="" required="please, enter your date of birth">
                                        <label>GST: </br>Do You Have GSTNumber</label>
                                        <input type="radio" checked="checked" name="radio">&nbsp;Yes&nbsp;&nbsp;
                                        <input type="radio" checked="checked" name="radio">&nbsp;&nbsp;no
                                        <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                                        <input type="text" id="" value="" placeholder="Enter your GST Number">


                                    </div>

                                </div>


                                <div class="row">
                                    <h4 style="text-align: center; border: 1px solid rgb(199, 169, 169); width: 100%;; background-color: rgb(208, 213, 218);">
                                        Contact Details</h4>
                                    <div class="col-lg-4 col-md-4 col-sm-4">

                                        <label>Mobile
                                            1</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="" name="mobile_1" value="" maxlength="10" minlength="10" required="" pattern="[0-9]*" title="A phone number must contain numbers between 0 and 9"></br>
                                        <label for="fname">WhatsApp Number</label>&nbsp;&nbsp;
                                        <input type="text" id="" name="whatsapp_number" value="" maxlength="10" minlength="10" required="" pattern="[0-9]*" title="A phone number must contain numbers between 0 and 9"></br>

                                        <label for="fname">Email
                                            Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="" name="email_address" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="An email must follow the format example@email.com" required="">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>Place of Birth</label>
                                        <input type="text" id="" name="place_of_birth" value="" required="" pattern="[a-zA-Z]+" title="A name must contain letters between a and z">
                                        <label>&nbsp;&nbsp;&nbsp;&nbsp;Father&nbsp;Name</label><input type="text" id="" name="father_name" value="" pattern="[a-zA-Z]+" title="A name must contain letters between a and z">

                                        <label>&nbsp;&nbsp;&nbsp;&nbsp;Mother&nbsp;Name</label><input type="text" id="" name="mother_name" value="" pattern="[a-zA-Z]+" title="A name must contain letters between a and z">

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>Married Status</label>
                                        <input type="text" id="" name="married_status" value="" placeholder="SINGLE/MARRIED">
                                        <label> PAN CARD NUMBER</label>
                                        <input type="text" id="" name="pan_card_number" value="" style="text-transform: uppercase;">
                                        <label>AADHAR NUMBER</label>
                                        <input type="text" id="" name="aadhar_number" value="" maxlength="12" minlength="12" required="" pattern="[0-9]*" title="A Aadhar number must contain numbers between 0 and 9">
                                    </div>

                                </div>
                                <!-- <div class="row">
                                <h4
                                    style="text-align: center; border: 1px solid rgb(199, 169, 169); background-color: rgb(208, 213, 218);">
                                    Educational Details</h4>
                
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <p class="text-center">Institute Name</p>
                                    <input type="text" id="" name="institute_name1" value="" placeholder=>
                
                                    <input type="text" id="" name="institute_name2" value="">
                
                                    <input type="text" id="" name="institute_name3" value="">
                                    <input type="text" id="" name="institute_name4" value="">
                                    <input type="text" id="" name="institute_name5" value="">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <p class="text-center">Passed Out Year</p>
                                    <input type="text" id="" name="year_of_passing" value="" placeholder=>
                
                                    <input type="text" id="" name="year_of_passing_1" value="">
                
                                    <input type="text" id="" name="year_of_passing_2" value="">
                                    <input type="text" id="" name="year_of_passing_3" value="">
                                    <input type="text" id="" name="year_of_passing_4" value="">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <p class="text-center">Percentage / Grade</p>
                
                                    <input type="text" id="" name="percentage_marks" value="" placeholder=>
                
                                    <input type="text" id="" name="percentage_marks1" value="">
                
                                    <input type="text" id="" name="percentage_marks2" value="">
                                    <input type="text" id="" name="percentage_marks3" value="">
                                    <input type="text" id="" name="percentage_marks4" value="">
                                </div>
                            </div> -->
                                <div class="row">
                                    <h4 style="text-align: center; width: 100%; border: 1px solid rgb(199, 169, 169); background-color: rgb(208, 213, 218);">
                                        Payment Details </h4>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>Card Type </label>

                                        <select name="cardmemberships" id="sem">
                                            <option value="basic">Basic</option>
                                            <option value="Standard">Standard</option>
                                            <option value="gold">Gold</option>
                                            <option value="diamond">Diamond</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>Payment </label>

                                        <select name="paymentstatus" id="sem">
                                            <option value="Paid">Paid</option>
                                            <option value="Not Paid/ Pending">Not Paid/ Pending</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label>Added By</label>

                                        <select name="executives" id="branch">
                                            <option value="Agent">Agent</option>
                                            <option value="Employee">Employee</option>
                                            <option value="Franchizer">Franchizer</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                    </div>
                                    <!-- <div class="col-6">

                                    </div> -->

                                </div>

                                <input class="btn btn-sub" type="submit" value="Submit">
                                <!-- <a href="showdetails.php"><input class="btn btn-sub" type="button" value="Show My Details"></a> -->

                        </div>
                    </div> <br><br>
                    <!--
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add New Agent</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                         
                          <input type="text" class="form-control" id="recipient-name" placeholder="Enter Agent  Agent Name">
                        </div>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="recipient-name"  placeholder="Enter Agent  Adhar Number">
                        </div><div class="form-group">
                          
                          <input type="text" class="form-control" id="recipient-name"  placeholder="Enter Agent  PAN Number">
                        </div>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="recipient-name"  placeholder="Enter Agent  Mobile Number">
                        </div>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="recipient-name"  placeholder="Enter Agent  Email">
                        </div>
                        <div class="form-group">
                          
                          <input type="text" class="form-control" id="recipient-name"  placeholder="Enter Agent  District">
                        </div>
                        <div class="form-group">
                          
                          <textarea class="form-control" id="message-text" placeholder="Enter Agent  Address"></textarea>
                        </div>
                        <div class="text-center">
                          <button type="button" class="btn btn-primary text-center" >Submit</button>
                        </div>
                        
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
          </div> -->

                </div>

        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="js/cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="js/maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>