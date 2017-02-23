<!DOCTYPE html>
<?php
  include('koneksi.php');
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "SELECT * from tb_kategori_barang WHERE id = $id";
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
                    <form action="dashboard-kategori.php" method="POST">
                          <div class="labelleft"><label><b>Nama Kategori</b></label></div>
                          <div class="labelright">
                          <?php
                            if(isset($_GET['id'])){
                              $result = mysqli_query($conn, $query);
                               if($result){
                                  while($row = mysqli_fetch_row($result)){
                          ?>
                            <input type="text" placeholder="Nama Kategori" name="kategori" value=<?php echo $row[1]; ?> required>
                            <input type="hidden" placeholder="Id Kategori" name="id_kategori" value=<?php echo $row[0]; ?> required>
                            <?php
                              }
                            }
                          }
                            ?>
                          </div>
                          </br>
                          <button class='button' name='btnUpdate' type='vertical-align:middle'>Update</button>
                          <a class='button' href='dashboard-kategori.php' name='btnCancel' type='vertical-align:middle'>Cancel</a>
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
