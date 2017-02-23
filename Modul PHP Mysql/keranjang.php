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
		<tr>
			<td>1</td>
			<td>RAM</td>
			<td>1</td>
			<td>Rp. 400.000</td>
			<td><button>Hapus</button></td>
		</tr>
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
