		<!--navbar-->
		<nav class="navbar navbar-expand-md bg-light navbar-light">
		  	<a class="navbar-brand" href="<?php echo base_url().'index.php/home/homeLoggedIn' ?>"><img src="<?php echo base_url().'assets/'; ?>img/logo.png" class="img-top"></a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse float-right" id="collapsibleNavbar">
		    	<ul class="navbar-nav">
		      		<li class="nav-item">
		        		<a class="nav-link" href="<?php echo base_url().'index.php/home/homeLoggedIn' ?>">Home</a>
		     		</li>
		     		<li class="nav-item">
		        		<a class="nav-link" href="#">Cari Kosan</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">FAQ</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">About</a>
		      		</li>    
		    	</ul>
		    	<div class="dropdown ml-auto">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <span class="mx-2">Welcome, <?php echo $this->session->userdata('username'); ?></span>
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="<?php echo base_url().'index.php/profile/tampilprofile/'.$this->session->userdata('id') ?>">Profile</a>				    <a class="dropdown-item" href="<?php echo base_url().'index.php/logout/logoutValidation'; ?>">Logout</a>
				  </div>
				</div>
		    	<!--<ul class="navbar-nav ml-auto">
		    		<li class="nav-item">
		    			<a class="nav-link" href="<?php echo base_url().'index.php/addiklan' ?>"><abbr title="Tambah Iklan" style="cursor: pointer;"><img src="<?php echo base_url().'assets/'; ?>img/tambah-kos.png" width="30" height="30"></abbr></a>
		    		</li>
                    <li class="nav-item" id="login">
                        <a href="<?php echo base_url().'index.php/login' ?>" class="nav-link text-secondary">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url().'index.php/daftar' ?>" class="nav-link btn btn-outline-secondary">Daftar</a>
                    </li>
                </ul>-->
		 	</div>
		</nav><!--navbar-->