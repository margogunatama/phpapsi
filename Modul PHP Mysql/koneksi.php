<?php
$server="localhost";
$username = "root";
$password = "";
$database = "db_toko_online";
$conn = new \mysqli($server, $username, null, $database);
    if (\mysqli_connect_errno()) {
      echo"koneksi gagal";
    }else{
      // echo"koneksi berhasil";
    }
?>
