<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CANDREAM</title>
    <!-- Google fonts -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>

    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="<?php echo $this->config->item('base_url').'student_assets/assets/css/style-starter.css'?>">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top" style="">

            <nav class="navbar navbar-expand-sm bg-light navbar-light">
                <a class="navbar-brand" href="index.html"><i class="fas fa-graduation-cap"></i>Candream
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?=site_url('Welcome/studentHome')?>"><h5>Home</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=site_url('Welcome/checkConsultancy')?>"><h5>Consultancy</h5></a>
                        </li>
                        <li class="nav-item" style="display:none;">
                            <a class="nav-link" href="<?=site_url('Welcome/checkEligibility')?>"><h5>Check Eligibility</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=site_url('Welcome/applyForAdmission1')?>"><h5>Apply for Admission</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=site_url('Welcome/admissionStatus')?>"><h5>Application Status</h5></a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="<?=site_url('Welcome/notification')?>"><h5>Applications</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=site_url('Welcome/logout')?>"><h5>Logout</h5></a>
                        </li>
                     
                    </ul>
                     <ul class="fas fa-user-alt" >
                        <?php echo '<h5>'.$this->session->userdata('username').'</h5>'; ?>
                    </ul>
            </nav><br><br><br><br>
        </div>
    </header>
    <!-- //header -->
