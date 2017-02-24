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
                    <li><a class="active" href="dashboard-barang.php">Barang</a></li>
                    <li><a href="dashboard-transaksi.php">Transaksi</a></li>
                    <li><a href="dashboard-pembeli.php">Pembeli</a></li>
                  </ul>
                </div>
                <div class="content">
                  <h3>Insert Barang</h3>
                  <form action="form-barang-insert.php" method="POST">
                        <div class="labelleft"><label><b>Nama Barang</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Nama Barang" name="nama_barang" required></div>
                        </br>
                        <div class="labelleft"><label><b>Harga</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Harga" name="harga" required></div>
                        </br>
                        <div class="labelleft"><label><b>Stok</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Stok" name="stok" required></div>
                        </br>
                        <div class="labelleft"><label><b>Kategori</b></label></div>
                        <div class="labelright">
                          <select name="kategori">
                            <?php
                                $query = "SELECT * FROM tb_kategori_barang";
                                $result = mysqli_query($conn, $query);
                                while($row=mysqli_fetch_row($result)){                                                 
                                   echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                }
                            ?>
                          </select>
                        </div>
                        </br>
                        <button class='button' name='btnSubmit' type='vertical-align:middle'>Insert</button>
                        <a class='button' href='dashboard-barang.php' name='btnCancel' type='vertical-align:middle'>Cancel</a>
                    </form>
                    <?php
                          if(isset($_POST['btnSubmit'])){
                            $nama_barang = $_POST['nama_barang'];
                            $harga = $_POST['harga'];
                            $stok = $_POST['stok'];
                            $kategori = $_POST['kategori'];
                            $query = "INSERT INTO tb_barang(nama_barang, harga, stok, kategori_id) 
                            values('$nama_barang',$harga,$stok,$kategori)";
                            $result = mysqli_query($conn, $query);
                            //$num = mysqli_affected_rows();
                            if($result){
                              echo'<p>Data berhasil disimpan</p><a href="dashboard-barang.php"> kembali ke tabel kategori</a>';
                            }else{
                              echo'<p>Data gagal disimpan</p>';
                            }
                          }
                        ?>
                </div>
            </div>
            <div class="clear"></div>
            <div class="footer">
              <h4>Copyright &copy; 2017</h4>
            </div>
        </div>
    </body>
</html>
