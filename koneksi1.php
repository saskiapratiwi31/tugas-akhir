<?php 
	$koneksi=mysqli_connect('localhost','root','','db_pariwisata');

	function regristasi($data){
		global $koneksi;
		$username=$data['username'];
		$password1=$data['password1'];
		$password2=$data['password2'];

		if ($password1==$password2) {
			$pass=md5('adadada'.md5($password2));
			$perintah="INSERT INTO tb_login VALUES ('','$username','$pass','admin')";
			mysqli_query($koneksi,$perintah);
			return mysqli_affected_rows($koneksi);
		}else{
			echo "<script>
				alert('password tidak sama')
			</script>";
		}
	}

	function login($data){
		global $koneksi;
		$username=$data['username'];
		$password=$data['password'];
		$pass=md5('adadada'.md5($password));
		$perintah="SELECT * FROM tb_login WHERE username='$username' AND password='$pass'";
		$query=mysqli_query($koneksi,$perintah);

		if (mysqli_num_rows($query)===1) {
			$row=mysqli_fetch_assoc($query);
			$_SESSION['level']=$row['level'];
			$_SESSION['username']=$row['username'];
			$_SESSION['id']=$row['id'];
			header("Location: ../admin/index.php");
			exit();
		}else{
			echo "<script>
				alert('akun tidak ditemukan')
			</script>";
		}
	}

	function tambahData($data){
		global $koneksi;
		$namatempat=$data['namatempat'];
		$alamat=$data['alamat'];
		$tiketmasuk=$data['tiketmasuk'];
		$fasilitas=$data['fasilitas'];
		$jambukatutup=$data['jambukatutup'];
		$gambar=upload();
		$perintah="INSERT INTO tb_tempat VALUES('', '$namatempat', '$alamat', '$tiketmasuk', '$fasilitas', '$jambukatutup')";
		mysqli_query($koneksi, $perintah);
		return mysqli_affected_rows($koneksi);
	}

	function upload(){
	    $namaFiles=$_FILES["gambar"]["name"];
	    $ukuran=$_FILES["gambar"]["size"];
	    $error=$_FILES["gambar"]["error"];
	    $tmp_name=$_FILES["gambar"]["tmp_name"];
	    $ekstensi=["jpg","jpeg","png"];
	    $ekstensiGambar=explode(".", $namaFiles);
	    $ekstensiGambar=strtolower(end($ekstensiGambar));

	    if (!in_array($ekstensiGambar, $ekstensi)) {
	        echo "<script>alert('yang anda upload bukan gambar');</script>";
	        return false;
	    }if ($ukuran>1000000) {
	        echo "<script>alert('ukuran gambar lebih dari 1MB');</script>";
	        return false;
	    }$nama_baru=uniqid();
	    $nama_baru.=".";
	    $nama_baru.=$ekstensiGambar;
	    move_uploaded_file($tmp_name, 'img'.$nama_baru);
	    return $nama_baru;
	}

	function tampil($perintah){
	    global $koneksi;
	    $query=mysqli_query($koneksi, $perintah);
	    $data=[];
	    while ($hasil=mysqli_fetch_assoc($query)) {
	        $data[]=$hasil;
	    }return $data;
	}

	


















 ?>