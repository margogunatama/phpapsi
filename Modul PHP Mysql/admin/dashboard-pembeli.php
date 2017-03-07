<!DOCTYPE html>

<?php
  include('koneksi.php');
    if(isset($_GET['id'])){
      $id = mysqli_real_escape_string($conn, $_GET['id']);
      $query = "DELETE from tb_pelanggan WHERE id = $id";
      $result = mysqli_query($conn, $query);
      if($result){
        //header("Refresh:0");
      }else{
        //echo "Data gagal dihapus";
      }
    } else if (isset($_POST['btnUpdate'])) {
       $id = $_POST['id'];
       $nama = $_POST['nama'];
       $email = $_POST['email'];
       $alamat = $_POST['alamat'];
       $telepon = $_POST['telepon'];
       $username = $_POST['username'];
       // $password = $_POST['password'];
       // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

       $query = "UPDATE tb_pelanggan SET ".
          "nama = '$nama', ".
          "email ='$email',".
          "alamat ='$alamat',".
          "telepon ='$telepon',".
          "username ='$username' ".
          "WHERE id = '$id'";

           //var_dump("INI query nya = " + $query);
           $result = mysqli_query($conn, $query);
          //$num = mysqli_affected_rows();
          if($result){
          // echo'Data berhasil diupdate';
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
                    <h3>Master Data Pembeli</h3>
                    <form action="form-pembeli-insert.php" method="post">
                    <button class="button" style="vertical-align:middle"><span>New </span></button>
                    </form>
                    <div class="scrolltable">

                    <?php
                      $query = "SELECT nama, email, alamat, telepon, id from tb_pelanggan";
                         $result = mysqli_query($conn, $query);
                         if($result){
                    ?>
                    <table class="box-style">

                      <tr>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>Telepon</th>
                          <th colspan="2">Actions</th>
                      </tr>
                          <?php
                            while($row = mysqli_fetch_row($result)){
                          ?>
                      <tr>
                        <?php
                                $nama = $row[0];
                                $email = $row[1];
                                $alamat = $row[2];
                                $telepon = $row[3];
                                $id = $row[4];
                        ?>
                          <td><?php echo $nama; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $alamat; ?></td>
                          <td><?php echo $telepon; ?></td>

                          <td><a class='button' href=<?php echo "form-pembeli-update.php?id=$id";?> type='vertical-align:middle'>Edit</a></td>
                          <!-- <td><a class='button' href=<?php echo "dashboard-pembeli.php?id=$id"; ?> type='vertical-align:middle'>Delete</a></td> -->
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
