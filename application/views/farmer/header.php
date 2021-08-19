<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Krishvilla.lk - We deliver fresh & organic vegetables & fruits</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/style.css">

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>source/css/style.css">
	<script src="<?php echo base_url(); ?>source/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>source/jquery.min.js"></script>
  </head> 

  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md-2 pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+94112255255</span>
					    </div>
					    <div class="col-md-2 pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">krishvilla@gmail.com</span>
					    </div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						<marquee direction="left"><span class="text">
							<?php if(isset($_SESSION['logged_user'])){
										echo "Welcome ".($_SESSION['logged_user'])." to Krish Villa Organic online portal";
											}?></span></span></marquee>
					    </div>
					    <div class="col-md-3 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">5 working days delivery</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home/index">Krish Villa <br> Organic</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo base_url(); ?>index.php/farmer/index" class="nav-link">Home</a></li>

			
        <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/farmer/about" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/farmer/contact" class="nav-link">Contact Us</a></li>
        
        <li class="nav-item"><a href="#" class="nav-link">
            <?php if(isset($_SESSION['logged_user'])){
              echo ($_SESSION['logged_user']);
              }else{
                echo "Login";
              }?></a></li>

		<li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="oi oi-menu"></span>
                <!-- <img class="img-profile rounded-circle"
                    src="img/thumbnail_F46198BBD2464727B69472BAF81C8AA9.png"> -->
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../student.html">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/login/logout" >
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
	      
      </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->