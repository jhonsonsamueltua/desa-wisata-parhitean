<?php
	require_once(dirname(__FILE__).'/function.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Wisata | Parhitean</title>

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
		<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a href="#">Wisata Desa Parhitean</a></li>
						<li><a href="#">Air Terjun Ponot</a></li>
					</ul>
				</div>
			</div>
		</section>
		<div class="col-md-3">
			<div>
				<a href="#" class="list-group-item active  list-group-item-info"><b> Wisata Air Terjun Ponot</b></a>
			</div>
		</div><br><br><br>	
		<div class="container">		
		<div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="img/ponot/ponot1.jpg" alt="..." class="img-thumbnail" >
          </div>
          <div class="col-md-6 pt-4">
            <br><br>
            
          <p>Air Terjun Ponot adalah sebuah air terjun yang memiliki pemandangan yang sangat indah. Air terjun ini terletak
            di Dusun Sampuransiarimo, Desa Halado, Kecamatan Pintu Pohan Meranti, Kabupaten Toba Samosir, 
            Provinsi Sumatra Utara, Indonesia. 
            </p><br>
            <p>Air Terjun Ponot atau yang biasa dikenal dengan nama air terjun tertinggi di Indonesia ini, 
            memiliki ketinggian lebih kurang 250 m. Air terjun ini merupakan dari anak Sungai Asahan, dimana air Sungai Asahan ini mengalir 
        	menuju Selat Malaka melahirkan Air Terjun Sigura-gura dan Air Terjun Tangga terkadang disebut juga sebagai Air Terjun Sampuran 
        	Siharimo yang membangkitkan arus listrik. </p><br>
        	<p>
              Di tempat pemandian Air Terjun Ponot bisa menjadi salah satu alternatif untuk mengisi akhir pekan. 
              Objek wisata ini menawarkan beberapa pemandangan yang masih sangat asri. Hutan rimba yang masih hijau dan air 
              mengalir terus dari ketinggian mencapai 250 meter melewati celah-celah bebatuan besar dan menciptakan kesejukan 
              terseniri di bawah permukaan air. Air Terjun Ponot.
            </p><br>
            <p>
              Keindahan Air terjun Ponot terletak pada debet airnya yang sangat deras dan juga susunan air terjunnya 
              yang merupakan air terjun 3 tingkat. Di bawah curahan air terjun banyak terdapat batu-batuan alam yang berukuran 
              sangat besar sehingga menjadi daya tarik tersendiri sebagai pelengkap keindahan Air terjun Ponot.
            </p>
          </div>
        </div>
        <div class="row" data-aos="fade-up">
          
          <div class="col-md-6 pt-4">
            <br><br>
            <p class="font-italic">
          <br>
             <p>
                Tempat ini bisa ditempuh sekitar 2-3 jam perjalanan dari Kota Kisaran, ibukota Kabupaten Asahan melalui Kec. Bandar Pulau.
                jika ingin melakukan perjalanan dari porsea,kabupaten toba. maka dapat menempuh waktu perjalanan sekitar 1-2 jam.

              </p><br>
              <p>
                Fasilitas Air Terjun Ponot yang berada di sekitar air terjun ini masih cukup minim, hanya ada beberapa tenda penjual 
                makanan di sini, kemudian terdapat satu kamar mandi di dekat parkir, sedangkan untuk mushalla belum tersedia. Harga tiket 
                untuk masuk Air Terju Ponot yaitu Rp. 5.000 yang sudah termasuk biaya parkir.
              </p>  
          </div>
          <div class="col-md-5">
            <img src="img/ponot/ponot2.jpg" alt="..." class="img-thumbnail" style="height: 450px;" >
          </div>		
        </div><br><br>
	</div>
		<!-- Footer-->
		<?php
			require_once(dirname(__FILE__).'/commons/footer.php');
		?>

		<!-- Scroll Up Button -->
		<a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x active"></i></a>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-3.1.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>