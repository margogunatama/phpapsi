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
                      <li><a class="active" href="dashboard-kategori.php">Kategori</a></li>
                      <li><a href="dashboard-barang.php">Barang</a></li>
                      <li><a href="dashboard-transaksi.php">Transaksi</a></li>
                      <li><a href="dashboard-pembeli.php">Pembeli</a></li>
                  </ul>
                </div>
                <div class="content">
                    <h3>Master Data Kategori</h3>
                    <form action="form-kategori-insert.php" method="post">
                    <button class="button" style="vertical-align:middle"><span>New </span></button>
                    </form>
                    <div class="scrolltable">
                    <table>
                        <tr>
                            <th>Nama Kategori</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>ABC</td>
                            <td><a href="form-kategori-update.php"><button class='button' type='vertical-align:middle'>Edit</button></a></td>
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
