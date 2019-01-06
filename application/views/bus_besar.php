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
	<title>Doland Travel</title>

	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/section.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/about.css">
     <link rel="stylesheet" href="<?php echo base_url('assets/css/tabel.css') ?>"/>
   
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
	


<!-- Who we are -->
			<br>
			<br>
			<!-- -->

			
			<br>
			<br>
		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="row">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"style="width:10%;height:400px;background-color: #99d6ff"">
						<center><p>Pilih Jenis BUS</p></center>
						<tr>
							<?php echo form_open_multipart('bus/besar'); ?>
								<center><button type="submit" class="btn btn-info btn-primary btn-block">Bus Besar</button></center>
							<?php echo form_close(); ?>
						</tr>
						<br>
						<tr>
							<?php echo form_open_multipart('bus/sedang'); ?>
							<center><button type="submit" class="btn btn-info btn-primary btn-block">Bus Sedang</button></center>
							<?php echo form_close(); ?>
						</tr>
						<br><br><br>
						<center><p>Pilih Jenis ELF</p></center>
						<br>
						<tr>
							<?php echo form_open_multipart('elf/besar'); ?>		
							<center><button type="submit" class="btn btn-info btn-primary btn-block">ELF Besar</button></center>
							<?php echo form_close(); ?>
						</tr>
						<br>
						<tr>
							<?php echo form_open_multipart('elf/sedang'); ?>		
							<center><button type="submit" class="btn btn-info btn-primary btn-block">ELF Sedang</button></center>
							<?php echo form_close(); ?>
						</tr>
						<br>
						</div> <!-- /.col-sm-3 -->
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="who">
						<img src="<?php echo base_url();?>assets/images/busbesar.png" alt="" class="img-responsive who-img">
						<center><p>
							Bus Besar
						</p></center>
					</div>
				</div> <!-- /.col-sm-3 -->
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<p>PO. Kwantrans dan PO. Mayora</p>
					<p>Fasilitas : </p>
					<p>- Kapasitas 50 Seat</p>
					<p>- Format Seat 2 </p>
					<p>- Bantal</p>
					<p>- Selimut</p>
					<p>- AC</p>
					<p>- Audio Full System</p>
					<p>- Toilet</p>


					<?php echo form_open_multipart('bus/pesan'); ?>
					<center><button type="submit" class="btn btn-primary">Pesan</button></center>
					<?php echo form_close(); ?>
				</div>
				</div>
					
		</div> <!-- /.container -->
	</section> <!-- /.wwa -->



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