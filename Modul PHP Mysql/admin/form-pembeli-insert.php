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
                      <li><a href="dashboard-transaksi.php">Transaksi</a></li>
                      <li><a class="active" href="dashboard-pembeli.php">Pembeli</a></li>
                  </ul>
                </div>
                <div class="content">
                  <h3>Insert Pembeli</h3>
                  <form action="#" method="POST">
                        <div class="labelleft"><label><b>Nama</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Nama" name="nama" required></div>
                        </br>
                        <div class="labelleft"><label><b>Email</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Email" name="email" required></div>
                        </br>
                        <div class="labelleft"><label><b>Alamat</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Alamat" name="alamat" required></div>
                        </br>
                        <div class="labelleft"><label><b>Telepon</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Telepon" name="telepon" required></div>
                        </br>
                        <div class="labelleft"><label><b>Username</b></label></div>
                        <div class="labelright"><input type="text" placeholder="username" name="username" required></div>
                        </br>
                        <div class="labelleft"><label><b>Password</b></label></div>
                        <div class="labelright"><input type="password" placeholder="password" name="password" required></div>
                        </br>
                        <button class='button' name='btnSubmit' type='vertical-align:middle'>Insert</button>
                         <br><br><br>
                      </form>

                        <?php  

                          if (isset($_POST['btnSubmit'])){
                            $nama = $_POST['nama'];
                            $email = $_POST['email'];
                            $alamat = $_POST['alamat'];
                            $telepon = $_POST['telepon'];
                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            $hashed_password = password_hash($password, PASSWORD_DEFAULT); 

                            $query = "INSERT into  tb_pelanggan (nama, email, alamat, telepon, username, password) values ('$nama', '$email', '$alamat', '$telepon', '$username', '$hashed_password')";
                            $result = mysqli_query($conn, $query);
                            //$num = mysqli_affected_rows();
                            if($result){
                              echo'<p>Data berhasil disimpan</p><a href="dashboard-pembeli.php"> kembali ke halaman dashboard pembeli</a>';
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
