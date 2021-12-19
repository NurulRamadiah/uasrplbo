
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Daftar</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" href="<?php echo base_url();?>assets-login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets-login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets-login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets-login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets-login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets-login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets-login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets-login/css/util.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets-login/css/main.css">
	<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url('Auth/daftar'); ?>" method="post">
					<?php echo $this->session->flashdata('message'); ?>
					<span class="login100-form-title p-b-43">
						Daftar Akun
					</span>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nama">
						<span class="focus-input100"></span>
						<span class="label-input100">Nama</span>
					</div>


					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
                    <div class="form-group">
                     <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="radio">
                    <label>
                      <input type="radio" class="flat-red" name="jenis_kelamin" value="Laki-Laki" checked> Laki-Laki
                    </label>
                    </div>
                    <div class="radio">
                    <label>
                      <input type="radio" class="flat-red" name="jenis_kelamin" value="Perempuan" > Perempuan
                    </label>
                    </div>
                    </div>
                    
                </div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input">
						<input class="input100" type="number" name="no_hp">
                        <input type="hidden" class="form-control" name="level" value="1" required="">
						<span class="focus-input100"></span>
						<span class="label-input100">No HP</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">



					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Daftar
						</button>
					</div>
				

				</form>
				

				<div class="login100-more" style="background-image: url('<?php echo base_url();?>assets-login/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets-login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets-login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets-login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets-login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets-login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets-login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets-login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets-login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets-login/js/main.js"></script>

</body>

</html>