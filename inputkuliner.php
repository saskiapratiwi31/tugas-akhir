<?php
include "koneksi.php";
@$namatempat = $_POST['namatempat'];
@$alamat = $_POST['alamat'];
@$menu = $_POST['menu'];
@$jambukatutup = $_POST['jambukatutup'];
@$deskripsi = $_POST['deskripsi'];
@$map = $_POST['map'];
@$gambar = upload();
@$submit = $_POST['submit'];

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
    // echo "<script>alert('yang anda upload bukan gambar');</script>";
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
@$query = "INSERT INTO tb_kuliner VALUES ('','$namatempat','$alamat','$menu','$jambukatutup','$deskripsi','$map','$gambar')";

// hasil data array (kirim)
if (isset($_POST['submit'])) {

  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    echo "<script>alert('Berhasil Dibuat');
              document.location='datakuliner.php'
              </script>";
  } else {
    echo "<script>alert('Gagal Dibuat');
                document.location='admin.php'</script>";
  }
}
?>
<?php 
    // include("../koneksi.php");
    // if (isset($_POST['submit'])) {
        // $cek=tambahData($_POST);
        // if ($cek>0) {
            // echo "<script>alert('Data Berhasil Ditambahkan')</script>";

        // }
    // }
 ?>

<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>dolen.com</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>
<?php 
    session_start();
        if (isset($_SESSION['level']) && isset($_SESSION['username'])) {
            // jika level admin akan masuk ke halaman admin.php
            if ($_SESSION['level'] == "admin") {
                echo "<script></script>";
                
            }
            // jika kondisi level user maka akan diarahkan ke halaman user.php
            else if ($_SESSION['level'] == "user"){
                header('location:explore.php');
            }
        }
        // jika user belum terdaftar maka akan diarahkan ke halaman register
        
        if (!isset($_SESSION['level'])) {
            echo "<h2>Anda tidak boleh mengakses halaman ini tanpa : ";
            echo "<a href='index.php'>Login</a><br></h2>";
            echo "<a href='register.php'>Belum punya akun?</a>";
        }
        ?>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong> dolen.com</strong></a>
                
        <div id="sideNav" href="">
        <i class="fa fa-bars icon"></i> 
        </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu" href="datakomen.php"><i class="fa fa-dashboard"></i> DATA KOMENTAR</a>
                    </li>
                     <li>
                        <a class="active-menu" href="admin.php"><i class="fa fa-edit"></i> Input Data Penginapan</a>
                    </li> 
                    <li>
                        <a class="active-menu" href="datapenginapan.php"><i class="fa fa-bars"></i> Data Penginapan</a>
                    </li>
                    <li>
                        <a class="active-menu" href="inputkuliner.php"><i class="fa fa-edit"></i> Input Data Kuliner</a>
                    </li> 
                    <li>
                        <a class="active-menu" href="datakuliner.php"><i class="fa fa-bars"></i> Data Kuliner</a>
                    </li> 
                    <li>
                        <a class="active-menu" href="inputwisata.php"><i class="fa fa-edit"></i> Input Data Wisata</a>
                    </li> 
                    <li>
                        <a class="active-menu" href="datawisata.php"><i class="fa fa-bars"></i> Data Wisata</a>
                    </li> 
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
        <div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Input Data Kuliner
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">Input Data Kuliner</li>
                    </ol> 
                                    
        </div>
            <div id="page-inner">

                <!-- /. ROW  -->
    
                <!--form -->
                <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Input Data Kuliner</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form method="post" action="" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label for="namatempat">Nama Tempat</label>
                                            <input type="text" class="form-control" name="namatempat" placeholder="Masukkan Nama Tempat">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
                                        </div>
                                        <div class="form-group">
                                            <label for="menu">Menu</label>
                                            <textarea type="text" class="form-control" name="menu" placeholder="Masukkan Menu" rows="3"></textarea> 
                                        </div>
                                        <div class="form-group">
                                            <label for="jambukatutup">jambukatutup</label>
                                            <textarea type="text" class="form-control" name="jambukatutup" placeholder="Masukkan Deskripsi" rows="3"></textarea> 
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea type="text" class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi" rows="3"></textarea> 
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="map">map</label>
                                            <input type="text" class="form-control" name="map" placeholder="Masukkan map">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputfile">File input</label>
                                            <input type="file" name="gambar">
                                        </div>
                                        <button type="submit" class="btn btn-default" name="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                 <!--End form -->

            </div>

            <!-- /. PAGE INNER  -->
            </div>
        <!-- /. PAGE WRAPPER  -->
        </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
     
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    
    
    <script src="assets/js/easypiechart.js"></script>
    <script src="assets/js/easypiechart-data.js"></script>
    
     <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
    
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>

</html>