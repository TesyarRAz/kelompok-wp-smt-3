<?php
$gambar = [
  ['nama' => 'Jaket Keren 1', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Jaket Keren 2', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Jaket Keren 3', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Jaket Keren 4', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Jaket Keren 5', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Jaket Keren 6', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Jaket Keren 7', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Jaket Keren 8', 'harga' => 'Rp. 100.000'],
];
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
    <div class="container mt-2 d-flex flex-column flex-sm-row">
      <a class="navbar-brand" href="" style="font-size: 24px;">BAJUKITA</a>

      <div class="navbar-collapse" id="navbar">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" href="index.php">
            <i class="bi-house"></i>
            Home
          </a>
          <a class="nav-link" href="produk.php">
            <i class="bi-bag"></i>
            Produk
          </a>
          <a class="nav-link active" href="kontak.php">
            <i class="bi-telephone"></i>
            Kontak
          </a>
        </div>
      </div>
    </div>
  </nav>

  <main class="container mb-5 mt-4">
    <h5>Daftar Kontak</h5>
  </main>

  <footer class="mt-auto">
    <div class="text-center py-2 bg-dark text-white">Copyright &copy; 2022 Kelompok 4</div>
  </footer>
</body>

</html>