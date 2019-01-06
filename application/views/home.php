<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/navbar.css">
<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

<body>
        <div class="container-fluid">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">Admin</a>
                                </div>
                        
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navbar-ex1-collapse">
                                    <ul class="nav navbar-nav">
                                         <li class=""><a href="<?php echo site_url('admin') ?>">Home</a></li>
                                        <li class=""><a href="<?php echo site_url('admin/daftar_mobil') ?>">Mobil</a></li>
                                      <li class=""><a href="<?php echo site_url('admin/daftar_bus') ?>">Bus & Elf</a></li>
                                     <li class=""><a href="<?php echo site_url('admin/daftar_wisata') ?>">Paket Wisata</a></li>
                                    <li class=""><a href="<?php echo site_url('admin/traksaksi_mobil') ?>">Transaksi Mobil</a></li>
                                   <li class=""><a href="<?php echo site_url('admin/transaksi_bus') ?>">Transaksi Bus & Elf</a></li>
                                    <li class=""><a href="<?php echo site_url('admin/transaksi_wisata') ?>">Transaksi Paket Wisata</a></li>
                                   <li class=""><a href="<?php echo site_url('admin/logout'); ?>">Logout</a></li>
                                    </ul>
                                    
                                </div><!-- /.navbar-collapse -->
                        </div>
                        </nav>
                    
 

                       <div class="container">
							<center><h2> Selamat Datang Admin di PO Kramat Djati</h2></center>
							<br>
						</div>
					</div>
</div>
</body>
</html>