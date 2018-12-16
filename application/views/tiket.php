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
        <title>Info Maskapai - Bandara Abdul Rachman Saleh</title>

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
                                Informasi Tiket Anda               
                            </h1>   
                            <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="blog-single.html"> Informasi Tiket Anda</a></p>
                        </div>                                          
                    </div>
                </div>
            </section>
            <!-- End banner Area -->    
            
            <!-- Start blog-posts Area -->
            <section class="blog-posts-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 post-list blog-post-list">
                            <div class="single-post">
                                <img class="img-fluid" src="img/blog/p1.jpg" alt="">
                                
                                <a href="#">
                                    <h1>
                                       INFORMASI TIKET ANDA
                                    </h1>
                                </a>
                                <table class="table table-striped">
                                    <thead>
                                          <tr style="background-color: #3f50b5; color: #fff">
                                            <th>ID Tiket</th>
                                            <th>Nama Penumpang</th>
                                            <th>No Penerbangan</th>
                                            <th>Jumlah</th>
                                            <th>Harga Total</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($tiket as $data){ ?>                                            
                                              <tr>
                                                <td><?php echo $data->id_tiket ?></td>
                                                <td><?php echo $data->nama_penumpang ?></td>
                                                <td><?php echo $data->no_penerbangan ?></td>
                                                <td><?php echo $data->jumlah ?></td>
                                                <td><?php echo $data->harga_total ?></td>
                                              </tr>
                                            <?php } ?>
                                        </tbody>
                                </table>
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End blog-posts Area -->
            

            <?php include 'footer.php' ?>    

            <?php include 'sourcejs.php' ?> 
        </body>
    </html>

