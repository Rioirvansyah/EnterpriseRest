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
        <title>Register - Bandara Abdul Rachman Saleh</title>

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
                                Register              
                            </h1>   
                            <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="blog-single.html">Register</a></p>
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
									<h1><center>
										Daftar Diri Anda
									</center></h1>
								</a>
                                <center>
                                    <div id="content-inner-login">
                                    <?php echo form_open('login/register');?>
                                        <table cellpadding="0" cellspacing="5" width="50%">
                                        <tr>
                                            <td>
                                                <table width="100%">
                                                <tr>
                                                    <td style="vertical-align: top">
                                                    No KTP : <input type ="text" name="no_ktp" class="form-control" required=""><br></br>
                                                    Nama : <input type="text" name="nama_penumpang" class="form-control"/><br></br>
                                                    Telepon : <input type ="text" name="telepon_penumpang" class="form-control"><br></br>
                                                    Email : <input type="text" name="email_penumpang" class="form-control"/><br></br>
                                                    Jenis : <input type ="text" name="jenis_penumpang" class="form-control"><br></br>
                                                    Username : <input type="text" name="username" class="form-control"/><br></br>
                                                    Password : <input type="password" name="password" class="form-control"/><br></br>
                                                    <input type="submit" value="submit" name="submit" class="btn btn-primary form-control">
                                                    </td>
                                                </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        </table>
                                   <?php echo form_close()?>
                                    </div>
                                </center>
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

