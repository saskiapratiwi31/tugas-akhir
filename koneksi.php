<?php
// file koneksi php -> mysql
$host = "localhost";
$user = "root";
$pass = ""; //kosongkan
$db = "db_pariwisata";
// koneksi ke mysql
$koneksi = mysqli_connect($host, $user, $pass);
$db_koneksi = mysqli_select_db($koneksi, $db);