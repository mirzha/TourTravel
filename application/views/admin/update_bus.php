<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Update Data Bus</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/bootstrap/css/bootstrap.min.css">

	</head>
	<body>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">	
					
					<?php echo form_open_multipart('bus/update/'.$this->uri->segment(3)); ?>
								<legend>Update Data Bus</legend>
								<?php echo validation_errors(); ?>
								<?php foreach ($databus as $key) { ?>
								<div class="form-group">
									<label for="">Jenis Bus</label>
									<input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $key->jenis ?>">
								</div>
								<div class="form-group">
									<label for="">Kapasitas Bus</label>
									<input type="text" class="form-control" id="kapasitas" name="kapasitas" value="<?php echo $key->kapasitas ?>">
								</div>
								<div class="form-group">
									<label for="">Biaya Sewa</label>
									<input type="text" class="form-control" id="biaya_sewa" name="biaya_sewa" value="<?php echo $key->biaya_sewa ?>">
								</div>
								<div class="form">
								<label for="">Status</label>
								<div class="input-group">
									<select name='status' id='status' class="form-control border-radius 	border-right" required="required">
									    <option value="ready">Ready</option>
									    <option value="jalan">Jalan</option>
									  </select>
								</div>
								<?php } ?>
						 		
						</div>
								<button type="submit" class="btn btn-primary">Update</button>
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

