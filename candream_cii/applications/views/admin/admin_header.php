<!DOCTYPE html>
<head>
<title>Candream</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo $this->config->item('base_url').'/admin_assets/css/bootstrap.min.css'?>" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo $this->config->item('base_url').'/admin_assets/css/style.css'?>" rel='stylesheet' type='text/css' />
<link href="<?php echo $this->config->item('base_url').'/admin_assets/css/style-responsive.css'?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo $this->config->item('base_url').'/admin_assets/css/font.css'?>" type="text/css"/>
<link href="<?php echo $this->config->item('base_url').'/admin_assets/css/font-awesome.css'?>" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo $this->config->item('base_url').'/admin_assets/css/morris.css'?>" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?php echo $this->config->item('base_url').'/admin_assets/css/monthly.css'?>">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?php echo $this->config->item('base_url').'/admin_assets/js/jquery2.0.3.min.js'?>"></script>
<script src="<?php echo $this->config->item('base_url').'/admin_assets/js/raphael-min.js'?>"></script>
<script src="<?php echo $this->config->item('base_url').'/admin_assets/js/morris.js'?>"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        CANDREAM
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->

</div>

</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a style="color: white">
                        <?php echo '<h5>Login : '.$this->session->userdata('username').'</h5>'; ?>
                        </a>
                   </li> 
                <li class="nav-item">
                    
                        <a class="nav-link" href="<?=site_url('Admincontroller/adminHome')?>">Home</a>
                    
                </li>
                <li class="nav-item">
                    
                        <a class="nav-link" href="<?=site_url('Admincontroller/adminManageConsultancy')?>">Manage Consultancy</a>
                    
                </li>
                <li style="display:none;">
                    <a class="active" href="adminManageAdmission">
                        <i class="fa fa-dashboard"></i>
                        <span>Manage Admission</span>
                    </a>
                </li>
                <li class="nav-item">
                    
                        <a class="nav-link" href="<?=site_url('Admincontroller/adminManageUniversity')?>">Manage University</a>
                </li>

                 <li >
                    <a class="active" href="<?=site_url('Admincontroller/adminManageCourses')?>">
                        
                        <span>Manage Courses</span>
                    </a>
                </li>
                <li class="nav-item">
                    
                        <a class="nav-link" href="<?=site_url('Admincontroller/calender')?>">Calender</a>
                </li>
                <li class="nav-item">
                    
                        <a class="nav-link" href="<?=site_url('Admincontroller/adminChangePassword')?>">Change password</a>
                </li>
                <li class="nav-item">
                    
                        <a class="nav-link" href="<?=site_url('Admincontroller/adminLogout')?>">Logout</a>
                </li>
                
            </ul>           
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>