<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Update Data Pariwisata</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap.min.css">

	</head>
	<body>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">	
					
					<?php echo form_open_multipart('pariwisata/update/'.$this->uri->segment(3)); ?>
								<legend>Update Data Pariwisata</legend>
								<?php echo validation_errors(); ?>
								<?php foreach ($datawisata as $key) { ?>
								<div class="form-group">
									<label for="">Nama Paket</label>
									<input type="text" class="form-control" id="nama_paket" name="nama_paket" value="<?php echo $key->nama_paket ?>">
								</div>
									<div class="form-group">
									<label for="">Biaya Paket</label>
									<input type="text" class="form-control" id="biaya_paket" name="biaya_paket" value="<?php echo $key->biaya_paket ?>">
								</div>
								<div class="form-group">
									<label for="">Kapasitas Paket</label>
									<input type="text" class="form-control" id="kapasitas" name="kapasitas" value="<?php echo $key->kapasitas ?>">
								</div>
								<?php } ?>
						 		<button type="submit" class="btn btn-primary">Update</button>
						</div>
								
					<?php echo form_close(); ?>
					</div>
					</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>

