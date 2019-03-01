<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Fundgogo | Pitch | Fund | Grow</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css">
	<!--font awesome-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/fontawesome-all.min.css">
    
    <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/nivo-lightbox.css">
    <!-- Animate -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/iofrm-theme4.css">
	
	
	<!-- custom css Style -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css" >
	
	
	
	
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="<?=base_url()?>home/" class="navbar-brand"><img src="<?=base_url()?>assets/img/logo.png" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#feature">
                  Feature
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Team
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolios">
                  Works
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonial">
                  Testimonial
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>
			  <?php
			  if(empty($_SESSION['user'])){
			  ?>
              <li class="nav-item">
					<a href="<?=base_url()?>/home/login" class="btn btn-common" >Sign In </a>
					<a href="<?=base_url()?>/home/register" class="btn btn-common" > Sign Up</a>
			  </li>
			  <?php
			  }
			  ?>
            </ul>
          </div>
        </div>
      </nav>
	</header>
      <!-- Navbar End -->