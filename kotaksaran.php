
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

	<div class="col-lg-6">
            <form action="" method="POST" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama" />
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan"></textarea>
              </div>
              <button type="submit" name="submit">Kirim</button>
            </form>
          </div>
</body>
</html>