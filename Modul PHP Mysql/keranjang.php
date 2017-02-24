<?php
  include 'koneksi.php';

  //session
	$session_pelanggan_id = 1;
  $sql_keranjang = mysqli_query($conn,"SELECT tb_barang.nama_barang, tb_detail_keranjang.jumlah, (tb_detail_keranjang.jumlah*tb_barang.harga), tb_detail_keranjang.barang_id
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

</head>
<body>

<!-- Navbar -->
<?php
	include 'navbar.php';
?>
<!-- End Navbar -->

<!-- Contain -->

<div class="main">
<center>
	<table class="box-style">
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
      $total_keseluruhan = 0;
			while($row = mysqli_fetch_array($sql_keranjang)) {
				$get_link = $link_server."/phpapsi/Modul%20PHP%20Mysql/hapus-dariKeranjang.php?barang_id=".$row[3];
		?>
		<tr>
			<td align="center"><?php echo $x; ?></td>
			<td><?php echo $row[0]; ?></td>
<<<<<<< HEAD
			<td><?php echo $row[1]; ?></td>
			<td>Rp. <?php echo $row[2]; ?></td>
			<td><a href="<?php echo $get_link; ?>"><button>Hapus</button></a></td>
=======
			<td align="center"><?php echo $row[1]; ?></td>
			<td align="right">Rp. <?php echo $row[2]; ?></td>
      <td><button type="button" name="hapus">Hapus</button></td>
>>>>>>> 484dd4ead40bf94a33009a8a8ef393575ddd67a8
		</tr>
		<?php
		$x++;
    $total_keseluruhan += $row[2];
	}
<<<<<<< HEAD
}else { ?>
	<tr>
		<td colspan="5">Data keranjang Kosong</td>
	</tr>
<?php } ?>
=======
	} ?>
  <tr>
    <td colspan="4" align="right">Total Keseluruhan : </td>
    <td>Rp. <?php echo $total_keseluruhan; ?></td>
  </tr>
>>>>>>> 484dd4ead40bf94a33009a8a8ef393575ddd67a8
	</table>
  <br/>
	<button>Beli</button>
</center>
</div>

<!-- End Contain -->

<!-- Footer -->
<?php
	include 'footer.php';
?>
<!-- End Footer -->
</body>
</html>
