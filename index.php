
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login page</title>
	<link rel="stylesheet" href="css/login.css">
	<script src="js/fa.js"></script>
</head>
<?php
session_start();
include "koneksi.php";
?>
<body>

	<div class="wrap">
		<form action="submit_login.php" method="post" class="frm-single">
			<div class="logo-icon">
				<h1><i class="fas fa-user"></i></h1>
			</div>

			<h2 class="judul">Masuk</h2>

			<div class="box-login email">
				<i class="fas fa-envelope"></i>
				<input name="username" type="text" placeholder="Username">
			</div>

			<div class="box-login sandi">
				<i class="fas fa-lock"></i>
				<input name="password" type="password" placeholder="Kata Sandi">
			</div>

			<button class="btn" name="submit" type="submit">MASUK</button>

			<div class="link">
				<a href="register.php" class="buat">Buat Akun</a>
				<a href="" class="lupa">Lupa Sandi ?</a>
			</div>
			
		</form>		
	</div>
</body>
</html>