<?php
  include 'koneksi.php';
  //Cek apakah parameter kode_barang ada di url
  if(!isset($_GET['barang_id'])){
    header('Location: '.$link_server."/phpapsi/Modul%20PHP%20Mysql/");
  }
    //Gunakan session untuk mengambil pelanggan_id yang sedang login
    $session_pelanggan_id = "1";
    $barang_id = $_GET['barang_id'];
    //Cek(Query) apakah user ini memiliki transaksi aktif atau tidak
    $sql_cekUser = "SELECT id FROM tb_keranjang WHERE pelanggan_id = $session_pelanggan_id AND isused = 1";
    $result_cekUser = mysqli_query($conn, $sql_cekUser);
    if($result_cekUser){echo "DONE";}else{echo "FAIL";}

    if(mysqli_num_rows($result_cekUser) == 1){}else{
      echo mysqli_num_rows($result_cekUser)."<br>";
      //Jika tidak memiliki transaksi aktif maka buat data di tb_transaksi dan tb_detail_keranjang serta tb_transaksi(buat status on_keranjang)
      $sql_newKeranjang = "INSERT INTO tb_keranjang (isused,pelanggan_id) SELECT true,tbpel.id
                        FROM tb_pelanggan tbpel
                        WHERE tbpel.id = '$session_pelanggan_id'";
      $result_newKeranjang = mysqli_query($conn, $sql_newKeranjang);
      if($result_newKeranjang){echo "newKeranjangDONE<br>";}else{echo "newKeranjangFAIL<br>";}
    }

    $sql_insertDetailKeranjang = "INSERT INTO tb_detail_keranjang (keranjang_id, barang_id, jumlah) VALUES(
      (SELECT id FROM tb_keranjang WHERE pelanggan_id = $session_pelanggan_id),
      (SELECT id FROM tb_barang WHERE id = $barang_id),
      1)";
    $result_insertDetailKeranjang = mysqli_query($conn,$sql_insertDetailKeranjang);
    if($result_insertDetailKeranjang){echo "insertDetailKeranjangDONE<br>";}else{echo "insertDetailKeranjangFAIL<br>";}
    header('Location: '.$link_server."/phpapsi/Modul%20PHP%20Mysql/keranjang.php");
  ?>
