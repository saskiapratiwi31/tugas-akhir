<?php
session_start();
include "koneksi.php";
$komentar = $_POST['komentar'];
$id = $_POST['id'];
$nama = $_SESSION['username'];
$date = date("Y-m-d");
$perintah = "INSERT INTO tb_komentar values ('','$nama','$komentar','$date','$id','kuliner')";
mysqli_query ($koneksi,$perintah);
header("Location: kuliner.php");
  ?>
