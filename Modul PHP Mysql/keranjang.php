<?php
  include 'koneksi.php';

  //session
  $sql_keranjang = mysqli_query("SELECT * FROM tb_keranjang WHERE pelanggan_id = $sesion_pelanggan_id");
	$$row=mysqli_fetch_array($query);

  $count = mysqli_num_rows($query);
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
			if($count != 0){
		?>
		<tr>
			<td>1</td>
			<td>RAM</td>
			<td>1</td>
			<td>Rp. 400.000</td>
			<td><button>Hapus</button></td>
		</tr>
		<<?php } ?>
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
