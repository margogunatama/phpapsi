<?php
	include 'islogin.php';
	if($session_is_logged){
		echo "
			<ul>
				<li><a href='logout.php'>LOGOUT</a></li>
				<li><a href='keranjang.php'>KERANJANG</a></li>
				<li><a href='index.php'>HOME</a></li>
				<li><a href=''>".$session_email_pelanggan." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</a></li>
			</ul>
		";
	}else{
	echo '
		<ul>
			<li><a href="login.php">LOGIN</a></li>
			<li><a href="keranjang.php">KERANJANG</a></li>
			<li><a href="index.php">HOME</a></li>
		</ul>
	';
	}
?>
