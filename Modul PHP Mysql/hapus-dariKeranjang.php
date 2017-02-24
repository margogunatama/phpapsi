<?php
  include 'koneksi.php';
  include 'islogin.php';
  if(!isset($_GET['barang_id'])){
    header('Location: '.$link_server."/phpapsi/Modul%20PHP%20Mysql/keranjang.php");
  }
  //Ambil data keranjang_id yang digunakan
  $sql_cekUser = "SELECT id FROM tb_keranjang WHERE pelanggan_id = $session_pelanggan_id AND isused = 1";
  $result_cekUser = mysqli_query($conn, $sql_cekUser) or die(mysqli_error());
  $row_cekUser = mysqli_fetch_array($result_cekUser);

  //Ambid data barang yang ingin dihapus
  $barang_id = $_GET['barang_id'];

  //buat query untuk menghapus barang lalu jalankans
  $sql_hapusBarang = "DELETE FROM tb_detail_keranjang WHERE barang_id = $barang_id AND keranjang_id = $row_cekUser[0]";
  $result_hapusBarang = mysqli_query($conn,$sql_hapusBarang);
  if($result_hapusBarang){
    echo "<script>alert('Data berhasil di hapus');</script>";
    $home = $link_server."/phpapsi/Modul%20PHP%20Mysql/keranjang.php";
    echo "<script>window.location.href = '".$home."';</script>";

  }

?>
