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

<!-- Akhir Carousel -->

<section id="Cek Harga">
      <div class="container">
        <center>
          <FORM method="post" action="proses.php" NAME ="fform">
            <table border="10" align="center"width="100%"><tr>
            <td width="150%" colspan="2" >
            <H2 ALIGN="center">TOKO BANGUNAN</H2></td></tr>
        <br><br><br>
        <td>Nama Konsumen</td>
        <td><input name="nama" type="text" id="nama"></td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td><input name="alamat" type="text" id="alamat"></td>
    </tr>

    <tr>
        <td>Pesanan</td>
        <td>
            <select name="pesan" id="pesan">
            <option>Pasir Harga Rp18.000/karung</option>
            <option>Semen Harga Rp70.000</option>
            <option>Triplek Harga Rp56.000/lembar</option>
            <option>Paving Block Harga Rp87.000/M2</option>
            <option>Batu Bata Harga Rp1.000/buah</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Jumlah Item</td>
        <td><input name="jumlah" type="text" id="jumlah"></td> </tr>
    </tr>

    <tr>
        <td>Pembayaran</td>
        <td>
            <select name="bayar" id="bayar">
            <option>Tunai</option>
            <option>Non Tunai</option>
            </select>
        </td>
    </tr>
<tr>
    <td width="100%" colspan="2">
      <tr></tr>
      <center>
        <br><br><br>
        <td>&nbsp;</td>
        <td>
            <input type="submit" name="Submit" value="Kirim">
            <input type="reset" name="Submit2" value="Batal">
            <br><br><br><br><br><br><br><br><br><br>
        </td>
    </tr>
    </center>
    </table>
    </form>
    </tr>
          

    <div class="footer">
      <center>
        <br><br><br>Syanin<strong>Store</strong><br><br><br>
    </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>