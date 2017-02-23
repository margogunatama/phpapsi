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
                    <h3>Master Data Barang</h3>
                    <button class="button" style="vertical-align:middle"><span>New </span></button>
                    <div class="scrolltable">
                      <table>
                          <tr>
                              <th>Kode Barang</th>
                              <th>Nama Barang</th>
                              <th>Harga</th>
                              <th>Stok</th>
                              <th>ID Kategori</th>
                              <th></th>
                              <th></th>
                          </tr>
                          <tr>
                              <td>ABC</td>
                              <td>Kecap ABC</td>
                              <td>20000</td>
                              <td>20</td>
                              <td>ABC</td>
                              <td><button class='button' type='vertical-align:middle'>Edit</button></td>
                              <td><button class='button' type='vertical-align:middle'>Delete</button></td>
                          </tr>
                    </table>
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
