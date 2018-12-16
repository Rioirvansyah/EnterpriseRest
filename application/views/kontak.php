	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Kontak - Bandara Abdul Rachman Saleh</title>

		<?php include 'sourcecss.php' ?>
		</head>
		<body>	
			  <?php include 'header.php' ?> 

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Hubungi Kami				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Hubungi Kami</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Jawa Timur, Indonesia</h5>
									<p>Jalan Raya Abdul Rachman Saleh No.07, Krajan, Asrikaton, Pakis</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>(0341) 795413</h5>
									<p>Buka jam 8 am to 15.30 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>abdulrachmansaleh.com</h5>
									<p>Kirimi kami permintaan Anda kapan saja!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<?php echo form_open('kontak/create');?>
								<div class="row">	
									<div class="col-lg-6 form-group">
										
										<input name="nama" placeholder="Masukkan Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Masukkan Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subyek" placeholder="Masukkan Subyek" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
										<div class="mt-20 alert-msg" style="text-align: left;"></div>
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="pesan" placeholder="Pesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>

										<input type="submit" name="submit" class="genric-btn primary circle mt-30" style="float: right; padding: 0 30px">	
																
									</div>
								</div>
							<?php echo form_close();?>
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

			<?php include 'footer.php' ?>

			<?php include 'sourcejs.php' ?>
		</body>
	</html>



