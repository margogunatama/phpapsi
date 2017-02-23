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
      $sql_newKeranjang = "INSERT INTO tb_keranjang (pelanggan_id)
                        SELECT tbpel.id
                        FROM tb_pelanggan tbpel
                        WHERE tbpel.id = '$pelanggan_id'";
      $result_newKeranjang = mysqli_query($conn, $sql_newKeranjang);
      if($result_newKeranjang){echo "newKeranjangDONE<br>";}else{echo "newKeranjangFAIL<br>";}

      $sql_cekKeranjang = "SELECT keranjang_id FROM tb_transaksi WHERE pelanggan_id = $pelanggan_id AND status = 0";
      $result_cekKeranjang = mysqli_query($conn, $sql_cekKeranjang);
      $row_cekKeranjang = mysqli_fetch_array($result_cekKeranjang);

      $sql_newTrans = "INSERT INTO tb_transaksi (keranjang_id,pelanggan_id,metode_id,status)
                        VALUES(
                          SELECT id FROM tb_keranjang WHERE pelanggan_id = $row_cekKeranjang[0],
                          
                        )";
      $result_newTrans = mysqli_query($conn, $sql_newTrans);
      if($result_newTrans){echo "newTransDONE<br>";}else{echo "newTransFAIL<br>";}

      // INSERT INTO Images(imgId, imgname, categoryFk)
      //    SELECT 9876, 'photo1.jpg', cat.categoryId
      //    FROM Category cat
      //    WHERE cat.categoryName = 'Category 1';

      // echo $sql_newTrans;
      // if(mysqli_query($conn, $sql_newTrans)){
      //   echo "Done";
      // }else{
      //   echo "Fail";
      // }
    }


    //Jika memiliki transaksi aktif maka update barang ke tb_detail_keranjang
    //$sql_cekUser = "SELECT keranjang_id FROM tb_transaksi WHERE pelanggan_id = $pelanggan_id AND status = 0";
    //$sql_insertTrans = "UPDATE tb_detail_keranjang SET data_barang = '$data_barang' WHERE keranjang_id = '$row_cekUser[0]' ";
?>

  // ======= CONTOH DATA SOURCE KERANJANG
  //  $string = "B3,B5,B6";
  //  $exp_barang = explode(",",$string);

  // ======= CARA UNTUK MENAMBAHKAN DATA KERANJANG
  //  $data_tambahan = array("B7");
  //  if($string == null || $string == ""){
  //    $hasil = implode($data_tambahan,"");
  //  }else{
  //    $hasil = array_merge($exp_barang, $data_tambahan);
  //    $hasil = implode($hasil, ",");
  //  }

  // ======= CARA UNTUK MENGHAPUS DATA KERANJANG
  //  $temp = [];
  //  $key_dihapus = "";
  //    foreach ($exp_barang as $isi) {
  //      if($key_dihapus == $isi){}else{
  //        $arr_isi = array($isi);
  //        $temp = array_merge($temp,$arr_isi);
  //        $hasil = implode($temp, ",");
  //      }
  //    }
