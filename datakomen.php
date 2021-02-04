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
        if (isset($_SESSION['level']) && isset($_SESSION['id'])) {
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
                            Data Komentar 
                        </h1>
             <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Dashboard</li>
             </ol> 
                  
    </div>
            <div id="page-inner">

                <!-- /. ROW  -->
  
                
             <!--form -->
             <div id="page-inner"> 
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 Data Komentar
                            </div>
                                <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nama</th>
                                                <th>Komentar</th>
                                                <th>Date</th>
                                                <th>id_postingan</th>
                                                <th>Kategori</th>
                                                <th colspan="3">Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                 include "koneksi.php"; //panggil file koneksi
                                                  $query="SELECT * FROM tb_komentar";//buat query sql
                                                 $hasil=mysqli_query($koneksi, $query);//jalankan quey sql
                                                 //perulangan untuk menampilkan data dari database
                                                 while ($data=mysqli_fetch_array($hasil)) {
                                             ?>  
                                             <tr>
                                                <td><?php echo $data ['id']; ?></td>
                                                <td><?php echo $data ['nama']; ?></td>
                                                <td><?php echo $data ['komentar']; ?></td>
                                                <td><?php echo $data ['date']; ?></td>
                                                <td><?php echo $data ['id_postingan']; ?></td>
                                                <td><?php echo $data ['kategori']; ?></td>
                                                <td><a href="deletekomen.php?id=<?php echo $data ['id']; ?>"onclick="return confirm('apakah anda yakin?')" class="btn btn-primary">Delete</a></td>
                                              </tr>
                                              <?php
                                            }
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
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