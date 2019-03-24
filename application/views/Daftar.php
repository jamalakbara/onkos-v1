<!DOCTYPE html>
<html lang="eng">
<head>
	<title>OngKos - Cari Kos Mudah</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--css-->
  	<link rel="stylesheet" href="<?php echo base_url().'assets/' ?>css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/style2.css">
</head>
<body>
	<div class="container">
		<form class="rounded" method="POST" action="<?php echo base_url().'index.php/daftar/addAkun'; ?>">
			<div class="form-row mx-5 my-5">
				<div class="form-group col-md-12">
			  		<label>Username</label>
			  		<input type="text" class="form-control" placeholder="Username" name="Username">
			  	</div><!--form grup password-->
				<div class="form-group col-md-12">
			  		<label>Password</label>
			  		<input type="password" class="form-control" placeholder="Password" name="Password">
			  	</div><!--form grup password-->
			  	<div class="form-group col-md-12">
		  			<label class="aw">Daftar Sebagai</label>
		  			<select class="form-control" name="Sebagai">
		  				<option selected="">Pilih</option>
		  				<option>Pemilik Kos</option>
		  				<option>Penyewa</option>
		  			</select>
		  		</div><!--form grup daftar sebagai-->
			  	<div class="form-group col-md-12">
			  		<label>No Identitas</label>
			  		<input type="text" class="form-control" placeholder="No. Identitas" name="NoKTP">
			  	</div><!--form grup No identitas-->
			  	<div class="form-group col-md-6">
		  			<label class="aw">Nama</label>
		  			<input type="text" class="form-control" placeholder="Nama" name="Nama">
		  		</div><!--form grup nama-->
		  		<div class="form-group col-md-6">
		  			<label class="aw">Jenis Kelamin</label>
		  			<select class="form-control" name="JK">
		  				<option selected="">Pilih</option>
		  				<option>Laki-Laki</option>
		  				<option>Perempuan</option>
		  			</select>
		  		</div><!--form grup jenis kelamin-->
		  		<div class="form-group col-md-12">
		  			<label>Email</label>
		  			<input type="email" class="form-control" placeholder="Email" name="Email">
		  		</div><!--form grup email-->
			  	<div class="form-group col-md-12">
			  		<label>Alamat</label>
   					<textarea class="form-control" id="alamatz" rows="3" name="Alamat"></textarea>
			  	</div><!--form grup alamat-->
			  	<button type="submit" class="btn btn-dark btn-block" name="submit">Daftar</button>
			  	<p class="text-center text-muted">Dengan menekan Daftar Akun, saya mengkonfirmasi telah menyetujui 
				Syarat dan Ketentuan, serta Kebijakan Privasi OngKos.</p>
			</div><!--form-row-->
		</form><!--form-->
	</div><!--container semua-->

	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src=">https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="<?php echo base_url().'assets/' ?>js/bootstrap.bundle.min.js"></script>
</body>
</html>