
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo $this->config->item('base_url').'assets/css/bootstrap/style.css' ?>">
	 <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo $this->config->item('base_url').'assets/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo $this->config->item('base_url').'assets/css/style.css' ?>" rel="stylesheet">
	</head>
	<body style="background-image: url(<?php echo $this->config->item('base_url').'assets/images/img4.jpg' ?>);">
		<nav style="" class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
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
                <a href="<?=site_url('Universitycontroller/universityRegistration')?>" class="nav-item nav-link">University Registration</a>
                <a href="<?=site_url('Consultancycontroller/consultancyRegistration')?>" class="nav-item nav-link">Consultancy Registration</a>
               
            </div>
        </div>
    </nav>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Login</h3>
						<form action="loginRole" method="post" class="login-form">
							
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="pass" class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	
					<u><a href="signup" style="color:black;" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign up
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a></u>
								
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

