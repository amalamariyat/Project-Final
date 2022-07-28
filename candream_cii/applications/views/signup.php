
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		div.background {
			background-color: black;
			border: 2px solid black;
			width: 200;
			height: 200;
			align-items: center;
		}
		div.transpox {
			margin: 30px;
			background-color: #ffffff;
			border: 1px solid;
			opacity: 0.6;
		}
		div.transpox p {
			margin: 5%;
			font-weight: bold;
			color: #000000;
		}
	</style>>
	<title>signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="background">
		<div class="transpox">
		<div class="wrap-login50 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="form-group" action="signup.php" method="post" class="login100-form validate-form" style="align-items: center;">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>


					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input50">Name:</span>
						<input class="input80" required="Name" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input50">Email:</span>
						<input class="input80" required="Email" type="email" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid Mobile Number is required">
						<span class="label-input50">Mobile:</span>
						<input class="input80" required="Mobile" type="number" pattern="[0-9]{10}" name="mobno" placeholder="Mobile Number...">
						<span class="focus-input100"></span>
					</div>



					<div class="wrap-input100 validate-input" data-validate = "State is required">
						<label class="input80" for="state" class="input100">State:</label>
						<select name="state" id="state">
							<option value="Select"></option>>
							<option value="kerala">Kerala</option>
						</select>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "District is required">
						<label class="input80" for="state" class="input100">District:</label>
						<select name="district" id="district">
							<option value="Select"></option>>
							<option value="Thiruvananthapuram">Thiruvananthapuram</option>
							<option value="Kollam">Kollam</option>
							<option value="Kottayam">Kottayam</option>
							<option value="Idukki">Idukki</option>
							<option value="Ernakulam">Ernakulam</option>
							<option value="Thrissur">Thrissur</option>
						</select>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid Pincode is required">
						<span class="label-input50">Pincode:</span>
						<input class="input80" required="Pincode" type="number" name="pincode" placeholder="Pincode...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input50">Username:</span>
						<input class="input80" required="username" type="email" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input50">Password:</span>
						<input class="input80" required="Password" type="Password" name="password" placeholder="********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input50">Retype Password:</span>
						<input class="input80" required="Password" type="Password" name="repassword" placeholder="********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
						<span class="focus-input100"></span>
					</div>


					
					<div class="container-login100-form-btn">
						<div class="login100-form-btn">
							<div class="wrap-login100-form-bgbtn"></div>
							<button class="login100-form-btn/">
								Sign Up
							</button>
						</div>
						

						<a href="<?=site_url('Welcome/login')?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>