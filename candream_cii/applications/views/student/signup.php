
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		div.background {
			width: 50%;
			height: 200;
			

			
		}
		.col-75 {
  			float: left;
  			width: 50%;
  			margin-top: 6px;
  		}
		div.transpox {
			margin: 30px;
			background-color: #ffffff;
			border: 3px solid;
			opacity: 0.9;
			

		}
		div.transpox p {
			margin: 5%;
			font-weight: bold;
			color: #000000;
			
		}
	</style>
	<title>signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo $this->config->item('base_url').'assets/images/icons/favicon.ico' ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url').'assets/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url').'assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css' ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url').'assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url').'assets/fonts/iconic/css/material-design-iconic-font.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url').'assets/vendor/animate/animate.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url').'assets/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url').'assets/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url').'assets/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url').'assets/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url').'assets/css/util.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url').'assets/css/main.css' ?>">
<!--===============================================================================================-->
</head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  


<body style="background-image: url(<?php echo $this->config->item('base_url').'assets/images/img4.jpg' ?>);">
	<div style="margin-left:30%;">
		<div class="background">
		<div class="transpox">
		<div class="wrap-login50 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="form-group" name="myForm" id="myForm" action="addSignup" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>
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
						
							<div class="wrap-login100-form-bgbtn"></div>
							<button class="login100-form-btn/"  type="submit"><u>
								Sign Up</u>
							</button>
						
						

						<a href="views/login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30"><u>
							Sign in</u>
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div></div>
	
<!--===============================================================================================-->
	<script src="<?php echo $this->config->item('base_url').'/assets/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->config->item('base_url').'/assets/vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->config->item('base_url').'/assets/vendor/bootstrap/js/popper.js'?>"></script>
	<script src="<?php echo $this->config->item('base_url').'/assets/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->config->item('base_url').'/assets/vendor/select2/select2.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->config->item('base_url').'/assets/vendor/daterangepicker/moment.min.js'?>"></script>
	<script src="<?php echo $this->config->item('base_url').'/assets/vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->config->item('base_url').'/assets/vendor/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo $this->config->item('base_url').'/assets/js/main.js' ?>"></script>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function () {

    $('#myform').validate({ // initialize the plugin
        rules: {
            field1: {
                required: true,
                email: true
            },
            field2: {
                required: true,
                minlength: 5
            }
        }
    });

});
	
</script>

