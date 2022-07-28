<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CANDREAM-Home</title>
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

<body>
    <!-- Navbar Start -->
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
              
            </div>
        </div>
    </nav>
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo $this->config->item('base_url').'assets/img/carousel-1.jpg' ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Consultancy Registration</h5>
	<center>
		<form method="post" action="<?=site_url('Consultancycontroller/addConsultancy')?>" enctype="multipart/form-data">
			<table class="table">
			<tr>
				<th data_validate="Required" style="color: white">Name</th>
				<td><input type="text" required="name" class="form-control" name="name"></td>
			</tr>
            <tr>
                <th style="color:white;">Consultancy Fee</th>
                <th>
                    <input type="text" name="fees" class="form-control" required>
                </th>
            </tr>
			<tr>
                <th data_validate="Required" style="color: white">Place</th>
                <td><input type="text" required="place" class="form-control" name="place"></td>
            </tr>
			<tr>
				<th data_validate="Required" style="color: white">Pin</th>
				<td><input type="number" required="pin" class="form-control" name="pin"></td>
			</tr>
			<tr>
				<th data_validate="Required" style="color: white">Phone</th>
				<td><input type="tel" required="phone" class="form-control" name="phone"  pattern="[6-9]{1}[0-9]{9}"></td>
			</tr>
			<tr>
				<th data_validate="Required" style="color: white">Email</th>
				<td><input type="email" required="email" class="form-control" name="email"></td>
			</tr>
            <tr>
                <th data_validate="Required" style="color: white">Website</th>
                <td><input type="text" required="website" class="form-control" name="website"></td>
            </tr>
            <tr>
                <th data_validate="Required" style="color: white">Remarks</th>
                <td><input type="text" required="remarks" class="form-control" name="remarks"></td>
            </tr>
            <tr>
                <th data_validate="Required" style="color: white">
                    Password
                </th>
                <td>
                    <input type="password" name="password" class="form-control" required="password" minlength="8" placeholder="minimun 8 characters required">
                </td>
            </tr>
            <tr>
                <th data_validate="Required" style="color: white">
                    Confirm Password
                </th>
                <td>
                    <input type="password" name="c_password" class="form-control" required="c_password"  minlength="8">
                </td>
            </tr>
			 <tr>
                <th style="color: white">Documents</th>
                <td style="color: white">All documents should be uploaded as a single file.</td>
                <td style="color: white"><input type="file" name="licence" id="licence"></td>
            </tr>
			<tr>
				<td><input class="btn btn-info" type="submit" name="submit" ></td>
			</tr>
			</table>
			
		</form>
	</center>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>candream@gmail.com</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+000 000 00000</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="404.html"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="404.html"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="404.html"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="404.html"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="index.html" class="btn btn-lg btn-dark btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>