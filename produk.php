<?php
require_once 'inc.php';

// Jika di url terdapat query kategori, maka coba filter produk berdasarkan kategori
if (isset($_GET['kategori']) && $_GET['kategori'] != 'semua') {
  $produk = array_filter($produk, fn ($g) => $g['kategori'] == $_GET['kategori']);
}

if (isset($_GET['cari']) && !empty($_GET['cari'])) {
  $produk = array_filter($produk, fn ($g) => str_contains(strtolower($g['nama']), strtolower($_GET['cari'])));
}
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
          <a class="nav-link active" href="produk.php">
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
    <h4 class="pb-2 fw-bold">Daftar Produk</h4>
    <section class="mb-3">
      <article class="mb-1 d-flex justify-content-end">
        <form class="justify-content-end d-flex align-items-center gap-2" action="produk.php" method="GET">
          <div class="input-group">
            <input type="text" class="form-control form-control-sm" placeholder="Pencarian" name="cari">
            <button type="submit" class="btn btn-sm btn-dark">
              <i class="bi-search"></i>
            </button>
          </div>
        </form>
      </article>
      <article>
        <fieldset class="alert alert-secondary">
          <legend>Filter</legend>
          <div class="d-flex flex-column flex-md-row">
            <div class="me-4">Kategori</div>
            <form class="d-flex flex-wrap" action="produk.php" id="form-filter" method="GET">
              <div class="form-check me-3">
                <input id="semua" type="radio" class="form-check-input me-1" value="semua" name="kategori" <?= isset($_GET['kategori']) ? ($_GET['kategori'] == 'semua' ? 'checked' : '') : 'checked' ?>>
                <label class="form-check-label" for="semua">Semua</label>
              </div>
              <?php foreach ($kategori as $k => $v) : ?>
                <div class="form-check me-3">
                  <input id="<?= $k ?>" type="radio" class="form-check-input me-1" name="kategori" value="<?= $k ?>" <?= isset($_GET['kategori']) && $_GET['kategori'] == $k ? 'checked' : '' ?>>
                  <label class="form-check-label" for="<?= $k ?>"><?= $v ?></label>
                </div>
              <?php endforeach ?>
            </form>
          </div>
        </fieldset>
      </article>
    </section>
    <section class="row mt-3">
      <article class="col-12">
        <?php if (isset($_GET['cari']) && !empty($_GET['cari'])) : ?>
          <h6>Hasil Pencarian dari : <?= strip_tags($_GET['cari']) ?></h6>
        <?php endif ?>
        <div class="row">
          <?php foreach ($produk as $i => $p) : ?>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-2">
              <a href="detail.php?id=<?= $i + 1 ?>" class="text-reset text-decoration-none">
                <div class="card h-100">
                  <img src="<?= $p['image'] ?>" class="card-img-top"></img>
                  <div class="card-body">
                    <div class="text-center">
                      <h6 class="font-weight-bold"><?= $p['nama'] ?></h6>
                      <span class="text-muted small"><?= $p['harga'] ?></span>
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