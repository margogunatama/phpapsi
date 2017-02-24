<!DOCTYPE html>

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
                <a href="login.html">Logout</a>
              </div>
            </div>

            <div class="middle">
                <div class="left-bar">
                  <ul>
                    <li><a href="dashboard-admin.php">Dashboard</a></li>
                    <li><a class="active" href="dashboard-kategori.php">Kategori</a></li>
                    <li><a href="dashboard-barang.php">Barang</a></li>
                    <li><a href="dashboard-transaksi.php">Transaksi</a></li>
                    <li><a href="dashboard-pembeli.php">Pembeli</a></li>
                  </ul>
                </div>
                <div class="content">
                    <h3>Insert Kategori</h3>
                    <form action="form-kategori-insert.php" method="POST">
                          <div class="labelleft"><label><b>Nama Kategori</b></label></div>
                          <div class="labelright"><input type="text" placeholder="Nama Kategori" name="kategori" required></div>
                          </br>
                          <button class='button' name='btnSubmit' type='vertical-align:middle'>Insert</button>
                          <a class='button' href='dashboard-kategori.php' name='btnCancel' type='vertical-align:middle'>Cancel</a>
                      </form>
                      <?php
                          include('koneksi.php');
                          if(isset($_POST['btnSubmit'])){
                            $kategori = $_POST['kategori'];
                            $query = "INSERT INTO tb_kategori_barang(nama_kategori) values('$kategori')";
                            $result = mysqli_query($conn, $query);
                            //$num = mysqli_affected_rows();
                            if($result){
                              echo'<p>Data berhasil disimpan</p><a href="dashboard-kategori.php"> kembali ke tabel kategori</a>';
                            }else{
                              echo'<p>Data gagal disimpan</p>';
                            }
                          }
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
