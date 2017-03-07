<!DOCTYPE html>
<?php
  include('koneksi.php');
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style-admin.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
              <div class="left-bar">
                <h2>Admin</h2>
              </div>
              <div class="right-bar">
                <a href="login.php">Logout</a>
              </div>
            </div>

            <div class="middle">
                <div class="left-bar">
                  <ul>
                      <li><a href="dashboard-admin.php">Dashboard</a></li>
                      <li><a href="dashboard-kategori.php">Kategori</a></li>
                      <li><a href="dashboard-barang.php">Barang</a></li>
                      <li><a class="active" href="dashboard-transaksi.php">Transaksi</a></li>
                      <li><a href="dashboard-pembeli.php">Pembeli</a></li>
                  </ul>
                </div>
                <div class="content">
                    <h3>Master Data Transaksi</h3>
                    <form>
                    <button class="button" style="vertical-align:middle">View</button>
                    </form>
                    <div class="scrolltable">

                    <?php
                      $query = "SELECT tb_transaksi.id, tb_pelanggan.nama, tb_pelanggan.alamat, tb_pelanggan.telepon, tb_transaksi.keranjang_id, tb_metode_pembayaran.metode_pembayaran, tb_transaksi.total_keseluruhan, tb_transaksi.tanggal_beli from tb_transaksi INNER JOIN tb_metode_pembayaran ON tb_transaksi.metode_id = tb_metode_pembayaran.id INNER JOIN tb_pelanggan ON tb_transaksi.pelanggan_id = tb_pelanggan.id";
                         $result = mysqli_query($conn, $query);
                         if($result){
                    ?>

                    <table class="box-style">
                        <tr>
                        <th>Id Transaksi</th>
                        <th>Nama Pembeli</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Id Keranjang</th>
                        <th>Metode Pembayaran</th>
                        <th>Total Transaksi</th>
                        <th>Tanggal Transaksi</th>
                        </tr>
                          <?php
                            while($row = mysqli_fetch_row($result)){
                          ?>
                        <tr>
                          <?php 
                              $idTransaksi = $row[0];
                              $namaPembeli = $row[1];
                              $alamat = $row[2];
                              $noTelp = $row[3];
                              $idKeranjang = $row[4];
                              $metodePembayaran = $row[5];
                              $totalTransaksi = $row[6];
                              $tglTransaksi = $row[7];
                           ?>

                           <td><?php echo $idTransaksi; ?></td>
                           <td><?php echo $namaPembeli; ?></td>
                           <td><?php echo $alamat; ?></td>
                           <td><?php echo $noTelp; ?></td>
                           <td><?php echo $idKeranjang; ?></td>
                           <td><?php echo $metodePembayaran; ?></td>
                           <td><?php echo "Ro. ". $totalTransaksi; ?></td>
                           <td><?php echo $tglTransaksi; ?></td>
                        </tr>
                        <?php
                          }
                        ?>
                    </table>
                  <?php
                    mysqli_free_result($result);
                  }
                  mysqli_close($conn);
                  ?>
                  </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="footer">
              <h4>Copyright &copy; 2017</h4>
            </div>
        </div>
    </body>
</html>
