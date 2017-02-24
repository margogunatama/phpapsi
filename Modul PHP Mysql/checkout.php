<?php
  include 'koneksi.php';

  //session
	$session_pelanggan_id = 1;

  $sql_keranjang = mysqli_query($conn,"SELECT tb_barang.nama_barang, tb_detail_keranjang.jumlah, (tb_detail_keranjang.jumlah*tb_barang.harga)
                                        FROM tb_barang
                                        INNER JOIN tb_detail_keranjang ON tb_detail_keranjang.barang_id = tb_barang.id
                                        INNER JOIN tb_keranjang ON tb_detail_keranjang.keranjang_id = tb_keranjang.id
                                        WHERE tb_keranjang.pelanggan_id = $session_pelanggan_id;");

  $sql_pelanggan = mysqli_query($conn, "SELECT tb_keranjang.id, tb_pelanggan.nama
                                        FROM tb_keranjang
                                        INNER JOIN tb_pelanggan ON tb_keranjang.pelanggan_id = tb_pelanggan.id
                                        WHERE tb_keranjang.isused = 1
                                        AND tb_keranjang.pelanggan_id = $session_pelanggan_id");
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
	<caption><h4>Checkout Keranjang</h4></caption>
  <?php
    $today = date("Y-m-d H:i");
    while($row = mysqli_fetch_array($sql_pelanggan)) {
   ?>
    <tr>
        <td>No Nota </td><td> : <?php echo $row[0]; ?></td>
        <td>&nbsp;</td><td>&nbsp;</td>
    </tr>
    <tr>
        <td>Pelanggan </td><td> : <?php echo $row[1]; ?></td>
        <td>Tanggal </td><td>: <?php  echo $today;?></td>
    </tr>
    <?php } ?>
    <tr>
        <td>&nbsp;</td><td>&nbsp;</td>
        <td>&nbsp;</td><td>&nbsp;</td>
    </tr>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Sub-Total</th>
		</tr>
		<?php
		if (mysqli_num_rows($sql_keranjang) > 0) {
			// output data of each row
		 	$x = 1;
      $total_keseluruhan = 0;
			while($row = mysqli_fetch_array($sql_keranjang)) {

		?>
		<tr>
			<td align="center"><?php echo $x; ?></td>
			<td><?php echo $row[0]; ?></td>
			<td align="center"><?php echo $row[1]; ?></td>
			<td align="right">Rp. <?php echo $row[2]; ?></td>
		</tr>
		<?php
		$x++;
    $total_keseluruhan += $row[2];
	}
	} ?>
  <tr>
    <td colspan="3" align="right">Total Keseluruhan : </td>
    <td align=right>Rp. <?php echo $total_keseluruhan; ?></td>
  </tr>
	</table>
  <br/>
  <center>
  <?php
    $sql_kategori = mysqli_query($conn,"SELECT * FROM tb_metode_pembayaran");
   ?>
  <p>Pilih Metode Pembayaran :
    <select class="" name="">
      <?php
      if (mysqli_num_rows($sql_kategori) > 0) {
  			// output data of each row
  			while($row = mysqli_fetch_array($sql_kategori)) {
       ?>
      <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
      <?php  }
    }?>
    </select>
  </p>
</center>
</div>
<button type="button" name="button">Checkout</button>
<!-- End Contain -->

<!-- Footer -->
<?php
	include 'footer.php';
?>
<!-- End Footer -->
</body>
</html>
