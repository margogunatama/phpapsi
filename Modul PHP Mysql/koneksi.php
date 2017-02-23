<?php
//Dipakai jika ingin memanggil default url
$link_server = "http://$_SERVER[HTTP_HOST]";
//=======================================
$server="localhost";
$username = "root";
$password = "";
$database = "db_toko_online";
$mysqli = new \mysqli($server, $username, $password, $database);
    if (\mysqli_connect_errno()) {
      echo"koneksi gagal";
    }else{
      echo"koneksi berhasil";
    }
?>
