
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo $this->config->item('base_url').'assets/css/bootstrap/style.css' ?>">

	</head>
	<body>

	<section class="ftco-section">
		<nav style="background-image: url(<?php echo $this->config->item('base_url').'assets/images/img4.jpg' ?>);" class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-dark text-primary"><i class="fab fa-canadian-maple-leaf .text-primary" style="font-color:blue"></i>CANDREAM</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="<?=site_url('Welcome/index')?>" class="nav-link active">Home</a>
                <a href="<?=site_url('Welcome/login')?>" class="nav-item nav-link">Login</a>
      
                <a href="<?=site_url('Consultancycontroller/consultancyRegistration')?>" class="nav-item nav-link">Consultancy Registration</a>
                <a href="<?=site_url('Welcome/about')?>" class="nav-item nav-link">About</a>
                <a href="<?=site_url('Welcome/service')?>" class="nav-item nav-link">Service</a>
                <a href="<?=site_url('Welcome/contact')?>" class="nav-item nav-link">Contact</a>
               
            </div>
        </div>
    </nav>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Have an account?</h3>
						<form action="studentLogin" method="post" class="login-form">
		      		<div class="form-group">
		      			<input type="email" name="username" class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	
					<a href="signup" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign up
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
								
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Sign in</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo $this->config->item('base_url').'assets/js/jquery.min.js' ?>"></script>
  <script src="<?php echo $this->config->item('base_url').'assets/js/popper.js' ?>"></script>
  <script src="<?php echo $this->config->item('base_url').'assets/js/bootstrap.min.js' ?>"></script>
  <script src="<?php echo $this->config->item('base_url').'assets/js/main.js' ?>"></script>

	</body>
</html>

