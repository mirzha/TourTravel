<html>
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi Mobil</title>
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">
        <link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap-left-slide-menu.css">
         <link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap.min.css">
 </head>
 <body>

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
          <h4>
          DAFTAR TRANSAKSI MOBIL
          </h4>
          <br>
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="table-responsive">
                            <table class="table table-hover" id='cari'>
                                <thead>
                                    <tr>
                                          <th>No</th>
                                         <th>Pilihan Mobil</th>
                                          <th>Nama Penyewa</th>
                                          <th>No Hp</th>
                                          <th>Tanggal Sewa</th>
                                          <th>Tanggal Kembali</th>
                                          <th>Jumlah hari</th>
                                          <th>Tujuan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($transaksi_mobil as $key) { ?>
                                    <tr>
                                        <td><?php echo $key->id_transaksi_mobil ?></td>
                                        <td><?php echo $key->pilihan ?></td>
                                        <td><?php echo $key->nama_penyewa ?></td>
                                        <td><?php echo $key->no_hp ?></td>
                                        <td><?php echo $key->tgl_sewa ?></td>
                                        <td><?php echo $key->tgl_kembali ?></td>
                                        <td><?php echo $key->jml_hari ?></td>
                                        <td><?php echo $key->tujuan ?></td>
                        
                                </tr>
                                    
                                <?php } ?>
                                </tbody>
                            </table>
                    </div>
           
          </div>
       </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/bootstrap/js/bootstrap-left-slide-menu.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo base_url('') ?>assets/datatables.min.js"> </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#cari').DataTable();
        });
        </script>

 </body>
</html>