<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Single Product</title>

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
								
								<li><a href="<?php echo base_url('pembeli/kontak') ?>">Contact</a></li>
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
						<p>See more Details</p>
						<h1>Pesan Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
            <?php foreach ($produk as $s) { ?>
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="<?php echo base_url();?>upload/foto/<?php echo $s->foto;?>" width="300" height="300" alt="">
					</div>
				</div>
				
				<div class="col-md-7">
					<div class="single-product-content">
						<h3><?php echo $s->nama_produk?></h3>
						<p class="single-product-pricing"><span>Per pcs</span><?php echo $s->harga_produk?></p>
						<div class="single-product-form">
					
					<form class="form-horizontal" action="<?php echo base_url('pembeli/order/tambah'); ?>" method="post" enctype="multipart/form-data">		
					<label class="col-md-3"><b>Jumlah Order : </b></label>
					<input type="number" class="col-md-3" id = "jumlah_order" value="0" name= "jumlah_order">
					<br>
					
					<input type="hidden"  class="form-control" name="id_produk" value="<?php echo $s->id_produk;?>" required="">
					<input type="hidden"  class="form-control" name="id_user" value="<?php echo $id_user;?>" required="">
						
					<input type="hidden" class="form-control" value="<?php echo ($number[0]['kode_pesan'] + 1) ?>" name="kode_pesan" required="" >
					<input type="hidden" class="form-control" value="<?= $s->harga_produk?>" id="harga_produk">
					<!-- <input type="text" class="form-control" value="" id="total" name="total_bayar" required="" > -->
					<label class="col-md-3"><b>Total Harga : </b></label>
					<input type="number" class="col-md-3" id = "total" name= "total_bayar" readonly>

						<br>
						<!-- <button type="submit" class="cart-btn"><i class="fa fa-shopping-cart"></i> PESAN</button> -->
						<input type="submit" value="Pesan">
						<!-- <a type="submit"  class="cart-btn"><i class="fas fa-shopping-cart"></i>PESAN</a> -->
							
						</div>
						</form>
						
						
					</div>
					
					<div class="form-group">
				
				</div>
					
				
                <?php } ?>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->

	<!-- end logo carousel -->

	<br><br><br>
	
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
	<!-- main js -->
	<script src="<?php echo base_url();?>assets_front/assets/js/main.js"></script>

	
	<script>
		
		console.log();
		$("#jumlah_order").keyup(function(){
		var a = $("#harga_produk").val();
		var b = $("#jumlah_order").val();
		var f = a*b;
		// console.log("haha");

		$("#total").val(f);
			});
	</script>

</body>
</html>