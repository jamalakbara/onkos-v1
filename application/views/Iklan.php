<!DOCTYPE html>
<html>
<head>
	<title>OngKos - Cari Kos Mudah</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--css-->
  	<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/style4.css">
  	<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/magnific-popup.css">
</head>
<body>
	<div>
		<!--navbar-->
		<?php include 'header.php'; ?>
		<!--navbar-->
		
		<div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/home' ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Cari Kosan</a></li>
                <li class="breadcrumb-item active">Iklan</li>
            </ul>
        </div><!--breadcrumb-->

		<div class="row">
			<div class="col-md-6 border-right">
				<div class="alert alert-secondary text-center">
		    		<strong>Peta Kosan</strong></a>.
		  		</div> 	
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1899.1719911124515!2d31.046387499710015!3d-17.822502654895526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a51d4151f4e1%3A0x85b36c61491472fe!2sBromley+House%2C+Herbert+Chitepo+Ave%2C+Harare%2C+Zimbabwe!5e0!3m2!1sen!2sid!4v1520050077548" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div><!--col maps-->
			<div class="col-md-6">
				<div id="demo" class="carousel slide" data-ride="carousel">
				  <!-- The slideshow -->
					<div class="carousel-inner" id="parent-container">
						<div class="carousel-item active">
							<a href="img/YokYow-Kamar.jpg" data-group="1" class="galleryItem"><img src="<?php echo base_url().'assets/'; ?>img/YokYow-Kamar.jpg"></a>
						</div>
						<div class="carousel-item">
				    		<a href="img/YokYow-KamarMandi.jpg" data-group="2" class="galleryItem"><img src="<?php echo base_url().'assets/'; ?>img/YokYow-KamarMandi.jpg"></a>
						</div>
					</div><!-- The slideshow -->
				  
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div> <!--carousel-->
				<br>
				<div class="jumbotron">
					<?php foreach ($data as $d) {?>
					<p><h2 class="text-center"><?php echo $d['namaKosan']; ?></h2></p>
					<table class="table">
						<tr>
							<th>Harga</th>
							<td><?php echo $d['harga']; ?> / tahun </td>
						</tr>
						<tr>
							<th>Fasilitas Kamar</th>
							<td><?php echo $d['fasKamar']; ?></td>
						</tr>
						<tr>
							<th>Luas Kamar</th>
							<td><?php echo $d['luasKamar']; ?> meter </td>
						</tr>
						<tr>
							<th>Fasilitas Umum</th>
							<td><?php echo $d['fasUmum']; ?></td>
						</tr>
						<tr>
							<th>Parkir</th>
							<td><?php echo $d['parkir']; ?></td>
						</tr>
						<tr>
							<th>Deskripsi</th>
							<td><?php echo $d['deskripsi']; ?></td>
						</tr>
					</table><!--table-->
					<?php } ?>
					<button class="btn btn-warning btn-block">Pesan Sekarang</button>
				</div><!--jumbotron-->
			</div><!--col carousel-->
		</div><!--row-->
	</div><!--div semua-->
	
	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="<?php echo base_url().'assets/'; ?>js/bootstrap.bundle.min.js"></script>
  	<script src="<?php echo base_url().'assets/'; ?>js/jquery.magnific-popup.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function(){
  			//$.getJSON("http://localhost:3000/kosan",function(data){
  				console.log(data);
  				//$('.jumbotron').prepend('<p><h2 class="text-center">'+data[0].nama+'</h2></p>');/*kasih nama kosan*/
  				/*$('.table').append(
  									'<tr>'
  									+'<th>Harga</th>'
  									+'<td>'+data[0].harga+' / tahun </td>'
  									+'</tr>'
  									+'<tr>'
  									+'<th>Fasilitas Kamar</th>'
  									+'<td>'+data[0].FasilitasKmr[0]+'</td>'
  									+'<td>'+data[0].FasilitasKmr[1]+'</td>'
  									+'<td>'+data[0].FasilitasKmr[2]+'</td>'
  									+'</tr>'
  									+'<tr>'
  									+'<th>Luas Kamar</th>'
  									+'<td>'+data[0].LuasKmr+' meter </td>'
  									+'</tr>'
  									+'<tr>'
  									+'<th>Fasilitas Umum</th>'
  									+'<td>'+data[0].FasilitasUmum[0]+'</td>'
  									+'</tr>'
  									+'<tr>'
  									+'<th>Parkir</th>'
  									+'<td>'+data[0].Parkir[0]+'</td>'
  									+'<td>'+data[0].Parkir[1]+'</td>'
  									+'</tr>'
  									+'<tr>'
  									+'<th>Deskripsi</th>'
  									+'<td colspan="5">'+data[0].deskripsi+'</td>'
  									+'</tr>'
  				);/*input atribut kosan*/
  			//});/*ambil data json*/
  			
  			/*jquery plugin magnific popup*/
  			var groups = {};
			$('.galleryItem').each(function() {
			  var id = parseInt($(this).attr('data-group'), 10);
			  
			  if(!groups[id]) {
			    groups[id] = [];
			  } 
			  
			  groups[id].push( this );
			});

			$.each(groups, function() {
			  
			  $(this).magnificPopup({
			      type: 'image',
			      closeOnContentClick: true,
			      closeBtnInside: false,
			      gallery: { enabled:true }
			  })
			  
			});
			/*jquery plugin magnific popup*/
  		});
  	</script>
</body>

</html>