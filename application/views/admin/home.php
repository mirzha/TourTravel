<html>
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap-left-slide-menu.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap.min.css">
 </head>
 <body>
 <!-- <style type="text/css">
      body
      {
        background:#00ff00; 
          background-size: 100%;
      }
    </style> -->
    <div id="wrapper" class="">
       <div class="overlay" style="display: none;"></div>
       <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
          <ul class="nav sidebar-nav">
             <li class="sidebar-brand">
                <a href="#"> DOLAND TOUR </a>
             </li>
             <li>
                <a href="<?php echo site_url('admin/index') ?>"><i class="glyphicon glyphicon-camera"></i> Home</a>
             </li>
             <li>
                <a href="<?php echo site_url('daftar_mobil') ?>"><i class="glyphicon glyphicon-facetime-video"></i> Daftar Mobil</a>
             </li>
             <li>
                <a href="<?php echo site_url('daftar_bus') ?>"><i class="glyphicon glyphicon-headphones"></i> Daftar Bus & Elf</a>
             </li>
             <li>
                <a href="<?php echo site_url('daftar_pariwisata') ?>"><i class="glyphicon glyphicon-cloud"></i> Daftar Paket Wisata</a>
             </li>
             <li>
                <a href="<?php echo site_url('transaksi_mobil') ?>"><i class="glyphicon glyphicon-th"></i> Transaksi Mobil</a>
             </li>
             <li>
                <a href="<?php echo site_url('transaksi_bus') ?>"><i class="glyphicon glyphicon-cog"></i> Transaksi Bus & Elf</a>
             </li>
             <li>
                <a href="<?php echo site_url('transaksi_pariwisata') ?>"><i class="glyphicon glyphicon-cog"></i> Transaksi Paket Wisata</a>
             </li>
             <li>
             <a href="<?php echo site_url('admin/logout'); ?>">Logout</a>
             </li>
                                    
          </ul>
       </nav>


       <div id="page-content-wrapper">
          <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
          <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
          <span class="hamb-bottom"></span>
          </button>
          <div class="container">
             <center><h1>Selamat Datang</h1></center>
            <br>
           
          </div>

      <div class="container">
      <center>
        <img src="<?php echo base_url("assets/images/doland.png");?>">
        </center>
    </div>
    </div>
       </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/bootstrap/js/bootstrap-left-slide-menu.js"></script>

 </body>
</html>