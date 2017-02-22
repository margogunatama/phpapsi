<!DOCTYPE html>
<html>
<head>
	<title>Toko Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		include 'navbar.php';
	?>

	<!-- Header -->
	<header>
		<h1>Selamat Datang di Kekomputeran</h1>
	</header>
	<!-- End Header -->

	<!-- Sidebar -->
	<div class="sidebar">
		<table>
			<tr><td><a href="#">Semua Kategori</a></td></tr>
			<tr><td><a href="#">DVD</a></td></tr>
			<tr><td><a href="#">Storage</a></td></tr>
			<tr><td><a href="#">RAM</a></td></tr>
			<tr><td><a href="#">CPU</a></td></tr>
		</table>
	</div>
	<!-- End Sside -->

	<!-- Konten -->
	<div class="container">
	<h3>Belanja dengan Kenikmatan</h3>
		<div class="card">
			<h4><b>Monitor</b></h4>
			<img src="">
			<div class="content">
				    <p>Harga :</p>
				<button>Beli</button>
			</div>
		</div>
		<div class="card">
			<h4><b>RAM</b></h4>
			<img src="">
			<div class="content">
				    <p>Harga :</p>
				<button>Beli</button>
			</div>
		</div>
		<div class="card">
			<h4><b>SSD</b></h4>
			<img src="">
			<div class="content">
				    <p>Harga :</p>
				<button>Beli</button>
			</div>
		</div>
	</div>
	<!-- End Konten -->

	<!-- Footer -->
	<?php
		include 'footer.php';
	?>
	<!-- End Footer -->
</body>
</html>
