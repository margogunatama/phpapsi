<!DOCTYPE html>
<?php
	require_once 'koneksi.php';

	if (isset($_POST['btn-login'])) {

 $username = strip_tags($_POST['uname']);
 $password = strip_tags($_POST['psw']);

 $query = mysqli_query("SELECT username, password FROM tb_admin WHERE username='$username'");
 $row=mysqli_fetch_array($query);

 $count = mysqli_num_rows($query); // if email/password are correct returns must be 1 row

 if (password_verify($password, $row['password']) && $count==1) {
  // header("Location: home.php");
	// $msg = "<div class='alert alert-success'>
  //    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Access Granted !
  //   </div>";
	echo "<script>
				 window.alert('bener');
			 </script>";
 } else {
	 echo "<script>
	 				window.alert('salah');
	 			</script>";
 }
 $conn->close();
}
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<form method="post" action="login.php">
  <div class="container">
  <div class="imgcontainer">
    <img src="images/Logo1.png" width="100px" height="100px" alt="Avatar" class="avatar">
  </div>
  <br>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
		<input type="submit" name="btn-login" value="Login">
    <hr>
    <span class="psw"><a href="#">Don't have an account?</a></span>
  </div>
</form>
</body>
</html>
