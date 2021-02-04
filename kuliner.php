<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <!--  font saya -->
   <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>dolen.com</title>
  </head>
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
    <div class="jumbotron kuliner">
  <h1 class="display-4"> <marquee direction="up"><center>CARI KULINER FAVORITMU!</center></marquee></h1>
</div>
    <div class="container">

    <div class="row justify-content-center row-item">
        <!-- DERET 3 -->
        <?php
            include "koneksi.php"; //panggil file koneksi
            $query="SELECT * FROM tb_kuliner"; //buat query sql
            $hasil=mysqli_query($koneksi,$query); //jalankan query sql
        ?>
        <div class="row">
          <?php $i=1;
          foreach($hasil as $value) : $i++;?> 
            <div class="col-lg-3" data-aos="fade-up" data-aos-duration="300">
              <div class="kotak-item" id="gambar1">
                <img src="img/upload/<?php echo $value['gambar'];?>" alt="">
                <p class="nama-item "><?php echo $value['namatempat'];?></p>
                <p class="harga-item"><?php echo $value['alamat'];?></p>
                <button class="btn btn-primary dtl" data-toggle="modal" data-target="#Modal<?php echo $value['no'] ;?> ">Lihat</button>
              </div>
            </div>
            <?php 
              $id_post = $value['no'];
              $query1="SELECT * FROM tb_komentar WHERE id_postingan = '$id_post'"; //buat query sql
            $hasil1=mysqli_query($koneksi,$query1); //jalankan query sql
            ?>
<!-- Modal -->
          <div class="modal fade" id="Modal<?php echo $value['no'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><?php echo $value['namatempat'];?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>

                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6">
                       <div class="row">
                         <div class="col"> <img src="img/upload/<?php echo $value['gambar'];?>" alt="" class="img-fluid" style="width: 100%;"></div>
                       </div>
                       <div class="row">
                         <div class="col kotak-komen">
                          <?php foreach($hasil1 as $values){ ?>
                           <div class="box-comment">
                             <label class="nama-comment"><b><?= $values['nama']; ?></b></label>
                             <br>
                             <label class="commentar"><?= $values['komentar']; ?></label>
                             <br>
                             <label class="date-comment"><?= $values['date']; ?></label>
                           </div>
                         <?php }  ?>
                         </div>
                       </div>
                       <div class="row">
                         <div class="col">
                           <form action="commentproses3.php" method="POST">
                             <input class="text-comment" type="text" name="komentar">
                             <input type="hidden" name="id" value="<?php echo $value['no'];?>">
                             <button><i class="fas fa-check-circle"></i></button>
                           </form>
                         </div>
                       </div>
                      </div>
                      <div class="col-md">
                        <ul class="list-group">
                          <li class="list-group-item">Nama Tempat : <?php echo $value['namatempat'];?></li>
                          <li class="list-group-item">Alamat : <?php echo $value['alamat'];?></li>
                          <li class="list-group-item">Menu : <?php echo $value['menu'];?></li>
                          <li class="list-group-item">Buka-Tutup : <?php echo $value['jambukatutup'];?></li>
                          <li class="list-group-item">Deskripsi : <?php echo $value['deskripsi'];?></li>
                          <li class="list-group-item">Map : <?php echo $value['map'];?></li>
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

          <!-- akhir modal -->
            <?php endforeach; ?>
          </div>
        </div>
      </div>
</body>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

</html>