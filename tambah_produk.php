<?php
	require_once(dirname(__FILE__).'/function.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Product | Parna Ulos</title>

		<link rel="icon" type="image/png" href="img/parna_logo.png">
		<link rel="stylesheet" href="css/style.css">

		<!-- Bootstrap-->
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
	</head>
	<body>
		<!-- Heaader-->
		<?php
		
			require_once(dirname(__FILE__).'/commons/header.php');
		?>

		<!---Menubar-->
		<?php
			require_once(dirname(__FILE__).'/commons/menubar.php');
		?>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="product">
							<h3>Tambah Produk</h3><hr class="pg-titl-bdr-bte"></hr>

							<form action="tambah_produk_process.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<p>Nama Produk</p>
									<input type="text" name="nama" class="form-control" required />
								</div>
								<div class="form-group">
									<p>Harga Produk</p>
									<input type="text" name="harga" class="form-control" required />
								</div>
								<div class="form-group">
									<p>Kategori</p>
									<select name="kategori" class="form-control" required />
										<option value="1">Paket Rafting</option>
										<option value="2">Songket</option>
									</select>
								</div>
								<div class="form-group">
									<p>Jumlah Stok</p>
									<input type="number" min="0" value="0" name="stock" class="form-control" required />
								</div>
								<div class="form-group">
									<p>Deskripsi</p>
									<textarea name="keterangan" class="form-control" rows="5" required></textarea>
								</div>
								<div class="form-group">
									<p>Gambar</p>
									<input type="file" name="gambar" accept="img/*" class="btn btn-primary">
								</div>
								<div class="text-center"><button name="tambah" type="submit" class="btn btn-komentar btn-lg">Tambah</button></div>
							</form>

						</div>
					</div>
				</div>
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
