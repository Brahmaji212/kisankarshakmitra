<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../dashboard/images/kkm-logo.png" />
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

	<div class="limiter">
		<div class="container-login100" style="background-image: url(images/back.png);">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../img/kkm-logo.png" alt="IMG">
				</div>

				<form method="POST" action="admin2log.php" class="login100-form " onSubmit="return checkPassword(this)">
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100 ">
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 ">
						<input class="input100" type="password" id="psw" name="pass" placeholder="Password" placeholder="Password" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						<span class="focus-input100"></span>
						<!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<!-- <div class="wrap-input100 "> 
						<input class="input100" type="password" id="conpsw" name="pass" placeholder="Confirm Password" required >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>-->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
						<button class="btn"><a href="../index.html">Home</a></button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<!-- <div class="text-center">
						<a class="txt2" href="registerAdmin.html">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>


	<script type="text/JavaScript ">
		// Function to check Whether both passwords 
		// is same or not. 
		function checkPassword(form) {
			psw = form.psw.value;
			conpsw = form.conpsw.value;

			// If password not entered 
			if (psw == ''){
				alert('Please enter Password');
			}
			// If confirm password not entered 
			else if (conpsw == ''){
				alert('Please enter confirm password');
			}
			// If Not same return False.     
			else if (psw != conpsw) {
				alert('Password did not match: Please try again..');
				return false;
			} else if (psw < 8){
				alert("Password is not strong ")
			}
			var pass=document.getElementById("psw")
               pass.addEventListner('keyup',function() {
                   checkPassword(pass.value);
               });
			}

	</script>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>