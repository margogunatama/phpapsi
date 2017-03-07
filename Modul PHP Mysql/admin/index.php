<!DOCTYPE html>
<?php
include('koneksi.php');

if (isset($_POST['btn-login'])) {

$username = strip_tags($_POST['uname']);
$password = strip_tags($_POST['psw']);

$query = "SELECT username, password FROM tb_admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);

$count = mysqli_num_rows($result); // if email/password are correct returns must be 1 row

if ($count==1) {
echo "<script>
			 window.alert('berhasil masuk');
		 </script>";
header("Location: dashboard-admin.php");
die();
} else {
 echo "<script>
				window.alert('gagal login');
			</script>";
}
mysqli_close($conn);
}
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<form method="post" action="index.php">
  <div class="container">
  <div class="imgcontainer">
    <img src="images/Logo1.png" width="100px" height="100px" alt="Avatar" class="avatar">
  </div>
  <br>
    <label><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>
    <label><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required>
		<input type="submit" name="btn-login" value="Login">
  </div>
</form>
</body>
</html>
