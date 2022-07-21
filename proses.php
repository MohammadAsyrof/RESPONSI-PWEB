<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">

    <title>Toko Online</title>
  </head>
  <body>

    <!-- awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../assets/logo king.jpg" alt="" width="50" height="50" class="me-2" >
          Syanin<strong>Store</strong>
        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <form class="d-flex ms-auto my-4 my-lg-0">
      <input class="form-control me-2" type="search" placeholder="Cari Barang Anda" aria-label="Search">
      <button class="btn btn-light" type="submit">Cari</button>
    </form>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Keranjang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notifikasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bantuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Masuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Akhir Navbar-->

<!-- Awal Carousel -->
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../assets/img1.png " class="d-block img-fluid" alt="Gambar 1">
        </div>
        <div class="carousel-item">
          <img src="../assets/img2.png " class="d-block img-fluid" alt="Gambar 2">
        </div>
        <div class="carousel-item">
          <img src="../assets/img3.png " class="d-block img-fluid" alt="Gambar 3">
        </div>
        <div class="carousel-item">
          <img src="../assets/img4.png " class="d-block img-fluid" alt="Gambar 4">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
    <br>
    <br>

        <section id="Cek Harga">
            <div class="container">
            <head>
            <title>Belajar html</title>
                </head>
        <center>
        <body>
            <table border="10" align="center"width="100%"><tr>
            <td width="150%" colspan="2" >
            <marquee width="100%"" align="center" direction="right" bgcolor="white" >Terima Kasih Sudah Memesan Material!!!</marquee>
        </body>
    </td>
    </table>
    </div>
    </center>

    <div class="footer">
      <center>
        <br><br><br>Syanin<strong>Store</strong><br><br><br>
    </div>
    </center>

<?php
    echo "<title>SyaninStore</title>";
    $fp = fopen("SyaninStore.txt" , "a+");
    $tanggal = date("Y - m - d");
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pesan = $_POST['pesan'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];

    fputs($fp,"
    $tanggal
        Nama        : $nama
        Alamat      : $alamat
        Pesanan     : $pesan
        Jumlah Item : $jumlah
        Pembayaran  : $bayar\n");
    fclose($fp);
?>
 
    </body>
    </html>