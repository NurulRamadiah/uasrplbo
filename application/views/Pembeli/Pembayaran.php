<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>History</title>

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
								
								<li ><a href="<?php echo base_url('pembeli/kontak') ?>">Contact</a></li>
								<li ><a href="<?php echo base_url('pembeli/order') ?>">Menu</a></li>
								
								<li class="current-list-item">
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
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
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
						<p>Fresh and Organic</p>
						<h1>History</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	
	<div class="cart-section mt-150 mb-150" >
		<div class="container" >
		<div class="breadcrumb-text">
			<p style = "text-align : center;">Pesanan Yang Belum di Bayar</p><br>
		</div>
			<div class="row" >
				<div class="col-lg-12 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table" style = "text-align : center;">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove">Aksi</th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>									
									<th class="product-status">Status</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								foreach ($pembayaran as $s) { 
								?>
								<tr class="table-body-row">
									<td class="product-remove"><a href="<?php echo base_url('pembeli/pembayaran/hapus/'.$s->id_order) ?>"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="<?php echo base_url();?>upload/foto/<?php echo $s->foto;?>" width="50" height="50" alt=""></td>
									<td class="product-name"><?php echo $s->nama_produk?></td>
									<td class="product-price"><?php echo $s->harga_produk?></td>
									<td class="product-quantity"><?php echo $s->jumlah_order?></td>
									<td class="product-total"><?php echo $s->total_bayar?></td>
									<td class="product-total">Belum Bayar</td>
									
								</tr>
								
								<?php } ?>
								
							</tbody>
						</table>
					</div>
				</div>

				
			</div>
		</div>
	</div>

	<div class="cart-section mt-150 mb-150">
		<div class="container">
		<div class="breadcrumb-text">
			<p style = "text-align : center;">History Pesanan</p><br>
		</div>
			<div class="row">
				<div class="col-lg-12 col-md-12" style = "text-align : center;">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
									<th class="product-status">Status</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								foreach ($lunas_pembayaran as $s) { 
								?>
								<tr class="table-body-row">
									<td class="product-image"><img src="<?php echo base_url();?>upload/foto/<?php echo $s->foto;?>" width="50" height="50" alt=""></td>
									<td class="product-name"><?php echo $s->nama_produk?></td>
									<td class="product-price"><?php echo $s->harga_produk?></td>
									<td class="product-quantity"><?php echo $s->jumlah_order?></td>
									<td class="product-total"><?php echo $s->total_bayar?></td>
									<td class="product-total">Sudah Bayar</td>

									
								</tr>
								
								<?php } ?>
								
							</tbody>
						</table>
					</div>
				</div>

				
			</div>
		</div>
	</div>
	<!-- end cart -->

	<!-- logo carousel -->
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
	
	<script>
		var table = document.getElementById("nilai"),sumHsl = 0;
		for (var t = 1; t < table.rows.length; t++) {
			sumHsl = sumHsl + parseInt(table.rows[t].cells[3].innerHTML);
		}
			document.getElementById("hasil").innerHTML = "Sum Value = "+ sumHsl;
	</script>
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
	<!-- main js -->
	<script src="<?php echo base_url();?>assets_front/assets/js/main.js"></script>

</body>
</html>