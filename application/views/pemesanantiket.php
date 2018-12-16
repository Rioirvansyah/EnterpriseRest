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
        <title>Pemesanan Tiket - Bandara Abdul Rachman Saleh</title>

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
                                Pemesanan Tiket               
                            </h1>   
                            <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="blog-single.html">Pemesanan Tiket</a></p>
                        </div>                                          
                    </div>
                </div>
            </section>
            <!-- End banner Area -->    
			
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 post-list blog-post-list">
							<div class="single-post">
								<img class="img-fluid" src="img/blog/p1.jpg" alt="">
								<a href="#">
									<h1>
										PEMESANAN TIKET
									</h1>
								</a>
								<div class="content-wrap">
									 <?php echo form_open('pemesananTiket/pesan');?>
                                        <div class="form-group">
                                          <label for="email">No KTP</label>
                                          <input type="text" class="form-control" id="no_ktp" placeholder="Masukkan no ktp" name="no_ktp">
                                        </div>
                                        <div class="form-group">
                                          <label for="pwd">No Penerbangan</label>
                                          <!-- <input type="text" class="form-control" id="no_penerbangan" placeholder="Masukkan no penerbangan" name="no_penerbangan"> -->
                                          <select name="no_penerbangan" class="form-control">
                                            <?php foreach ($penerbangan as $data) { ?>
                                              <option value="<?php echo $data->no_penerbangan ?>"><?php echo $data->no_penerbangan ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="pwd">Jumlah</label>
                                          <input type="text" class="form-control" id="jumlah" placeholder="Masukkan jumlah" name="jumlah">
                                        </div>
                                        <div class="form-group">
                                          <label for="pwd">Harga Total</label>
                                          <input type="text" class="form-control" id="harga_total" placeholder="Masukkan harga total" name="harga_total">
                                        </div>
                                        <input type="submit" name="submit" value="submit" class="btn btn-primary">
                                      <?php echo form_close(); ?>			
								</div>

                            

                            
                            
                           

							</div>																		
						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-widget search-widget">
								<form class="example" action="#" style="margin:auto;max-width:300px">
								  <input type="text" placeholder="Search Posts" name="search2">
								  <button type="submit"><i class="fa fa-search"></i></button>
								</form>								
							</div>	

						</div>
					</div>
				</div>	
			</section>
			<!-- End blog-posts Area -->
			

            <?php include 'footer.php' ?>    

            <?php include 'sourcejs.php' ?> 
        </body>
    </html>

