<?php
  include 'koneksi.php';
  //Cek apakah parameter kode_barang ada di url
  if(isset($_GET['kode_barang'])){
    header('Location: '.$link_server."/phpapsi/Modul%20PHP%20Mysql/");
  }
    //Gunakan session untuk mengambil pelanggan_id yang sedang login
    $pelanggan_id = "1";
    //Cek(Query) apakah user ini memiliki transaksi aktif atau tidak
    $sql_cekUser = "SELECT keranjang_id FROM tb_transaksi WHERE pelanggan_id = $pelanggan_id AND status = 0";
    $result_cekUser = mysqli_query($conn, $sql_cekUser);
    if(mysqli_num_rows($result_cekUser) == 0){
      echo mysqli_num_rows($result_cekUser)."<br>";
      //Jika tidak memiliki transaksi aktif maka buat data di tb_transaksi dan tb_detail_keranjang serta tb_transaksi(buat status on_keranjang)
      $sql_newKeranjang = "INSERT INTO tb_keranjang (isused,pelanggan_id) SELECT true,tbpel.id
                        FROM tb_pelanggan tbpel
                        WHERE tbpel.id = '$pelanggan_id'";
      $result_newKeranjang = mysqli_query($conn, $sql_newKeranjang);
      if($result_newKeranjang){echo "newKeranjangDONE<br>";}else{echo "newKeranjangFAIL<br>";}


    }


  ?>
