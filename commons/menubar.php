<!--Menubar-->
	<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed toggle" data-toggle="collapse" data-target="#top-menu">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<?php
		if(isset($_SESSION['is_logged_in']))
		{

				   $role = $_SESSION['role'];
					 if($role == 2)
					 {
				?>
				<div class="navbar-collapse collapse" id="top-menu">
					<div class="menu">
						<ul class="nav navbar-nav" role="tablist">
							<li><a href="index.php"><i class="fa fa-home"><strong> HOME</strong></i></a></li>
							<li><a href="paket.php" class="menu"><i class="fa fa-archive"><strong> PAKET RAFTING</strong></i></a></li>
							<li><a class="menu" href="about.php"><i class="fa fa-building"><strong> TENTANG KAMI</strong></i></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-question"><strong> HELP</strong></i> <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="daftar_aduan.php"><strong> Daftar Komentar </strong></a></li>
									<li><a href="help.php"><strong> Komentar</strong></a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-list"><strong> WISATA DESA PARHITEAN</strong></i> <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="air_terjun_ponot.php">Air Terjun Ponot</a></li>
									<li><a href="sungai_asahan.php">Sungai Asahan</a></li>
									<li><a href="air_terjun_siharimau.php">Air Terjun Siharimau</a></li>
									<li><a href="jembatan_parhitean.php">Jembatan Parhitean</a></li>
									<li><a href="air_terjun_tiga.php">Air Terjun Lainnya</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
		<?php
			}
			else if($role == 1)
			{
		?>

		<div class="navbar-collapse collapse" id="top-menu">
			<div class="menu">
				<ul class="nav navbar-nav" role="tablist">
					<li><a class="menu" href="#"> </a></li>
					<li><a class="menu" href="admin.php"><i class="fa fa-home"><strong> ADMIN</strong></i></a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-list"><strong> TRANSAKSI</strong></i> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="daftar_transaksi.php">Daftar Transaksi</a></li>
								<li><a href="daftar_transaksi_selesai.php">Transaksi Selesai</a></li>
							</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-list"><strong> WISATA DESA PARHITEAN</strong></i> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="air_terjun_ponot.php">Air terjun Ponot</a></li>
							<li><a href="sungai_asahan.php">Sungai Asahan</a></li>
							<li><a href="air_terjun_siharimau.php">Air Terjun Siharimau</a></li>
							<li><a href="jembatan_parhitean.php">Jembatan Parhitean</a></li>
							<li><a href="air_terjun_tiga.php">Air Terjun Lainnya</a></li>
						</ul>
					</li>
					<li><a class="menu" href="user.php"><i class="fa fa-user"><strong> USER</strong></i></a></li>
					<li><a class="menu" href="daftar_aduan.php"> <i class="fa fa-bullhorn"><strong> DAFTAR KOMENTAR</strong></i></a></li>
				</ul>
			</div>
		</div>

			<?php
			}
		}
		else if(!isset($_SESSION['is_logged_in']))
		{
			?>
			<div class="navbar-collapse collapse" id="top-menu">
				<div class="menu">
					<ul class="nav navbar-nav" role="tablist">
						<li><a href="index.php"><i class="fa fa-home"><strong> HOME</strong></i></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-archive"><strong> WISATA DESA PARHITEAN</strong></i> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="air_terjun_ponot.php">Air Terjun Ponot</a></li>
								<li><a href="sungai_asahan.php">Sungai Asahan</a></li>
								<li><a href="air_terjun_siharimau.php">Air Terjun Siharimau</a></li>
								<li><a href="jembatan_parhitean.php">Jembatan Parhitean</a></li>
								<li><a href="air_terjun_tiga.php">Air Terjun Lainnya</a></li>
							</ul>
						</li>
						<li><a href="paket.php" class="menu"><i class="fa fa-archive"><strong> PAKET RAFTING</strong></i></a></li>
						<li><a class="menu" href="about.php"><i class="fa fa-building"><strong> TENTANG KAMI<strong></i></a></li>
						
					</ul>
				</div>
			</div>
		<?php
			}
		?>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-->
		</nav>
