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
                      <li><a href="dashboard-barang.php">Barang</a></li>
                      <li><a href="dashboard-transaksi.php">Transaksi</a></li>
                      <li><a class="active" href="dashboard-pembeli.php">Pembeli</a></li>
                  </ul>
                </div>
                <div class="content">
                  <h3>Insert Pembeli</h3>
                  <form action="#" method="POST">
                        <div class="labelleft"><label><b>Nama</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Nama" name="" required></div>
                        </br>
                        <div class="labelleft"><label><b>Email</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Email" name="" required></div>
                        </br>
                        <div class="labelleft"><label><b>Alamat</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Alamat" name="" required></div>
                        </br>
                        <div class="labelleft"><label><b>Telepon</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Telepon" name="" required></div>
                        </br>
                        <div class="labelleft"><label><b>User ID</b></label></div>
                        <div class="labelright"><input type="text" placeholder="User ID" name="" required></div>
                        </br>
                        <button class='button' type='vertical-align:middle'>Insert</button>
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
