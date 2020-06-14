<?php
	require_once(dirname(__FILE__).'/function.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Beranda | Parhitean</title>

		<link rel="icon" type="image/png" href="topar.png">
		<link rel="stylesheet" href="css/style.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/jquery.bxslider.css">
  		<link href="css/ionicons.min.css" rel="stylesheet">
  		<link rel="stylesheet" href="css/venobox.css">


	</head>
	<body>
		<!-- Header-->
		<?php
			require_once(dirname(__FILE__).'/commons/header.php');
		?>

		<!---Menubar-->
		<?php
			require_once(dirname(__FILE__).'/commons/menubar.php');
		?>
		<div class="main-slider">
			<div id="myCarousel" class="carousel slide" dataride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- deklarasi carousel -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/morena/morena (2).jpg" class="img-thumbnail">
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						<div class="flex-caption">
							<h3>Air Terjun Morena</h3>
							<p>Air terjun yang terletak di pinggir jalan. sehingga 3-5 menit untuk menuju air terjun</p>
						</div>
					</div>
					</div>
					<div class="item">
						<img src="img/parhitean/parhitean1 (12).jpg" class="img-thumbnail">
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						<div class="flex-caption">
							<h3>Air terjun Siharimau</h3>
							<p>Air terjun yang memiliki telaga yang sangat luas dan tebing yang tinggi</p>
						</div>
					</div>
					</div>
					<div class="item">
						<img src="img/parhitean/parhitean1 (3).jpg" class="img-thumbnail">
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						<div class="flex-caption">
							<h3>Air terjun Ponot</h3>
							<p>Air terjun tertinggi di indonesia yaitu sekitar 250m dan memiliki 3 tingkat</p>
						</div>
					</div>
					</div>
				</div>

			</div>
		</div>
		

		<!-- Jumbotron -->
		  <div class="jumbotron text-center">
		    <h3>Selamat Datang di Desa Parhitean</h3>
		    
		  </div>
		 <!-- End Jumbotron -->
				<!-- ======= Featured Services Section Section ======= -->
      </div>
      <div class="container">		
		<div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="img/parhitean/parhitean1 (8).jpg" alt="..." class="img-thumbnail" >
          </div>
          <div class="col-md-6 pt-4">
            <br>
            
          <h2 class="title"><a href="">Apa itu desa parhitean?</a></h2>
              <p class="description">Desa Parhitean adalah desa yang terletak di Kecamatan Pintupohan Meranti, 
                Kabupaten Toba, Provinsi Sumatra Utara. Desa ini berjarak sekitar 61 km dari ibu kota Kabupaten 
                Toba dengan perjalanan menggunakan mobil atau motor dan dapat ditempuh dengan waktu 2 jam. Desa 
            	Parhitean terletak di lembah sungai Asahan. Untuk akses jalan menuju desa tersebut, Maka kita harus 
        		menempuh jalan yang cukup curam serta tikungan yang sangat tajam.  </p>
            
              <p class="description">Desa Parhitean memiliki potensi wisata yang sangat bagus. seperti wisata Air terjun,
              Wisata Arung jeram dan wisata lainnya. Desa Parhitean memiliki Air terjun tertinggi di Indonesia Yaitu
          	  Air terjun Ponot dengan tinggi mencapai 250 meter. selain air terjun tertinggi di indonesia, Desa Parhitean 
          	  juga memiliki wisata arung jeram terbaik ke 3 di Dunia yaitu Arung Jeram di Sungai Asahan.
          	</p>
          </div>
        </div>
    </div>
    </section>
		
		<!-- produk -->
		<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
		<section class="main-produk">
			<div class="container">
				<div class="row">
				<h3>Paket Rafting</h3><hr class="pg-titl-bdr-btm"></hr>
				<?php
					$query = "SELECT * FROM produk WHERE kategori = 1";
					$item = mysqli_query($conn, $query);
					$no = 1;
					while($items = mysqli_fetch_array($item)){
						if($no == 4){
							echo'<div class="col-md-6">
									 <div class="card">
									  <a href="newbuy.php?items_id='.$items['id_produk'].'"><img src="img/produk/'.$items['gambar'].'" class="img-thumbnail" alt="Avatar"></a>
										<h4><b>'.$items['nama'].'</b></h4><hr>
										<h4><b>Rp '.number_format($items['harga']).'.00</b></h4>
									</div>
								</div>';
								break;
						}else{
							echo'<div class="col-md-6">
									 <div class="card">
									  <a href="newbuy.php?items_id='.$items['id_produk'].'"><img src="img/produk/'.$items['gambar'].'" class="img-thumbnail" alt="Avatar"></a>
										<h4><b>'.$items['nama'].'</b></h4><hr>
										<h4><b>Rp '.number_format($items['harga']).'.00</b></h4>
									</div>
								</div>';
						}

						$no++;
				?>

					<?php }; ?>
				</div>
				<center><p><a href="paket.php"><button class="more">More &raquo</button></a></p></center>
			</div>
		</section>
		</div>
		<hr>
		<!-- end produk -->

		<section class="box">
			<h4>APA KEUNIKAN DESA PARHITEAN?</b></h4>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.4s">
							<div class="services">
								<div class="icons">
									<i class="fa fa-area-chart" aria-hidden="true"></i>
								</div>
								<h4><b>Potensi Wisata</b></h4>
								<p>
									Desa Parhitean memiliki objek wisata yang sangat menarik seperti Sungai Asahan, Air terjun dan Jembatan tertua di Indonesia	
								</p>
							</div>
						</div>
						<hr>
					</div>
					<div class="col-md-4">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
							<div class="services">
								<div class="icons">
									<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
								</div>
								<h4><b>Fasilitas Terbaik</b></h4>
								<p>
									Pariwisata memberikan fasilitas terbaik kepada pengunjung, seperti Tempat parkir, 
									Ruang ganti, Toilet, kantin,dsb
								</p>
							</div>
						</div>
						<hr>
					</div>
					<div class="col-md-4">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
							<div class="services">
								<div class="icons">
									<i class="fa fa-car" aria-hidden="true"></i>
								</div>
								<h4><b>Mudah dijangkau</b></h4>
								<p>
									Keseluruhan tempat wisata di Desa Parhitean memiliki akses jalan yang bagus dan dekat dengan jalan raya
								</p>
							</div>
						</div>
						<hr>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer-->
		<!-- maps desa parhitean -->
         <section>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7971.652341591623!2d99.33479537201242!3d2.563307392529082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302dfbffffffffff%3A0x69820f9efbc79e3a!2sParhitean!5e0!3m2!1sid!2sid!4v1584433878767!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </section>
    <!-- end maps -->
		<footer>
			<div class="inner-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 f-about">
							<h1>Website Pariwisata Desa Parhitean</h1>
							<p>Sebuah Website yang kami dirikan yang bertujuan untuk mempromosikan Wisata di desa parhitean, serta untuk membantu kemajuan pariwisata di desa parhitean</p>

						</div>
						<div class="col-md-4 l-posts">
							<h3 class="widgetheading">Visit</h3>
								<ul>
									<li><a href="http://www.del.ac.id/">Institut Teknologi Del</a></li>
									<li><a href="index.php">Desa Parhitean</a></li>
								</ul>
						</div>
						<div class="col-md-4 f-contact">
							<h3 class="widgetheading">Contact Us</h3>
							<a href="#"><p><i class="fa fa-envelope"></i> tobasaparhiteanrafting@gmail.com</p></a>
							<p><i class="fa fa-phone"></i>  +6282167599457</p>
							<p><i class="fa fa-home"></i> Desa Parhitean  |  Kode POS 22384 <br>
								Pintupohan Meranti, Kabupaten Toba<br> Provinsi Sumatera Utara, INDONESIA</p>
						</div>
					</div>
				</div>
			</div>

		<?php
			require_once(dirname(__FILE__).'/commons/footer.php');
		?>
		  	
		  	<!-- whatsap -->
			  <div style="position:fixed;left:20px;bottom:20px;">
			    <a href="https://api.whatsapp.com/send?phone=6282167599457&text=PemesananRafting">
			    <button style="background:#00ff00;vertical-align:center;height:36px;border-radius:5px">
			    <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Whatsapp Kami</button></a>
			  </div>
			<!-- end whatshap <-->

		<!-- Scroll Up Button -->
		<a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x active"></i></a>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-3.1.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.singlePageNav.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/wow.min.js"></script>
		<script>wow = new WOW({}).init();</script>
		<script>
			$('.carousel').carousel({			//Waktu Carousel
				interval: 3000
			})
		</script>
	</body>
</html>
