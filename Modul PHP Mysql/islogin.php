<?php
  error_reporting(0);
  ob_start();
  session_start();
  if(isset($_SESSION['is_logged'])){
    if($_SESSION['is_logged']){
      $session_pelanggan_id = $_SESSION['pelanggan_id'];
      $session_is_logged = $_SESSION['is_logged'];
      $session_email_pelanggan = $_SESSION['email_pelanggan'];
    }else{
      $_SESSION['is_logged'] = false;
      $session_is_logged = $_SESSION['is_logged'];
    }
  }else{
    $_SESSION['is_logged'] = false;
    $session_is_logged = $_SESSION['is_logged'];
  }
 ?>
