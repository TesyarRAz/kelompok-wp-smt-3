<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BAJUKITA</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-icons-1.10.2/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/style.css" />

  <script src="js/jquery-3.6.1.min.js" defer></script>
  <script src="js/bootstrap.bundle.min.js" defer></script>
  <script src="js/script.js" defer></script>
</head>

<body class="d-flex flex-column vh-100">
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container mt-2 d-flex flex-column flex-sm-row">
      <a class="navbar-brand m-auto fw-bold" href="index.php" style="font-size: 24px;">BAJUKITA</a>

      <div class="navbar-collapse mt-2 mt-md-0" id="navbar">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" href="index.php">
            <i class="text-center d-block d-md-inline-block bi-house"></i>
            <span>Home</span>
          </a>
          <a class="nav-link" href="produk.php">
            <i class="text-center d-block d-md-inline-block bi-bag"></i>
            <span>Produk</span>
          </a>
          <a class="nav-link active" href="kontak.php">
            <i class="text-center d-block d-md-inline-block bi-telephone"></i>
            <span>Kontak</span>
          </a>
          <a class="nav-link" href="support.php">
            <i class="text-center d-block d-md-inline-block bi-people"></i>
            <span>Dukungan</span>
          </a>
          <a class="nav-link" href="about.php">
            <i class="text-center d-block d-md-inline-block bi-exclamation-circle"></i>
            <span>Tentang</span>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <main class="container mb-5 mt-4">
    <h4 class="text-center fw-bold">Kontak</h4>
    <section class="d-flex flex-column flex-md-row justify-content-between m-auto mt-5 bg-dark p-5 text-white rounded">
      <article class="col d-flex flex-column align-items-center text-center mb-5">
        <i class="bi-geo-alt-fill" style="font-size: 50px;"></i>
        <h4 class="mb-4 mt-2">ADDRESS</h4>
        <span style="font-size: 18px">Universitas Bina Sarana Informatika</span>
        <span style="font-size: 12px;">Jl. Cemerlang No.8, Sukakarya, Kec. Warudoyong, Kota Sukabumi, Jawa Barat 43135</span>
      </article>
      <article class="col d-flex flex-column align-items-center text-center mb-5">
        <i class="bi-telephone-fill" style="font-size: 50px;"></i>
        <h4 class="mb-4 mt-2">PHONE</h4>
        <span style="font-size: 18px;">Universitas Bina Sarana Informatika</span>
        <span style="font-size: 15px;">0896-1185-1851</span>
        <span style="font-size: 15px;">phone</span>
        <span class="mt-3" style="font-size: 18px;">Kelompok 4</span>
        <span style="font-size: 15px;">0812-1234-1234</span>
        <span style="font-size: 15px;">whatsapp</span>
      </article>
      <article class="col d-flex flex-column align-items-center text-center mb-5">
        <i class="bi-chat-dots-fill" style="font-size: 50px;"></i>
        <h4 class="mb-4 mt-2">EMAIL</h4>
        <span style="font-size: 18px;">Universitas Bina Sarana Informatika</span>
        <span style="font-size: 15px;">info@bsi.ac.id</span>
        <span class="mt-3" style="font-size: 18px;">Kelompok 4</span>
        <span style="font-size: 15px;">kelompok4@bsi.ac.id</span>
      </article>
    </section>
    <section class="d-flex flex-column flex-md-row m-auto mt-5 p-5">
      <article class="col-md-5">
        <h4>Kontak Kami</h4>
      </article>
      <article class="col-md-7">
        <div class="mb-2">
          <label for="nama" class="form-label">Nama</label>
          <div class="row">
            <div class="col-12 col-sm-6 mb-1">
              <input type="text" class="form-control" placeholder="Masukan nama depan">
            </div>
            <div class="col-12 col-sm-6 mb-1  ">
              <input type="text" class="form-control" placeholder="Masukan nama belakang">
            </div>
          </div>
        </div>
        <div class="mb-2">
          <label for="email" class="form-label">Email</label>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Masukan email">
            </div>
          </div>
        </div>
        <div class="mb-2">
          <label for="komentar">Komentar</label>
          <textarea class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-2 d-flex justify-content-end">
          <button type="button" class="btn btn-dark">
            <i class="bi-send"></i>
            Submit
          </button>
        </div>
      </article>
    </section>
  </main>

  <footer class="mt-auto">
    <div class="text-center py-2 bg-dark text-white">Copyright &copy; 2022 Kelompok 4</div>
  </footer>
</body>

</html>