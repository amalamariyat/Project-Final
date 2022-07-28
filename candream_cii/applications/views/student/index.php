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
                <a href="index.html" class="nav-link active">Home</a>
                <a href="index.php/Welcome/login" class="nav-item nav-link">Login</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
               
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo $this->config->item('base_url').'assets/img/carousel-1.jpg' ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Immigration Consultancy</h5>
                            <h1 class="display-1 text-white mb-md-4">Let your dreams start with us!</h1>
                            
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo $this->config->item('base_url').'assets/img/carousel-2.jpg' ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Immigration Consultancy</h5>
                            <h1 class="display-1 text-white">We are here to give wings to your dreams</h1>
         
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Welcome To <span class="text-dark">CANDREAM</span></h1>
                <h5 class="text-dark mb-4">GREENTREE IMMIGRATION IS AN ICON FOR SHOWING BETTER AND SUITABLE PATHWAY FOR YOUR IMMIGRATION PROCESS WITHOUT ANY FALSE PROMISES</h5>
                <p class="mb-4">You have most of the same rights and obligations as Canadian citizens.

                This is a visa for a lifetime (as long you accumulate 2 years of residency days in each 5 year period).

                After 3 years you can apply for a Canadian citizenship.

                You can then maintain a dual citizenship between Canada and India.</p>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center p-5" style="background-image: url(<?php echo $this->config->item('base_url').'assets/images/img4.jpg' ?>);">
                        <h1 class="text-dark">Why CANDREAM?</h1><br><br>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="ps-4">
                            <h3>Trust</h3>
                            <p class="mb-0">CANDREAM Immigration the Most Reliable and Trusted Brand In Immigration Sector</p>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fas fa-ribbon"></i>
                        </div>
                        <div class="ps-4">
                            <h3>EXPERTS</h3>
                            <p class="mb-0">Our Immigration Experts are trained by Professional and Legal Immigration Lawyers and hence they Owe Real Time Updates</p>
                        </div>
                    </div>
                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="ps-4">
                            <h3>QUALITY</h3>
                            <p class="mb-0">The Standards of service has been lifted up by Eliminating IVR calls in processing Department</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

     <!-- Services Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">What We Offer</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <h3 class="mb-3">Admissions to Universities & Colleges in Canada</h3>
                    <p class="mb-0">450 000 international students currently study in Canada, a figure that is constantly growing.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="mb-3">Canada Study Permit</h3>
                    <p class="mb-0">The standard way to study in Canada is with a Canadian study permit.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="  fas fa-user-tie"></i>
                    </div>
                    <h3 class="mb-3">Work while Studying in Canada</h3>
                    <p class="mb-0">For those who need additional funds while studying in Canada, it may be possible to work at the same time.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3 class="mb-3">Study without a Study Permit</h3>
                    <p class="mb-0">Under certain circumstances, you can study in Canada without a study permit.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fas fa-user-tag"></i>
                    </div>
                    <h3 class="mb-3">Study Permit Extension</h3>
                    <p class="mb-0">If you are looking to extend your stay in Canada as a student or renew your study permit.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fas fa-laptop-house"></i>
                    </div>
                    <h3 class="mb-3">Pathway to Permanent Residency</h3>
                    <p class="mb-0">Canada wants international students who complete their studies in Canada to form a large portion of the next generation of permanent residents.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    



    



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