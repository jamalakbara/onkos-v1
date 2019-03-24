<!DOCTYPE html>
<html lang="eng">
<head>
	<title>OngKos - Cari Kos Mudah</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--css-->
  	<link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/style3.css">
</head>
<body>
	<div class="container">
		
			<form class="rounded" action="<?php echo base_url().'index.php/login/validationLogIn' ?>" method="POST">
				<div class="text-center">
					<img src="<?php echo base_url().'assets/' ?>img/profile-pictures.png">
				</div>
				<div class="form-row mx-5">
					<div class="form-group col-md-12">
						<input type="text" class="form-control rounded-top" placeholder="Username" name="Username">
						<span class="text-danger"><?php echo form_error('username'); ?></span>
						<input type="password" class="form-control rounded-bottom" placeholder="Password" name="Password">
						<span class="text-danger"><?php echo form_error('password'); ?></span>
					</div><!--form-group email-->
					<div class="form-group mx-auto">
						<button type="submit" class="btn btn-dark px-5" name="submit">Sign In</button>	
						<?php echo  $this->session->flashdata('error'); ?>
						<p class="text-center"><a href="">Lupa Password?</a></p>
					</div><!--form-group password-->
					<br>
					<br>
					<div class="col-md-12">
						<p class="text-center">Belum Punya Akun?<a href="<?php echo base_url().'index.php/daftar' ?>">Daftar Sekarang</a></p>
					</div>
				</div><!--form-row-->
			</form><!--form-->
		
	</div><!--container-->

	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="<?php echo base_url().'assets/' ?>js/bootstrap.bundle.min.js"></script>
  	</script>
</body>
</html>