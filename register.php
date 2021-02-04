<?php 
// require("koneksi.php");
// if(isset($_POST['submit'])){
// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register Page</title>
	<link rel="stylesheet" href="css/register.css">
	<script src="js/fa.js"></script>
</head>
<?php
session_start();
include "koneksi.php";
?>
<body>

	<div class="wrap">
		<form action="submit_register.php" method="post" class="frm-single">
			<div class="logo-icon">
				<h1><i class="fas fa-user"></i></h1>
			</div>

			<h2 class="judul">Daftar</h2>

			<div class="box-login email">
				<i class="fas fa-envelope"></i>
				<input name="username" type="text" placeholder="Username">
			</div>

			<div class="box-login sandi">
				<i class="fas fa-lock"></i>
				<input name="password1" type="password" placeholder="password">
			</div>

			<div class="box-login verif">
				<i class="fas fa-lock"></i>
				<input name="password2" type="password" placeholder="password">
			</div>

			<button class="btn" name="submit" type="submit">DAFTAR</button>

			<div class="link">
				<a href="login.php" class="buat">Masuk</a>
				<a href="" class="lupa">Lupa Sandi ?</a>
			</div>
			
		</form>		
	</div>
</body>
</html>