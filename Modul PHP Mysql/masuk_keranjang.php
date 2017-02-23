<?php
  //Cek apakah parameter kode_barang ada di url
  if(isset($_GET['kode_barang'])){
    //Gunakan session untuk mengambil user_id yang sedang login
    $user_id = null;
    //Cek(Query) apakah user ini memiliki transaksi aktif atau tidak
    //Jika memiliki transaksi aktif maka masukkan barang ke tb_detail_transaksi
    //Jika tidak memiliki transaksi aktif maka buat data di tb_transaksi dan tb_detail_transaksi serta tb_pembayaran(buat status on_hold)
    if($user_id != null){

    }
  }
 ?>
