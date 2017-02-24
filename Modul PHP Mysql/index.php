<!DOCTYPE html>
<?php include 'koneksi.php'; ?>
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
			<tr><td>Kategori Barang<hr></td></tr>
			<?php
			$sql = "SELECT * FROM tb_kategori_barang";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_array($result)) {
					//http://localhost/phpapsi/Modul%20PHP%20Mysql/index.php
					$get_link = $link_server."/phpapsi/Modul%20PHP%20Mysql/index.php?kategori_id=".$row[0];
					echo "<tr><td><a href='".$get_link."'>".$row[1]."</a></td></tr>";
				}
			} else {
				echo "0 results";
			}
			?>
		</table>
	</div>
	<!-- End Sside -->

	<!-- Konten -->
	<div class="container">
		<h3>Katalog Belanja PT.BPAD</h3>
		<?php
		if(isset($_GET['kategori_id'])){
			$selected_kategori_id = $_GET['kategori_id'];
			$sql = "SELECT * FROM tb_barang WHERE kategori_id='".$selected_kategori_id."' ORDER BY id DESC LIMIT 15";
		}else{
			$sql = "SELECT * FROM tb_barang ORDER BY id DESC LIMIT 15";
		}
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_array($result)) {
				//http://localhost/phpapsi/Modul%20PHP%20Mysql/index.php
				$get_link = $link_server."/phpapsi/Modul%20PHP%20Mysql/masuk_keranjang.php?barang_id=".$row[0];
				?>
				<div class="card">
					<h4><b><?php echo $row[1]; ?></b></h4>
					<div class="content">
						<p>Harga : <?php echo $row[2]; ?></p>
						<a href="<?php echo $get_link; ?>"><button>Beli</button></a>
					</div>
				</div>
				<?php
			}
		} else {
			echo "0 results";
		}
		?>
	</div>
	<!-- End Konten -->

	<!-- Footer -->
	<?php
	include 'footer.php';
	?>
	<!-- End Footer -->
</body>
</html>
