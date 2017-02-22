<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
                      <li><a href="dashboard-barang.html">Barang</a></li>
                      <li><a href="dashboard-transaksi.html">Transaksi</a></li>
                      <li><a class="active" href="dashboard-pembeli.html">Pembeli</a></li>
                  </ul>
                </div>
                <div class="content">
                    <h3>Master Data Pembeli</h3>
                    <button class="button" style="vertical-align:middle"><span>New </span></button>
                    <div class="scrolltable">
                    <table>
                      <tr>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>Telepon</th>
                          <th>User ID</th>
                          <th></th>
                          <th></th>
                      </tr>
                      <tr>
                          <td>Qalbins</td>
                          <td>qalbins@gmail.com</td>
                          <td>Jalan Sukabirus</td>
                          <td>08099787838</td>
                          <td>U908</td>
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
