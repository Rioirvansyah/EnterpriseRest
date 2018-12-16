<header id="header" id="home">
	<div class="header-top">
		<div class="container">
	  		<div class="row">
	  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
	  				<ul>
						<li>
							<?php if ($this->session->userdata('penumpang') == true){ ?>
								<a href="">Halo <?php echo $username['username'] ?> </a>
								<a href="<?php echo base_url() ?>home/logout">, Logout </a>
							<?php } ?>
						</li>
	  				</ul>
	  			</div>
	  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
	  				
	  				<a href="tel:+880 012 3654 896">085 825 834 427</a>
	  				<a href="mailto:abdulrachmansaleh@gmail.com">abdulrachmansaleh@gmail.com</a>				
	  			</div>
	  		</div>			  					
		</div>
	</div>
	<div class="container main-menu">
		<div class="row align-items-center justify-content-between d-flex">
	      <div id="logo">
	        <a href="<?php echo base_url() ?>Home">
	        	<img src="<?php echo base_url() ?>assets/img/logo.png" alt="bandara abdul rachman saleh" title="bandara abdul rachman saleh" width=50 height=50">        
	        </a>
	        	Bandara Abdul Rachman Saleh
	      </div>
	      <nav id="nav-menu-container">
	        <ul class="nav-menu">
	          	<li class="menu-active"><a href="<?php echo base_url()?>home">Home</a></li>
				<li class="menu-has-children"><a href="">Layanan Informasi</a>
		            <ul>
		              <li><a href="<?php echo base_url()?>penerbangan">Informasi Penerbangan</a></li>
		              <li><a href="<?php echo base_url()?>maskapai">Informasi Maskapai</a></li>
		            </ul>
	          	</li>
				<li class="menu-has-children"><a href="">Panduan</a>
		            <ul>
		              <li><a href="<?php echo base_url()?>panduan/kedatangan">Kedatangan</a></li>
		              <li><a href="<?php echo base_url()?>panduan/keberangkatan">Keberangkatan</a></li>
		              <li><a href="<?php echo base_url()?>panduan/transit">Transit</a></li>
		              <li><a href="<?php echo base_url()?>panduan/keamanan">Keamanan</a></li>
		            </ul>
	          	</li>
	          <li><a href="<?php echo base_url()?>galeri">Galeri</a></li>

	          <li class="menu-has-children"><a href="">Informasi Tiket</a>
	            <ul>
	              <li><a href="<?php echo base_url()?>pemesanantiket">Pemesanan Tiket</a></li>
	              <!-- <li><a href="<?php echo base_url()?>tiket">Tiket Anda</a></li> -->
	            </ul>
	          </li>						          
	          <li class="menu-has-children"><a href="">Login</a>
	          	<ul>
	              <li><a href="<?php echo base_url()?>login">Login</a></li>
	              <li><a href="<?php echo base_url()?>register">Daftar</a></li>
	            </ul>
	          </li>
	        </ul>
	      </nav><!-- #nav-menu-container -->		    		
		</div>
	</div>
</header><!-- #header -->