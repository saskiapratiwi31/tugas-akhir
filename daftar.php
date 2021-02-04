<?php 
  require('../koneksi.php');
  if (isset($_POST['submit'])) {
    $cek=regristasi($_POST);
    if ($cek>0) {
      echo "<script>alert('akun berhasil dibuat')</script>";
    }else{
      echo "<script>alert('akun gagal dibuat')</script>";
    }
  }
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login page</title>
	<link rel="stylesheet" href="css/login.css">
	<script src="js/fa.js"></script>
</head>
<body>

	<div class="wrap">
		<form action="" method="post">
			<div class="logo-icon">
				<h1><i class="fas fa-user"></i></h1>
			</div>

			<h2 class="judul">Masuk</h2>

			<div class="box-login email">
				<i class="fas fa-envelope"></i>
				<input type="text" placeholder="Email" name="email">
			</div>

			<div class="box-login sandi">
				<i class="fas fa-lock"></i>
				<input type="password" placeholder="Kata Sandi" name="password">
			</div>

			<button class="btn" name="submit" type="submit">MASUK</button>

			<div class="link">
				<a href="" class="buat">Buat Akun</a>
				<a href="" class="lupa">Lupa Sandi ?</a>
			</div>
			
		</form>		
	</div>
</body>
</html>