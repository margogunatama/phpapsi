<!DOCTYPE html>
<?php
  include('koneksi.php');
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "SELECT id, nama, email, alamat, telepon, username from tb_pelanggan WHERE id = $id";
  }
?>
<html>
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
                  <h3>Update Pembeli</h3>
                  <form action="dashboard-pembeli.php" method="POST">

                          <?php
                            if(isset($_GET['id'])){
                              $result = mysqli_query($conn, $query);
                               if($result){
                                  while($data_pembeli = mysqli_fetch_row($result)){
                          ?>

                        <div class="labelright"><input type="hidden" value=<?php echo $data_pembeli[0]; ?>  name="id"></div>
                        </br>
                        <div class="labelleft"><label><b>User ID</b></label></div>
                        <div class="labelright"><input type="text" value=<?php echo $data_pembeli[0]; ?> name="id_pembeli" disabled></div>
                        </br>
                        <div class="labelleft"><label><b>Nama</b></label></div>
                        <div class="labelright"><input type="text" value=<?php echo $data_pembeli[1]; ?>   name="nama" required></div>
                        </br>
                        <div class="labelleft"><label><b>Email</b></label></div>
                        <div class="labelright"><input type="text" value=<?php echo $data_pembeli[2]; ?>  name="email" required></div>
                        </br>
                        <div class="labelleft"><label><b>Alamat</b></label></div>
                        <div class="labelright"><input type="text" value=<?php echo $data_pembeli[3]; ?>  name="alamat" required></div>
                        </br>
                        <div class="labelleft"><label><b>Telepon</b></label></div>
                        <div class="labelright"><input type="text" value=<?php echo $data_pembeli[4]; ?>  name="telepon" required></div>
                        </br>
                        <div class="labelleft"><label><b>Username</b></label></div>
                        <div class="labelright"><input type="text" value=<?php echo $data_pembeli[5]; ?>  name="username" required></div>
                        </br>
                          <?php
                              }
                            }
                          }
                            ?>
                        <button class='button' name="btnUpdate" type='vertical-align:middle'>Update</button>
                    </form>
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
