<!DOCTYPE html>
<?php
  include('koneksi.php');
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "SELECT * from tb_barang WHERE id = $id";
  }
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
                  <h3>Update Barang</h3>
                  <form action="dashboard-barang.php" method="POST">

                        <?php
                            if(isset($_GET['id'])){
                              $result = mysqli_query($conn, $query);
                               if($result){
                                  while($data_barang = mysqli_fetch_row($result)){
                          ?>
                        
                        <div class="labelright"><input type="hidden" value=<?php echo $data_barang[0]; ?> name="id_barang"></div>
                        </br>
                        <div class="labelleft"><label><b>Barang ID</b></label></div>
                        <div class="labelright"><input type="text" value=<?php echo $data_barang[0]; ?> disabled></div>
                        </br>
                        <div class="labelleft"><label><b>Nama Barang</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Nama Barang" value=<?php echo $data_barang[1]; ?> 
                        name="nama_barang" required></div>
                        </br>
                        <div class="labelleft"><label><b>Harga</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Harga" value=<?php echo $data_barang[2]; ?> name="harga" required></div>
                        </br>
                        <div class="labelleft"><label><b>Stok</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Stok" value=<?php echo $data_barang[3]; ?> name="stok" required></div>
                        </br>
                        <div class="labelleft"><label><b>Kategori</b></label></div>
                        <div class="labelright">
                          <select name="kategori">
                            <?php
                                $query = "SELECT * FROM tb_kategori_barang";
                                $result = mysqli_query($conn, $query);
                                while($row=mysqli_fetch_row($result)){                                                 
                                   echo "<option value='".$row[0]."'" ?> 
                                   <?php 
                                        if($row[0]==$data_barang[4]) {
                                            echo 'selected="selected"';
                                        }
                                    ?>
                                    <?php echo">".$row[1]."</option>";
                                }
                            ?>
                          </select>
                        </div>
                        <?php
                              }
                            }
                          }
                            ?>
                        <button class='button' name='btnUpdate' type='vertical-align:middle'>Update</button>
                        <a class='button' href='dashboard-barang.php' name='btnCancel' type='vertical-align:middle'>Cancel</a>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
            <div class="footer">
              <h4>Copyright &copy; 2017</h4>
            </div>
        </div>
    </body>
</html>
