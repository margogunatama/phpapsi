
<!DOCTYPE html>
<?php
  include('koneksi.php');
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "DELETE from tb_kategori_barang WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if($result){
      //header("Refresh:0");
    }else{
      echo "Data gagal dihapus";
    }
  }else if(isset($_POST['btnUpdate'])){
                            $kategori = $_POST['kategori'];
                            $id = $_POST['id_kategori'];
                            //var_dump("INI id nya = " + $id);
                            $query = "UPDATE tb_kategori_barang SET nama_kategori='$kategori' WHERE id=$id";
                            //var_dump("INI query nya = " + $query);
                            $result = mysqli_query($conn, $query);
                            //$num = mysqli_affected_rows();
                            if($result){
//                              echo'Data berhasil diupdate';
                            }else{
                              echo'Data gagal diupdate';
                            }
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
                    <h3>Master Data Kategori</h3>
                    <a class="button" href="form-kategori-insert.php" style="vertical-align:middle"><span>New </span></a>
                    <div class="scrolltable">
                      <?php
                         $query = "SELECT * FROM tb_kategori_barang";
                         $result = mysqli_query($conn, $query);
                         if($result){
                      ?>
                    <table class="box-style">
                        <tr>
                            <th>Nama Kategori</th>
                            <th></th>
                            <th></th>
                        </tr>
                          <?php
                            while($row = mysqli_fetch_row($result)){
                          ?>
                        <tr>
                            <?php
                                $id = $row[0];
                                $kategori = $row[1];
                            ?>
                            <td><?php echo $kategori; ?></td>
                            <td><a class='button' href=<?php echo "form-kategori-update.php?id=$id";?> type='vertical-align:middle'>Edit</a></td>
                            <td><a class='button' href=<?php echo "dashboard-kategori.php?id=$id"; ?> type='vertical-align:middle'>Delete</a></td>
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
