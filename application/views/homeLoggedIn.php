<!DOCTYPE html>
<html lang="eng">
<head>
	<title>OngKos - Cari Kos Mudah</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--css-->
  	<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/style.css">
</head>
<body>
	<div>
		<!--navbar-->
		<?php include 'header.php'; ?>
		<!--navbar-->

		<div class="container">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<!--carousel indicator-->
				<ol class="carousel-indicators">
			    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  	</ol>
			  <!-- The slideshow -->
				<div class="carousel-inner" id="parent-container">
					<div class="carousel-item active">
						<img src="<?php echo base_url().'assets/'; ?>img/banner1.png">
					</div>
					<div class="carousel-item">
			    		<img src="<?php echo base_url().'assets/'; ?>img/banner2.png">
					</div>
					<div class="carousel-item">
			    		<img src="<?php echo base_url().'assets/'; ?>img/banner3.png">
					</div>
				</div><!--div slideshow-->
			</div><!--nampilin carousel-->
		</div><!--container carousel-->

		
		<div class="container">
			<table class="table  mt-3">
				<thead>
					<tr>
						<th scope="col" colspan="3"><h4 class="text-center"><strong>KOS</strong></h4></th>
					</tr>
				</thead>
			</table><!--table-->

			<div id="cardKos">
				<!--Card Kosan-->
				<div class="row" id="yow">
					<?php foreach ($data as $d) {?>
					<div class="col-md-4">
						<div class="card my-4">
							<img class="card-img-top" src="<?php echo base_url().'gambar/'.$d['gambar']; ?>" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title"><?php echo $d['namaKosan']; ?></h5>
								<p class="card-text"><?php echo $d['deskripsi']; ?></p>
								<a href="<?php echo base_url().'index.php/login/loggedIn/'.$d['idKosan']; ?>"><button class="btn btn-primary" id="buttonDel">Lihat</button></a>
							</div>
						</div>
					</div>
					<?php } ?>
				</div><!--row-->
			</div><!--cardKos-->
			<div class="row">
				<div class="alert alert-info text-center" id="Tambah" style="cursor:pointer">
		    		<strong>Lihat Lebih Banyak</strong></a>.
		  		</div> 		
			</div><!--row-->			
		</div><!--container card Kos-->

		<div class="container">
			<div class="row">
				<a href="<?php echo base_url().'index.php/daftar' ?>"><img id="daftarNow" src="<?php echo base_url().'assets/'; ?>img/daftar.png"></a>	
			</div>
		</div><!--container daftar-->

		<div class="container">
			<div class="hotProm">
				<table class="table">
					<thead>
						<tr>
							<th scope="col" colspan="3"><h4 class="text-center"><strong>PROMO</strong></h4></th>
						</tr>
					</thead>
				</table><!--table-->
				<div class="row">
					<div class="col-md-3">
						<a href="">
							<div class="card my-4">
								<img class="card-img-top" src="<?php echo base_url().'assets/'; ?>img/promo-1.png" alt="Card image cap">
							</div>	
						</a>
					</div><!--column-->
					<div class="col-md-3">
						<a href="">
							<div class="card my-4">
								<img class="card-img-top" src="<?php echo base_url().'assets/'; ?>img/promo-2.png" alt="Card image cap">
							</div>	
						</a>
					</div><!--column-->
					<div class="col-md-3">
						<a href="">
							<div class="card my-4">
								<img class="card-img-top" src="<?php echo base_url().'assets/'; ?>img/promo-3.png" alt="Card image cap">
							</div>	
						</a>
					</div><!--column-->
					<div class="col-md-3">
						<a href="">
							<div class="card my-4">
								<img class="card-img-top" src="<?php echo base_url().'assets/'; ?>img/promo-4.png" alt="Card image cap">
							</div>	
						</a>
					</div><!--column-->
				</div>
			</div><!--hotProm-->
		</div><!--container promo-->

		<!--footer-->
		<?php include 'footer.php'; ?>
		<!--footer-->

	</div><!--div semua-->

	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="<?php echo base_url().'assets/'; ?>js/bootstrap.bundle.min.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function(){
  			$("#Tambah").click(function(){
  				var addin = $('#cardKos').html();
  				$('#cardKos').append(addin);
  				$('#Tambah').hide();
                $('.card').hover(function(){
	  				$(this).css("box-shadow","5px 5px 27px #000000");
	  			},
	  			function(){
	  				$(this).css("box-shadow", "0px 0px 0px");	
	  			});
  			});/*tambah card kosan*/

  			$('.card').hover(function(){
  				$(this).css("box-shadow","5px 5px 27px #000000");
  			},
  			function(){
  				$(this).css("box-shadow", "0px 0px 0px");	
  			});/*hover*/

  			/*$.getJSON("http://localhost:3000/kosan",function(data){
                console.log(data);
                $.each(data,function(key,value){
                    $('#yow').append(
                                    '<div class="col-md-4">'
                                    +'<div class="card my-4">'
                                    +'<img class="card-img-top" src="<?php echo base_url().'assets/'; ?>'+value.img+'" alt="Card image cap">'
                                    +'<div class="card-body">'
                                    +'<h5 class="card-title">'+value.nama+'</h5>'
                                    +'<p class="card-text">'+value.deskripsi+'</p>'
                                    +'<a href="<?php echo base_url().'index.php/iklan'; ?>" class="btn btn-primary">Lihat</a>'
                                    +'</div></div></div>'
                        );
                }),
                $('.card').hover(function(){
	  				$(this).css("box-shadow","5px 5px 27px #000000");
	  			},
	  			function(){
	  				$(this).css("box-shadow", "0px 0px 0px");	
	  			});
            });/*ambil data json*/
  		});
  	</script>
</body>

</html>