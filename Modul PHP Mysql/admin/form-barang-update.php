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
                  <form action="#" method="POST">
                        <div class="labelleft"><label><b>Barang ID</b></label></div>
                        <div class="labelright"><input type="text" value="Barang ID" name="" disabled></div>
                        </br>
                        <div class="labelleft"><label><b>Nama Barang</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Nama Barang" name="" required></div>
                        </br>
                        <div class="labelleft"><label><b>Harga</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Harga" name="" required></div>
                        </br>
                        <div class="labelleft"><label><b>Stok</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Stok" name="" required></div>
                        </br>
                        <button class='button' type='vertical-align:middle'>Update</button>
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
