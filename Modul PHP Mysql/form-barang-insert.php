<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style-admin.css">
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
                      <li><a href="dashboard-admin.html">Dashboard</a></li>
                      <li><a href="dashboard-kategori.html">Kategori</a></li>
                      <li><a class="active" href="dashboard-barang.html">Barang</a></li>
                      <li><a href="dashboard-transaksi.html">Transaksi</a></li>
                      <li><a href="dashboard-pembeli.html">Pembeli</a></li>
                  </ul>
                </div>
                <div class="content">
                  <h3>Insert Barang</h3>
                  <form action="#" method="POST">
                        <div class="labelleft"><label><b>Kode Barang</b></label></div>
                        <div class="labelright"><input type="text" placeholder="Kode Barang" name="" required></div>
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
                        <div class="labelleft"><label><b>ID Barang</b></label></div>
                        <div class="labelright"><input type="text" placeholder="ID Barang" name="" required></div>
                        </br>
                        <button class='button' type='vertical-align:middle'>Insert</button>
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
