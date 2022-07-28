
<!DOCTYPE html>
<head>
<title>Candream</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Custom CSS -->
<link href="<?php echo $this->config->item('base_url').'/admin_assets/css/style.css'?>" rel='stylesheet' type='text/css' />
<link href="<?php echo $this->config->item('base_url').'/admin_assets/css/style-responsive.css'?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo $this->config->item('base_url').'/admin_assets/css/font.css'?>" type="text/css"/>
<link href="<?php echo $this->config->item('base_url').'/admin_assets/css/font-awesome.css'?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo $this->config->item('base_url').'/admin_assets/js/jquery2.0.3.min.js'?>"></script>
</head>
<body style="">
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
                <a href="<?=site_url('Universitycontroller/universityRegistration')?>" class="nav-item nav-link">University Registration</a>
                <a href="<?=site_url('Consultancycontroller/consultancyRegistration')?>" class="nav-item nav-link">Consultancy Registration</a>
                <a href="<?=site_url('Admincontroller/adminLogin')?>" class="nav-item nav-link">Admin</a>
            </div>
        </div>
    </nav>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>
		<form action="checkAdminLogin" method="post">
			<input type="text" class="ggg" name="username" placeholder="Enter Username" required="">
			<input type="password" class="ggg" name="password" placeholder="Enter Password" required="">
			
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		
</div>
</div>

