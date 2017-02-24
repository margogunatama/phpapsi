<?php
  include 'koneksi.php';
  include 'islogin.php';

  if(isset($_POST['no_nota'])){
    $id = $_POST['no_nota'];
    $keranjang_id = $_POST['keranjang_id'];
    $metode_id = $_POST['metode_id'];
    $total_keseluruhan = $_POST['total_keseluruhan'];
    $pelanggan_id = $_POST['pelanggan_id'];
    $tanggal_beli = $_POST['tanggal_beli'];
  }else{
    header("Location: index.php");
  }

  $sql_insertTransaksi = "INSERT INTO tb_transaksi VALUES(
                                                          $id,
                                                          (SELECT id FROM tb_keranjang WHERE id = $keranjang_id),
                                                          (SELECT id FROM tb_metode_pembayaran WHERE id = $metode_id),
                                                          $total_keseluruhan,
                                                          $pelanggan_id,
                                                          '$tanggal_beli')";
  //echo $sql_insertTransaksi;
  $sql_updateKeranjang = "UPDATE tb_keranjang SET isused = 0 WHERE id = $keranjang_id AND pelanggan_id = $pelanggan_id";

  $result_insertTransaksi = mysqli_query($conn, $sql_insertTransaksi);
  $result_updateKeranjang = mysqli_query($conn, $sql_updateKeranjang);

  if($result_insertTransaksi && $result_updateKeranjang){
    echo "<script>alert('Terima kasih telah berbelanja di APSI TI');</script>";
    $home = $link_server."/phpapsi/Modul%20PHP%20Mysql/index.php";
    echo "<script>window.location.href = '".$home."';</script>";

  }
 ?>
