<?php
require_once 'koneksi.php';

if(isset($_POST['btn-signup'])) {

 $uname = strip_tags($_POST['username']);
 $upass = strip_tags($_POST['password']);
 $nama = strip_tags($_POST['nama']);
 $email = strip_tags($_POST['email']);
 $alamat = strip_tags($_POST['alamat']);
 $phone = strip_tags($_POST['phone']);

 $hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version

 $check_email = mysqli_query($conn, "SELECT email FROM tb_pelanggan WHERE email='$email'");
 $count=mysqli_num_rows($check_email);

 if ($count==0) {

  $query = "INSERT INTO tb_pelanggan (username,password,nama,email,alamat,telepon) VALUES('$uname','$hashed_password','$nama','$email','$alamat','$phone')";

  if (mysqli_query($conn,$query)) {
   echo "<script>
 				 window.alert('ANJAAY');
         window.location='login.php';
 			  </script>";

  }else {
   echo "<script>
 				 window.alert('gagal');
 			 </script>";
  }

 } else {
echo "<script>
       window.alert('email sudah terpakai');
     </script>";
  //
  // $msg = "<div class='alert alert-danger'>
  //    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
  //   </div>";

 }

 mysqli_close($conn);
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrasi</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<div class="signin-form">

 <div class="container">


       <form class="form-signin" method="post" id="register-form" action="register.php">

        <h2 class="form-signin-heading">Sign Up</h2><hr />

        <?php
  if (isset($msg)) {
   echo $msg;
  }
  ?>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="username" required  />
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Nama" name="nama" required  />
        </div>

        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email" name="email" required  />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <textarea name="alamat" placeholder="Alamat Lengkap" rows="8" cols="80"></textarea>
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="No Telepon" name="phone" maxlength="12" required/>
        </div>

      <hr />

        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
   </button>
            <a href="login.php" class="btn btn-default" style="float:right;">Log In Here</a>
        </div>

      </form>

    </div>

</div>

</body>
</html>
