<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>dolen.com</title>
  </head>
  <?php 
    session_start();
        if (isset($_SESSION['level']) && isset($_SESSION['username'])){

            // ini adalah halam dengan level user
            if ($_SESSION['level'] == "user") {
                echo "<script></script>";
            }else {
                // echo "Anda belum terdaftar sebagai User";
            }
        }
        // jika user belum terdaftar maka akan diarahkan ke halaman register.php
        if (!isset($_SESSION['level'])) {
            echo "</h1>Anda tidak boleh mengakses halaman ini tanpa : ";
            echo "<a href='index.php'>Login</a><br>";
            echo "<a href='register.php'>Belum punya User?</a></h1>";
            }   
?>
  <body >
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand font-weight-bold text-white" href="#page-top">dolen.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
              <a class="nav-link text-white" href="explore.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white" href="penginapan.php">PENGINAPAN <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="kuliner.php">KULINER</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white" href="wisata.php"> WISATA <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-4"> <span class="font-weight-bold">EXPLORE MALANG CITY</span> <br> TRAVEL NOW</h1>
          <hr class="my-4">
          <p class="lead">Kunjungi Wisata dan Keindahan Kota Malang </p>
        </div>
      </div>
      <div class="container ">
        <div class="row mt-50">
          <div class="col text-center ">
            <h1>KUNJUNGI</h1>
          </div>
        </div>
      </div>
      <!-- coursel -->
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="0">
            <div class="kotak1">
              <img src="img/kw.jpg" class="foto" alt="">
              <p class="nama-item ">Kampung Warna-Warni</p>
              <p class="harga-item">Jodipan, Kec. Blimbing, Kota Malang, Jawa Timur</p>
              <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail1.html">
                <button class="btn btn-primary" type="button">Detail</button>
              </a>
            </div>
              <div class="kotak1">
                <img src="img/kba.jpg" class="foto" alt="">
                <p class="nama-item ">Kampung Biru Arema</p>
                <p class="harga-item">Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur</p>
                  <button class="btn btn-primary dtl" data-toggle="modal" data-target="#exampleModal">Detail</button>
              </div>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><center>Kampung Biru Arema</center></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="img/kba.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="col-md">
                        <ul class="list-group">
                          <li class="list-group-item">Nama Tempat : Kampung Biru Arema</li>
                          <li class="list-group-item">Alamat : Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur</li>
                          <li class="list-group-item">Tiket Masuk : Tidak Dikenakan Biaya Masuk</li>
                          <li class="list-group-item">Fasilitas : tempat parkir,kios-kios,toilet,pedagang makanan dan minuman</li>
                          <li class="list-group-item">Jam Buka Tutup :  08.00-19.00</li>
                          <li class="list-group-item"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.1572707886085!2d112.51758921432739!3d-7.878607980534544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78872dd3cd2c13%3A0x3295038cd23c1d38!2sMuseum%20Angkut!5e0!3m2!1sid!2sid!4v1610200451091!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
              <div class="kotak1">
                <img src="img/k3d.jpg" class="foto" alt="">
                <p class="nama-item ">Kampung 3D</p>
                <p class="harga-item">Jl. Temenggungan Ledok, Kesatrian, Kec. Blimbing, Kota Malang, Jawa Timur</p>
                <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail3.html">
                  <button class="btn btn-primary" type="button">Detail</button>
                </a>
              </div>
              <div class="kotak1">
                <img src="img/akm.jpg" class="foto" alt="">
                <p class="nama-item ">Alun-Alun Kota Malang</p>
                <p class="harga-item">Kec.Klojen,Kota Malang,Jawa Timur</p>
                <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail4.html">
                  <button class="btn btn-primary">Detail</button>
                </a>
              </div>
            </div>
            <div class="carousel-item" data-interval="0">
              <div class="kotak1">
                <img src="img/tbkm.jpg" class="foto" alt="">
                  <p class="nama-item ">Taman Balai Kota Malang</p>
                  <p class="harga-item">Samaan, Kec. Klojen, Kota Malang, Jawa Timur </p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail5.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
              </div>
              <div class="kotak1">
                <img src="img/hawai.jpg" class="foto" alt="">
                  <p class="nama-item ">Hawai Waterpark</p>
                  <p class="harga-item">Jl. Graha Kencana Utara V, Karanglo, Banjararum, Kec. Singosari, Malang, Jawa Timur</p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail6.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
              </div>
              <div class="kotak1">
                <img src="img/mnp.jpg" class="foto" alt="">
                  <p class="nama-item ">Malang Night Paradise</p>
                  <p class="harga-item">Jl.Raya Karanglo No.66, Karanglo,Balearjosari,Malang, Jawa Timur</p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail7.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
              </div>
              <div class="kotak1">
                <img src="img/ktw.jpg" class="foto" alt="">
                  <p class="nama-item ">Kebon Teh Wonosari</p>
                  <p class="harga-item">RT.04/RW.07, Bodean Putuk, Toyomarto, Kec. Singosari, Malang, Jawa Timur</p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail8.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="kotak1">
                <img src="img/fs.jpg" class="foto" alt="">
                  <p class="nama-item ">Florawisata San Terra de Lafonte</p>
                  <p class="harga-item">Jurangrejo, Pandesari, Kec. Pujon, Malang, Jawa Timur</p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail9.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
              </div>
              <div class="kotak1">
               <img src="img/dwp.jpg" class="foto" alt="">
                  <p class="nama-item ">Desa Wisata Pujon Kidul</p>
                  <p class="harga-item">Pujon Kidul, Kec. Pujon, Malang, Jawa Timur</p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail10.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
              </div>
              <div class="kotak1">
                <img src="img/boon.jpg" class="foto" alt="">
                  <p class="nama-item ">Boonpring Andeman</p>
                  <p class="harga-item">Jl. Andeman, Dusun Kp. Anyar, Sanankerto, Kec. Turen, Malang, Jawa Timur</p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail11.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
              </div>
              <div class="kotak1">
                <img src="img/seng.jpg" class="foto" alt="">
                  <p class="nama-item ">Taman Rekreasi Sengkaling</p>
                  <p class="harga-item">jl.Raya Mulyoagung, Dau Sengkaling Jetis</p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail12.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- akhir coursel -->
        <!-- card baris1 -->
        <!-- <div class="row justify-content-center row-item"> -->
        <!-- carousel -->
        <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"> -->
              <!-- DERET 1 -->
              <!-- <div class="row">
                <div class="col-lg-3">
                  <div class="kotak-item" id="gambar1">
                    <img src="img/kw.jpg" alt="">
                    <p class="nama-item ">Kampung Warna-Warni</p>
                    <p class="harga-item">Jodipan, Kec. Blimbing, Kota Malang, Jawa Timur</p>
                    <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail1.html">
                      <button class="btn btn-primary" type="button">Detail</button>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="kotak-item" id="gambar1">
                    <img src="img/kba.jpg" alt="">
                    <p class="nama-item ">Kampung Biru Arema</p>
                    <p class="harga-item">Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur</p>
                    <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail2.html">
                      <button class="btn btn-primary" type="button">Detail</button>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="kotak-item" id="gambar1">
                    <img src="img/k3d.jpg" alt="">
                    <p class="nama-item ">Kampung 3D</p>
                    <p class="harga-item">Jl. Temenggungan Ledok, Kesatrian, Kec. Blimbing, Kota Malang, Jawa Timur</p>
                    <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail3.html">
                      <button class="btn btn-primary" type="button">Detail</button>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="kotak-item" id="gambar1">
                    <img src="img/akm.jpg" alt="">
                    <p class="nama-item ">Alun-Alun Kota Malang</p>
                    <p class="harga-item">Kec.Klojen,Kota Malang,Jawa Timur</p>
                    <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail4.html">
                      <button class="btn btn-primary">Detail</button>
                    </a>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- AHKIR DERET 1 -->
            <!-- DERET 2 -->
            
            <!-- <div class="row">
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/tbkm.jpg" alt="">
                  <p class="nama-item ">Taman Balai Kota Malang</p>
                  <p class="harga-item">Samaan, Kec. Klojen, Kota Malang, Jawa Timur </p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail5.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/hawai.jpg" alt="">
                  <p class="nama-item ">Hawai Waterpark</p>
                  <p class="harga-item">Jl. Graha Kencana Utara V, Karanglo, Banjararum, Kec. Singosari, Malang, Jawa Timur</p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail6.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/mnp.jpg" alt="">
                  <p class="nama-item ">Malang Night Paradise</p>
                  <p class="harga-item">Jl.Raya Karanglo No.66, Karanglo,Balearjosari,Malang, Jawa Timur</p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail7.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/ktw.jpg" alt="">
                  <p class="nama-item ">Kebon Teh Wonosari</p>
                  <p class="harga-item">RT.04/RW.07, Bodean Putuk, Toyomarto, Kec. Singosari, Malang, Jawa Timur</p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail8.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
                </div>
              </div>
            </div> -->
            
            <!-- AKHIR DERET 2 -->
            <!-- DERET 3 -->
            
            <!-- <div class="row">
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/fs.jpg" alt="">
                  <p class="nama-item ">Florawisata San Terra de Lafonte</p>
                  <p class="harga-item">Jurangrejo, Pandesari, Kec. Pujon, Malang, Jawa Timur</p>
                  <a href="file:///C:/Users/Jemi%20Mutiara/Documents/TugasAkhir/detail9.html">
                    <button class="btn btn-primary">Detail</button>
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/dwp.jpg" alt="">
                  <p class="nama-item ">Desa Wisata Pujon Kidul</p>
                  <p class="harga-item">Pujon Kidul, Kec. Pujon, Malang, Jawa Timur</p>
                  <a href="">
                    <button class="btn btn-primary">Detail</button>
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/boon.jpg" alt="">
                  <p class="nama-item ">Boonpring Andeman</p>
                  <p class="harga-item">Jl. Andeman, Dusun Kp. Anyar, Sanankerto, Kec. Turen, Malang, Jawa Timur</p>
                  <a href="">
                    <button class="btn btn-primary">Detail</button>
                  </a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="kotak-item" id="gambar1">
                  <img src="img/seng.jpg" alt="">
                  <p class="nama-item ">Taman Rekreasi Sengkaling</p>
                  <p class="harga-item">jl.Raya Mulyoagung, Dau Sengkaling Jetis</p>
                  <a href="">
                    <button class="btn btn-primary">Detail</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        
        <!-- akhir carousel -->
        <!-- akhir card -->
        <!-- Optional JavaScript -->
        <script src="js/jquery-3.5.1.min.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
      </body>
    </html>