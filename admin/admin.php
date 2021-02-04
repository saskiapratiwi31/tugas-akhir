<?php 
    // include("../koneksi1.php");
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
                <a class="navbar-brand" href="dashboard.html"><strong> dolen.com</strong></a>
				
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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <a class="active-menu" href="dashboard.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                     <li>
                        <a class="active-menu" href="admin.php"><i class="fa fa-edit"></i> Data Tempat</a>
                    </li> 
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Data Tempat 
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li class="active">Data Tempat</li>
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
                                        <div class="title">Data Tempat</div>
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
                                            <label for="tiketmasuk">Tiket Masuk</label>
                                            <input type="text" class="form-control" name="tiketmasuk" placeholder="Masukkan Tiket Masuk">
                                        </div>
                                        <div class="form-group">
                                            <label for="fasilitas">Fasilitas</label>
                                            <input type="text" class="form-control" name="fasilitas" placeholder="Masukkan Fasilitas Tempat">
                                        </div>
                                        <div class="form-group">
                                            <label for="jambukatutup">Jam Buka-Tutup</label>
                                            <input type="text" class="form-control" name="jambukatutup" placeholder="Masukkan Jam">
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