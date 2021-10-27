<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="container">
        <!-- <div class="container-login100" style="background-image: url(images/back.png);"> -->
            <!-- <div class="wrap-login100"> -->
                <div class="login100-pic js-tilt" data-tilt>
                    <img style="margin: 2px 362px;" src="images/sreeven.png" alt="IMG">
                </div>
                <h2>Register&nbsp;For&nbsp;Sreeven&nbsp;Bussiness&nbsp;Promotions</h2><br>
                <form method="post" action="regadmin.php" role="form">
                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Enter Name" pattern="[a-zA-Z]*" title="Please Enter valid name">
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Enter Address">
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Enter Pincode">
                    </div>
                    <div class="form-group">
                        <label>Choose whether customer paid for the card </label><br>
                        <label class="radio-inline">
                            <input type="radio" name="payment" value="paid">&nbsp;Paid</label>
                        <label class="radio-inline">
                            <input type="radio" name="payment" value="unpaid">&nbsp;unpaid</label>
                    </div>
                    <button type="submit" class="btn btn-info">Register</button>
                </form>
            </div>
        <!-- </div> -->
    <!-- </div> -->

</body>
<html>