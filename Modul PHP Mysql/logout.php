<?php
  session_start();
  unset($_SESSION['pelanggan_id']);
  unset($_SESSION['is_logged']);
  unset($_SESSION['email_pelanggan']);
  header("Location: index.php");
 ?>
