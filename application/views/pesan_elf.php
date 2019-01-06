<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>Pesan Bus dan Elf</title>

	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/section.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/about.css">
     <link rel="stylesheet" href="<?php echo base_url('assets/css/tabel.css') ?>"/>
    <!--Start of Tawk.to Script-->
		
</head>
<body>

<!-- Home -->
	<section class="header">
		
		<nav class="navbar navbar-default">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> Doland <span>Tour</span></a>
				</div> <!-- /.navbar-header -->

		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo site_url ('Home') ?>">Home</a></li>
						<li><a href="<?php echo site_url('layanan') ?>">Layanan</a></li>
						<li><a href="<?php echo site_url('tentang') ?>">Tentang Kami</a></li>
						<li><a href="<?php echo site_url('login') ?>">Log In</a></li>
					</ul> <!-- /.nav -->
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container -->
		</nav>
	</section> <!-- /#header -->


<!-- Story and Client -->
	<section class="section-wrapper contact-and-map">
		<div class="container">
			<div class="row">
			<?php echo form_open('elf/pesan'); ?>		
					<?php echo validation_errors(); ?>
				<div class="col-sm-6">
					<h2 class="section-title">
						Reservasi ELF Online ? 
					</h2>
					<div class="form">
						<div class="input-group">
							<select name='pilihan' id='pilihan' class="form-control border-radius border-right" required="required">
									    
										<option value="Elf Besar">Elf Besar</option>
										<option value="Elf Sedang">Elf Sedang</option>
										<option value="Bus Besar">Bus Besar</option>
									    <option value="Bus Besar">Bus Sedang</option>
									
									  </select>
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-android-car"></i>
							</span>
						</div>
						<div class="input-group">	
						 	<input class="form-control border-radius border-right" type="text" placeholder="Nama" required id="nama_penyewa" name="nama_penyewa">
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-person"></i>
							</span>
						</div>
					
						<div class="input-group">		
						 	<input class="form-control border-radius border-right" type="tel" placeholder="No Telephon" name="no_hp" id="no_hp">
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-ios-telephone"></i>
							</span>
						</div>
						<div class="input-group">
							<p>Tanggal Pemesanan</p>		
						 	<input class="form-control border-radius border-right" type="date" placeholder="Tanggal Pemesanan" name="tgl_sewa" id="tgl_sewa">
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-android-time"></i>
							</span>
						</div>
						<div class="input-group">
							<p>Tanggal Kembali</p>		
						 	<input class="form-control border-radius border-right" type="date" placeholder="Tanggal Pemesanan" name="tgl_kembali" id="tgl_kembali">
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-android-time"></i>
							</span>
						</div>
							
						<div class="input-group">	
						 	<input class="form-control border-radius border-right" type="text" placeholder="Jumlah Hari" required id="jml_hari" name="jml_hari">
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-person"></i>
							</span>
						</div>
						<div class="input-group">
						<p>Tujuan</p>
							<select name='tujuan' id='tujuan' class="form-control border-radius border-right" required="required">
									    <option value="Malang">Malang</option>
									    <option value="Surabaya">Surabaya</option>
									    <option value="Pasuruan">Pasuruan</option>
									  </select>
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-android-time"></i>
							</span>
						</div>
						
						
						<button type="submit" class="btn btn-default border-radius custom-button">KIRIM </button>
					</div>
				</div> 
			</div>
		</div>
	</section>

	

</div> <!-- /.container -->
	
		<ul class="social-icon">
			<li><a href="#"><i class="ion-social-twitter"></i></a></li>
			<li><a href="#"><i class="ion-social-facebook"></i></a></li>
			<li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
			<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
		</ul>
	</div> <!-- /.subscribe -->


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="text-left">
						&copy; Copyright Doland Tour 2018
					</div>
				</div>
				<div class="col-xs-4">
					Hubungi +6285 23458 1987 untuk pemesanan
				</div>
				<div class="col-xs-4">
					<div class="top">
						<a href="#header">
							<i class="ion-arrow-up-b"></i>
						</a>
					</div>
				</div>
			</div>
		</div>	
	</footer>


	<script src="<?php echo base_url('') ?>assets/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/contact.js"></script>
	<script src="<?php echo base_url('') ?>assets/js/script.js"></script>






</body>
</html>