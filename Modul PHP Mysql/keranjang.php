<?php
  include 'koneksi.php';

  //session
	$session_pelanggan_id = 1;
  $sql_keranjang = mysqli_query($conn,"SELECT tb_barang.nama_barang, tb_detail_keranjang.jumlah, (tb_detail_keranjang.jumlah*tb_barang.harga)
FROM tb_barang
INNER JOIN tb_detail_keranjang ON tb_detail_keranjang.barang_id = tb_barang.id
INNER JOIN tb_keranjang ON tb_detail_keranjang.keranjang_id = tb_keranjang.id
WHERE tb_keranjang.pelanggan_id = $session_pelanggan_id;");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Keranjang | Toko Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
	th{
		background-color: #003D40;
	  border-bottom: 1px solid #ddd;
		color: white;
	}

	table{
		margin-left: 32%;
	}
	</style>
</head>
<body>

<!-- Navbar -->
<?php
	include 'navbar.php';
?>
<!-- End Navbar -->

<!-- Contain -->

<div class="main">

	<table>
	<caption><h4>Keranjang Belanja Anda</h4></caption>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Sub-Total</th>
			<th> </th>
		</tr>
		<?php
		if (mysqli_num_rows($sql_keranjang) > 0) {
			// output data of each row
		 	$x = 1;
			while($row = mysqli_fetch_array($sql_keranjang)) {

		?>
		<tr>
			<td><?php echo $x; ?></td>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td>Rp. <?php echo $row[2]; ?></td>
			<td><button>Hapus</button></td>
		</tr>
		<?php
		$x++;
	}
	} ?>
	</table>
	<button>Beli</button>
</div>

<!-- End Contain -->

<!-- Footer -->
<?php
	include 'footer.php';
?>
<!-- End Footer -->
</body>
</html>
