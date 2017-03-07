<!DOCTYPE html>
<?php
	require_once 'koneksi.php';

	if (isset($_POST['btn-login'])) {

 $username = strip_tags($_POST['uname']);
 $password = strip_tags($_POST['psw']);

 $query = mysqli_query($conn, "SELECT username, password, id FROM tb_pelanggan WHERE username='$username'");
 $row=mysqli_fetch_array($query);

 $count = mysqli_num_rows($query); // if email/password are correct returns must be 1 row

 if (password_verify($password, $row['password']) && $count==1) {

	ob_start();
	session_start();
	$_SESSION['is_logged'] = true;
	$query_forSession = mysqli_query($conn,"SELECT id, email FROM tb_pelanggan WHERE id = $row[2]");
	$row_forSession = mysqli_fetch_array($query_forSession);
	$_SESSION['pelanggan_id'] = $row_forSession[0];
	$_SESSION['email_pelanggan'] = $row_forSession[1];
	header("Location: index.php");
	// $msg = "<div class='alert alert-success'>
	//    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Access Granted !
	//   </div>";
	// echo "<script>
	// 			 window.alert('bener');
	// 		 </script>";
	echo "benar";
 } else {
	 echo "<script>
	 				window.alert('This Account Failed to Login');
	 			</script>";
 }
  mysqli_close($conn);
}
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
<form method="post" action="login.php">
  <div class="container">
  <div class="imgcontainer">
    <img src="images/Logo1.png" width="100px" height="100px" alt="Avatar" class="avatar">
  </div>
  <br>
    <label><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>
    <label><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
		<input type="submit" name="btn-login" value="Login">
    <hr>
    <span class="psw"><a href="register.php">Don't have an account?</a></span>
  </div>
</form>
</body>
</html>
