<?php
include 'koneksi.php';
include 'islogin.php';


$sql_keranjang = mysqli_query($conn,"SELECT tb_barang.nama_barang, tb_detail_keranjang.jumlah, (tb_detail_keranjang.jumlah*tb_barang.harga), tb_keranjang.id
FROM tb_barang
INNER JOIN tb_detail_keranjang ON tb_detail_keranjang.barang_id = tb_barang.id
INNER JOIN tb_keranjang ON tb_detail_keranjang.keranjang_id = tb_keranjang.id
WHERE tb_keranjang.pelanggan_id = $session_pelanggan_id AND tb_keranjang.isused = 1;");

$sql_pelanggan = mysqli_query($conn, "SELECT tb_keranjang.id, tb_pelanggan.nama, tb_keranjang.pelanggan_id
  FROM tb_keranjang
  INNER JOIN tb_pelanggan ON tb_keranjang.pelanggan_id = tb_pelanggan.id
  WHERE tb_keranjang.isused = 1
  AND tb_keranjang.pelanggan_id = $session_pelanggan_id");
  $sql_cekidnotaterakhir = mysqli_query($conn, "SELECT id FROM tb_transaksi ORDER BY id DESC LIMIT 1");
  if(mysqli_num_rows($sql_cekidnotaterakhir)==1){
    $row_cekidnotaterakhir = mysqli_fetch_array($sql_cekidnotaterakhir);
    $nota_terakhir = $row_cekidnotaterakhir[0] + 1;
  }else{
    $nota_terakhir = 1;
  }
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
          <caption><h4>Checkout Keranjang</h4></caption>
          <?php
          $today = date("Y-m-d H:i");
          while($row_pelanggan = mysqli_fetch_array($sql_pelanggan)) {
            $pelanggan_id = $row_pelanggan[2];
            ?>
            <tr>
              <td>No Nota </td><td> : <?php echo $nota_terakhir; ?></td>
              <td>&nbsp;</td><td>&nbsp;</td>
            </tr>
            <tr>
              <td>Pelanggan </td><td> : <?php echo $row_pelanggan[1]; ?></td>
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
              while($row_keranjang = mysqli_fetch_array($sql_keranjang)) {
                $keranjang_id = $row_keranjang[3];
                ?>
                <tr>
                  <td align="center"><?php echo $x; ?></td>
                  <td><?php echo $row_keranjang[0]; ?></td>
                  <td align="center"><?php echo $row_keranjang[1]; ?></td>
                  <td align="right">Rp. <?php echo $row_keranjang[2]; ?></td>
                </tr>
                <?php
                $x++;
                $total_keseluruhan += $row_keranjang[2];
              }
            } ?>
            <tr>
              <td colspan="3" align="right">Total Keseluruhan : </td>
              <td align=right>Rp. <?php echo $total_keseluruhan; ?></td>
            </tr>
          </table>
          <br/>

          <?php
          $sql_kategori = mysqli_query($conn,"SELECT * FROM tb_metode_pembayaran");
          ?>
          <form action="checkout-proses.php" method="post">
            <input type="hidden" name="no_nota" value="<?php echo $nota_terakhir; ?>">
            <input type="hidden" name="keranjang_id" value="<?php echo $keranjang_id; ?>">
            <input type="hidden" name="total_keseluruhan" value="<?php echo $total_keseluruhan; ?>">
            <input type="hidden" name="pelanggan_id" value="<?php echo $pelanggan_id; ?>">
            <input type="hidden" name="tanggal_beli" value="<?php echo $today; ?>">
            <p>Pilih Metode Pembayaran :
              <select name="metode_id">
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
            <input type="submit" name="button">
            </form>
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
