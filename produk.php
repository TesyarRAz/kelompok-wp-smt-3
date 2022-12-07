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
  ['nama' => 'Sweater Keren 1', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Sweater Keren 2', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Sweater Keren 3', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Sweater Keren 4', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Sweater Keren 5', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Sweater Keren 6', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Sweater Keren 7', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Sweater Keren 8', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Turtle Neck Keren 1', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Turtle Neck Keren 2', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Turtle Neck Keren 3', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Turtle Neck Keren 4', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Turtle Neck Keren 5', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Turtle Neck Keren 6', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Turtle Neck Keren 7', 'harga' => 'Rp. 100.000'],
  ['nama' => 'Turtle Neck Keren 8', 'harga' => 'Rp. 100.000'],
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
          <a class="nav-link active" href="produk.php">
            <i class="bi-bag"></i>
            Produk
          </a>
          <a class="nav-link" href="kontak.php">
            <i class="bi-telephone"></i>
            Kontak
          </a>
        </div>
      </div>
    </div>
  </nav>

  <main class="container mb-5 mt-4">
    <h4 class="pb-2">Daftar Produk</h4>
    <section class="mb-3">
      <article class="mb-1 d-flex justify-content-end">
        <div class="justify-content-end d-flex align-items-center gap-2">
          <div class="input-group">
            <input type="text" class="form-control form-control-sm" placeholder="Masukan kata kunci">
            <button class="btn btn-sm btn-dark">
              <i class="bi-search"></i>
            </button>
          </div>
        </div>
      </article>
      <article>
        <fieldset class="alert alert-secondary">
          <legend>Filter</legend>
          <div class="d-flex">
            <div class="me-4">Kategori</div>
            <div class="form-check me-3">
              <input id="semua" type="radio" class="form-check-input me-1" value="semua" name="kategori" checked>
              <label class="form-check-label" for="semua">Semua</label>
            </div>
            <div class="form-check me-3">
              <input id="turtleneck" type="radio" class="form-check-input me-1" name="kategori" value="turtleneck">
              <label class="form-check-label" for="turtleneck">Turtleneck</label>
            </div>
            <div class="form-check me-3">
              <input id="jaket" type="radio" class="form-check-input me-1" name="kategori" value="jaket">
              <label class="form-check-label" for="jaket">Jaket</label>
            </div>
            <div class="form-check me-3">
              <input id="kaos" type="radio" class="form-check-input me-1" name="kategori" value="kaos">
              <label class="form-check-label" for="kaos">Kaos</label>
            </div>
          </div>
        </fieldset>
      </article>
    </section>
    <section class="row mt-3">
      <article class="col-12">
        <div class="row">
          <?php foreach ($gambar as $g) : ?>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-2">
              <a href="#" class="text-reset text-decoration-none">
                <div class="card h-100">
                  <img src="images/small1.jpg" class="card-img-top"></img>
                  <div class="card-body">
                    <div class="text-center">
                      <h6 class="font-weight-bold"><?= $g['nama'] ?></h6>
                      <span class="text-muted small"><?= $g['harga'] ?></span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach ?>
        </div>
      </article>

      <article>

      </article>
    </section>
  </main>

  <footer class="mt-auto">
    <div class="text-center py-2 bg-dark text-white">Copyright &copy; 2022 Kelompok 4</div>
  </footer>
</body>

</html>