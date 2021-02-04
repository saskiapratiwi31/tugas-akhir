<?php
include "koneksi.php";
$no=$_POST['no'];
$namatempat = $_POST['namatempat'];
$alamat = $_POST['alamat'];
$tiketmasuk = $_POST['tiketmasuk'];
$fasilitas = $_POST['fasilitas'];
$jambukatutup = $_POST['jambukatutup'];
$deskripsi = $_POST['deskripsi'];
$map = $_POST['map'];
$gambarLama = $_POST['gambarLama'];
if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
} else {
    $gambar = upload();
}
$submit = $_POST['submit'];

// upload gambar
function upload()
{
  $namaFiles = $_FILES["gambar"]["name"];
  $ukuran = $_FILES["gambar"]["size"];
  $error = $_FILES["gambar"]["error"];
  $tmp_name = $_FILES["gambar"]["tmp_name"];
  $ekstensi = ["jpg", "jpeg", "png"];
  $ekstensiGambar = explode(".", $namaFiles);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensi)) {
    echo "<script>alert('yang anda upload bukan gambar');</script>";
    return false;
  }
  if ($ukuran > 1000000) {
    echo "<script>alert('ukuran gambar lebih dari 1MB');</script>";
    return false;
  }
  $nama_baru = uniqid();
  $nama_baru .= ".";
  $nama_baru .= $ekstensiGambar;
  move_uploaded_file($tmp_name, 'img/upload/' . $nama_baru);
  return $nama_baru;
}
// Memasukkan data (Insert) 
$query = "UPDATE tb_wisata SET no='$no',namatempat='$namatempat',alamat='$alamat',tiketmasuk='$tiketmasuk',fasilitas='$fasilitas',jambukatutup='$jambukatutup',deskripsi='$deskripsi',map='$map',gambar='$gambar' WHERE no='$no'";

// hasil data array (kirim)
$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    echo "<script>alert('Berhasil Diedit');
                        document.location='datawisata.php'
                        </script>";
} else {
    echo "Gagal update data";
    echo mysqli_error();
}
?>