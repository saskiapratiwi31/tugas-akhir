<?php 
$koneksi=mysqli_connect('localhost','root','','db_pariwisata');
 function tambah($data,$table){
 	global $koneksi;
 	$namatempat = $data["namatempat"];
     $alamat = $data["alamat"];
     $harga = $data["harga"];
     $fasilitas = $data["fasilitas"];
     $deskripsi = $data["deskripsi"];
     $gambar = upload();

     $perintah = "INSERT INTO '$table' VALUES('','$namatempat','$alamat','$harga','$fasilitas','$deskripsi','$gambar')";
 mysqli_query($koneksi,$perintah);
 return mysqli_affected_rows($koneksi);
 }
function upload()
{
    $namaFileUniversitaspts = $_FILES['gambar']['name'];
    $ukuranFileUniversitaspts = $_FILES['gambar']['size'];
    $errorUniversitaspts = $_FILES['gambar']['error'];
    $tmpNameUniversitaspts = $_FILES['gambar']['tmp_name'];

    // cek ada gambar yang diupload atau tidak
    if ($errorUniversitaspts === 4)
    {
        echo "<script>
                alert('pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek yang diupload apakah gambar
    $ekstensiGambarValidUniversitaspts = ['jpg', 'jpeg', 'png'];
    $ekstensiGambarUniversitaspts = explode('.', $namaFileUniversitaspts);
    $ekstensiGambarUniversitaspts = strtolower(end($ekstensiGambarUniversitaspts));
    if (!in_array($ekstensiGambarUniversitaspts, $ekstensiGambarValidUniversitaspts))
    {
        echo "<script>
                alert('Yang Anda Upload Bukan Gambar');
            </script>";
        return false;
    }

    // cek jika ukuran gambarnya terlalu besar
    if ($ukuranFileUniversitaspts > 1000000000)
    {
        echo "<script>
                alert('ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // jika lolos pengecekan
    // generate nama gambar baru
    $namaFileUniversitaspts = uniqid();
    $namaFileUniversitaspts .= '.';
    $namaFileUniversitaspts .= $ekstensiGambarUniversitaspts;
    move_uploaded_file($tmpNameUniversitaspts, 'img/upload' . $namaFileUniversitaspts);

    return $namaFileUniversitaspts;
}

 ?>
 