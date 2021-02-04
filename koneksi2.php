<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_webakhir");

// untuk menampilkan data /SELECT
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))
    {
     $rows[] = $row;
    }
    return $rows;
}
function query1($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))
    {
     $rows[] = $row;
    }
    return $rows;
}
function querydata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))
    {
     $rows[] = $row;
    }
    return $rows;
}
function querydataptn($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))
    {
     $rows[] = $row;
    }
    return $rows;
}
function querydatapts($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))
    {
     $rows[] = $row;
    }
    return $rows;
}
function querydataKontak($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))
    {
     $rows[] = $row;
    }
    return $rows;
}
function nampiluser($nampil, $id)
{
    global $koneksi;
    $cari = mysqli_query($koneksi, $nampil, $id);
    $data = [];
    return $data;
}

// insert saran kontak
function tambahkontak($kontak)
{
    global $koneksi;
    $nama = htmlspecialchars($kontak["nama"]);
    $email = htmlspecialchars($kontak["email"]);
    $subject = htmlspecialchars($kontak["subject"]);
    $saran = htmlspecialchars($kontak["saran"]);

    $query = "INSERT INTO tb_kontak VALUES('','$nama','$email','$subject','$saran')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

// UNTUK INSERT ATAU TAMBAH DATA
function tambahuser($data, $id)
{
    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $profesi = htmlspecialchars($data["profesi"]);
    $umur = htmlspecialchars($data["umur"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kota = htmlspecialchars($data["kota"]);

    // upload gambar dlu
    $fotoprofil = upload();
    if (!$fotoprofil)
    {
        return false;

    }
    $query = "INSERT INTO tb_datauser VALUES('$id','$fotoprofil','$nama','$profesi','$umur','$alamat','$kota')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function upload()
{
    $namaFile = $_FILES['fotoprofil']['name'];
    $ukuranFile = $_FILES['fotoprofil']['size'];
    $error = $_FILES['fotoprofil']['error'];
    $tmpName = $_FILES['fotoprofil']['tmp_name'];

    // cek ada gambar yang diupload atau tidak
    if ($error === 4)
    {
        echo "<script>
				alert('pilih gambar terlebih dahulu');
			</script>";
        return false;
    }

    // cek yang diupload apakah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid))
    {
        echo "<script>
				alert('Yang Anda Upload Bukan Gambar');
			</script>";
        return false;
    }

    // cek jika ukuran gambarnya terlalu besar
    if ($ukuranFile > 1000000)
    {
        echo "<script>
				alert('ukuran gambar terlalu besar');
			</script>";
        return false;
    }

    // jika lolos pengecekan
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}
// FUNGSI EDIT /UBBAH DATA
function ubah($data, $id)
{
    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $profesi = htmlspecialchars($data["profesi"]);
    $umur = htmlspecialchars($data["umur"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kota = htmlspecialchars($data["kota"]);
    $fotolama = htmlspecialchars($data["fotolama"]);

    // cek pilih gambar baru atau tidak
    if ($_FILES['fotoprofil']['error'] === 4)
    {
        $fotoprofil = $fotolama;
    }
    else
    {
        $fotoprofil = upload();
    }

    $query = "UPDATE  tb_datauser SET fotoprofil='$fotoprofil',nama='$nama',profesi='$profesi   ',umur='$umur',alamat='$alamat',kota='$kota' WHERE id_profil='$id' ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);

}


// redirect/jika akun sudah pernah tambah informasi

function tambahinformasi($data, $id,$nama,$profesi,$fotoprofil)
{
    global $koneksi;

    $namauniversitas = strtolower(htmlspecialchars($data["namauniversitas"]));
    $isiuniversitas = htmlspecialchars($data["isiuniversitas"]);
    // upload gambar dlu
    $fotouniversitas = uploaduniv();
    if (!$fotouniversitas)
    {
        return false;

    }
    $query = "INSERT INTO tb_tambahinformasi VALUES('','$id','$fotouniversitas','$namauniversitas','$isiuniversitas','$nama','$profesi','$fotoprofil')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function uploaduniv()
{
    $namaFileUniversitas = $_FILES['fotouniversitas']['name'];
    $ukuranFileUniversitas = $_FILES['fotouniversitas']['size'];
    $errorUniversitas = $_FILES['fotouniversitas']['error'];
    $tmpNameUniversitas = $_FILES['fotouniversitas']['tmp_name'];

    // cek ada gambar yang diupload atau tidak
    if ($errorUniversitas === 4)
    {
        echo "<script>
				alert('pilih gambar terlebih dahulu');
			</script>";
        return false;
    }

    // cek yang diupload apakah gambar
    $ekstensiGambarValidUniversitas = ['jpg', 'jpeg', 'png'];
    $ekstensiGambarUniversitas = explode('.', $namaFileUniversitas);
    $ekstensiGambarUniversitas = strtolower(end($ekstensiGambarUniversitas));
    if (!in_array($ekstensiGambarUniversitas, $ekstensiGambarValidUniversitas))
    {
        echo "<script>
				alert('Yang Anda Upload Bukan Gambar');
			</script>";
        return false;
    }

    // cek jika ukuran gambarnya terlalu besar
    if ($ukuranFileUniversitas > 1000000)
    {
        echo "<script>
				alert('ukuran gambar terlalu besar');
			</script>";
        return false;
    }

    // jika lolos pengecekan
    // generate nama gambar baru
    $namaFileUniversitas = uniqid();
    $namaFileUniversitas .= '.';
    $namaFileUniversitas .= $ekstensiGambarUniversitas;
    move_uploaded_file($tmpNameUniversitas, 'img/' . $namaFileUniversitas);

    return $namaFileUniversitas;
}
function editinformasi($data, $id,$nama,$profesi,$fotoprofil,$id_informasi){
    global $koneksi;
    
    $namauniversitas = strtolower(htmlspecialchars($data["namauniversitas"]));
    $isiuniversitas = htmlspecialchars($data["isiuniversitas"]);
    $fotouniversitaslama = htmlspecialchars($data["fotouniversitaslama"]);

    if ($_FILES['fotouniversitas']['error']===4) {
        $fotouniversitas=$fotouniversitaslama;
    }else{
        $fotouniversitas=uploaduniv();
    }
     $query="UPDATE tb_tambahinformasi SET  fotouniversitas='$fotouniversitas',namauniversitas='$namauniversitas',isiuniversitas='$isiuniversitas',nama='$nama',profesi='$profesi',fotoprofil='$fotoprofil' WHERE id='$id' AND id_informasi='$id_informasi'";
     mysqli_query($koneksi,$query);
     return mysqli_affected_rows($koneksi);

}


// FUNGSI DELETE data
function hapus($id,$id_informasi)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_tambahinformasi WHERE id=$id AND id_informasi=$id_informasi" );
    return mysqli_affected_rows($koneksi);
}


// FUNGSI SEARCH BARANG ATAU SESUATI
function cari($keyword)
{
    $query = "SELECT * FROM tb_tambahinformasi WHERE namauniversitas LIKE  '%$keyword%' or nama LIKE '%$keyword%' ";
    return query($query);
}
function caridata($keyword)
{
    $query = "SELECT * FROM tb_user WHERE username LIKE  '%$keyword%' or level LIKE '%$keyword%' ";
    return querydata($query);
}
function caridataptn($keyword)
{
    $query = "SELECT * FROM tb_tambahinformasi WHERE namauniversitas LIKE  '%$keyword%' or id LIKE '%$keyword%' ";
    return querydataptn($query);
}
function caridatapts($keyword)
{
    $query = "SELECT * FROM tb_tambahinformasipts WHERE namauniversitas LIKE  '%$keyword%' or id LIKE '%$keyword%' ";
    return querydatapts($query);
}
function caridataKontak($keyword)
{
    $query = "SELECT * FROM tb_kontak WHERE nama LIKE  '%$keyword%' or email LIKE '%$keyword%' or subject LIKE '%$keyword%' ";
    return querydataKontak($query);
}










function tambahinformasipts($data, $id,$nama,$profesi,$fotoprofil)
{
    global $koneksi;

    $namauniversitas = strtolower(htmlspecialchars($data["namauniversitas"]));
    $isiuniversitas = htmlspecialchars($data["isiuniversitas"]);
    // upload gambar dlu
    $fotouniversitas = uploadpts();
    if (!$fotouniversitas)
    {
        return false;

    }
    $query = "INSERT INTO tb_tambahinformasipts VALUES('','$id','$fotouniversitas','$namauniversitas','$isiuniversitas','$nama','$profesi','$fotoprofil')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function uploadpts()
{
    $namaFileUniversitaspts = $_FILES['fotouniversitas']['name'];
    $ukuranFileUniversitaspts = $_FILES['fotouniversitas']['size'];
    $errorUniversitaspts = $_FILES['fotouniversitas']['error'];
    $tmpNameUniversitaspts = $_FILES['fotouniversitas']['tmp_name'];

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
    if ($ukuranFileUniversitaspts > 1000000)
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
    move_uploaded_file($tmpNameUniversitaspts, 'img/' . $namaFileUniversitaspts);

    return $namaFileUniversitaspts;
}
function editinformasipts($data, $id,$nama,$profesi,$fotoprofil,$id_informasi){
    global $koneksi;
    
    $namauniversitas = strtolower(htmlspecialchars($data["namauniversitas"]));
    $isiuniversitas = htmlspecialchars($data["isiuniversitas"]);
    $fotouniversitaslama = htmlspecialchars($data["fotouniversitaslama"]);

    if ($_FILES['fotouniversitas']['error']===4) {
        $fotouniversitas=$fotouniversitaslama;
    }else{
        $fotouniversitas=uploaduniv();
    }
     $query="UPDATE tb_tambahinformasipts SET  fotouniversitas='$fotouniversitas',namauniversitas='$namauniversitas',isiuniversitas='$isiuniversitas',nama='$nama',profesi='$profesi',fotoprofil='$fotoprofil' WHERE id='$id' AND id_informasi='$id_informasi'";
     mysqli_query($koneksi,$query);
     return mysqli_affected_rows($koneksi);

}


// FUNGSI DELETE data
function hapuspts($id,$id_informasi)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_tambahinformasipts WHERE id=$id AND id_informasi=$id_informasi" );
    return mysqli_affected_rows($koneksi);
}
function caripts($keyword)
{
    $query = "SELECT * FROM tb_tambahinformasipts WHERE namauniversitas LIKE  '%$keyword%' or nama LIKE '%$keyword%' ";
    return query($query);
}
function hapusDataAdmin($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_user WHERE id=$id ");
    return mysqli_affected_rows($koneksi);
}
function hapusDataAdminPtn($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_tambahinformasi WHERE id=$id" );
    return mysqli_affected_rows($koneksi);
}
function hapusDataAdminPts($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_tambahinformasipts WHERE id=$id" );
    return mysqli_affected_rows($koneksi);
}
function hapusDataAdminKontak($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_kontak WHERE id=$id" );
    return mysqli_affected_rows($koneksi);
}
?>
