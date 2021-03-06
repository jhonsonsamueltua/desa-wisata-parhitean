<?php
	require_once(dirname(__FILE__).'/function.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Paket Wisata | Parhitean</title>

		<link rel="icon" type="image/png" href="topar.png">
		<link rel="stylesheet" href="css/style.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link href="css/ionicons.min.css" rel="stylesheet">
  		<link href="css/animate.min.css" rel="stylesheet">
  		<link href="css/venobox.css" rel="stylesheet">
  		<link href="css/owl.carousel.min.css" rel="stylesheet">
  		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
	</head>
	<body>
		<!-- Header-->
		<?php
			require_once(dirname(__FILE__).'/commons/header.php');
		?>

		<!--Menubar-->
		<?php
			require_once(dirname(__FILE__).'/commons/menubar.php');
		?>

		<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
						<li><a href="#">Parhitean</a></li>
						<li><a href="#">Paket wisata</a></li>
					</ul>
				</div>
			</div>
		</div>
		</section>

		<section class="product">
			<div class="container" style= "margin-left:400px;">
				<div class="row">
					
					<div class="col-md-9">
						<?php
							$query = "SELECT * FROM produk WHERE kategori = 1";
							$item = mysqli_query($conn, $query);
							while($items = mysqli_fetch_array($item)){
						?>
						<div class="col-md-4">
						 <div class="card">
						  <?php echo '<img src="img/produk/'.$items['gambar'].'"alt="Avatar">' ?>
							<h4><b><?=$items['nama']?></b></h4>
							<h4><b>Rp <?=number_format($items['harga'])?>.00</b></h4>
							<h4><b>Jumlah Paket : <?=$items['stock']?></b></h4>
							<p><a href="newbuy.php?items_id=<?=$items['id_produk']?>"><button>Beli</button></a></p>
						</div>
						</div>
					<?php }; ?>
					</div>
				</div>
			</div>
		</section>

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
