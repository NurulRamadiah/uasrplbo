<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Contact</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets_front/assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_front/assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_front/assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_front/assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_front/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_front/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_front/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_front/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_front/assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="<?php echo base_url();?>assets_front/assets/img/favicon.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li ><a href="<?php echo base_url('pembeli/home') ?>">Home</a>
								
								</li>
								
								<li class="current-list-item"><a href="<?php echo base_url('pembeli/kontak') ?>">Contact</a></li>
								<li><a href="<?php echo base_url('pembeli/order') ?>">Menu</a></li>
								
								<li>
									<div class="header-icons">
										<a class="history" href="<?php echo base_url('pembeli/pembayaran') ?>"><i class="fas fa-history"></i></a>
										<a href="<?php echo base_url('Auth/logout')?>" onclick="return confirm('Apakah anda yakin ingin keluar ?')"><i class="fa fa-sign-out"></i>Log Out</a>
									</div>
								</li>
								
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Get 24/7 Support</p>
						<h1>Contact us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Have you any question?</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Name" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone">
								<input type="text" placeholder="Subject" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Shop Address</h4>
							<p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Shop Hours</h4>
							<p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->





	
	<!-- copyright -->
    <div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2021 - <a href="#">Kelompok RPLBO</a>,  All Rights Reserved.<br>
						
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="<?php echo base_url();?>assets_front/assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url();?>assets_front/assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="<?php echo base_url();?>assets_front/assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="<?php echo base_url();?>assets_front/assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="<?php echo base_url();?>assets_front/assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="<?php echo base_url();?>assets_front/assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="<?php echo base_url();?>assets_front/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="<?php echo base_url();?>assets_front/assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="<?php echo base_url();?>assets_front/assets/js/sticker.js"></script>
	<!-- form validation js -->
	<script src="<?php echo base_url();?>assets_front/assets/js/form-validate.js"></script>
	<!-- main js -->
	<script src="<?php echo base_url();?>assets_front/assets/js/main.js"></script>
	
</body>
</html>