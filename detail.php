<?php
require_once 'inc.php';

if (!isset($_GET['id']) || empty($_GET['id']) || !isset($produk[$_GET['id'] - 1])) {
  die('Produk tidak ada');
}

$item = $produk[$_GET['id'] - 1];
?>

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
    <div class="container mt-2 d-flex flex-column flex-md-row">
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
          <a class="nav-link" href="kontak.php">
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
    <h4 class="text-center fw-bold">Detail Produk</h4>
    <section class="d-flex flex-column flex-md-row justify-content-between m-auto mt-5 bg-dark p-5 text-white rounded">
      <article class="col d-flex flex-column align-items-center mb-5">
        <img src="<?= $item['image'] ?>" width="300" height="300" alt="toko" class="rounded">
      </article>
      <article class="col d-flex flex-column justify-content-center align-items-center align-items-md-start mb-5">
        <h2 class="text-center fw-bold"><?= $item['nama'] ?></h2>
        <h4 class="text-center mt-2">Kategori: <?= $kategori[$item['kategori']] ?></h4>
        <h5 class="text-center mt-2">Bahan: <?= $item['bahan'] ?></h5>
        <h5 class="text-center mt-2">Stok: <?= $item['stok'] ?></h5>
        <h5 class="text-center mt-2">Harga: <?= $item['harga'] ?></h5>
      </article>
    </section>
  </main>

  <footer class="mt-auto">
    <div class="text-center py-2 bg-dark text-white">Copyright &copy; 2022 Kelompok 4</div>
  </footer>
</body>

</html>