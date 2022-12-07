<?php
include_once 'inc.php';
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
      <a class="navbar-brand m-auto fw-bold" href="index.php" style="font-size: 24px;">BAJUKITA</a>

      <div class="navbar-collapse mt-2 mt-md-0" id="navbar">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" href="index.php">
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
    <section>
      <article>
        <div class="d-flex mb-2 justify-content-end">
          <div class="col-lg-2 d-flex align-items-center">
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" placeholder="Masukan kata kunci">
              <button class="btn btn-sm btn-dark">
                <i class="bi-search"></i>
              </button>
            </div>
          </div>
        </div>
      </article>
      <article>
        <div id="carouselTop" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselTop" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselTop" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselTop" data-bs-slide-to="2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/slide1.jpg" class="d-block w-100" alt="slide" />
            </div>
            <div class="carousel-item">
              <img src="images/slide1.jpg" class="d-block w-100" alt="slide" />
            </div>
            <div class="carousel-item">
              <img src="images/slide1.jpg" class="d-block w-100" alt="slide" />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselTop" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselTop" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </article>
    </section>

    <section class="row mt-3">
      <aside class="col-lg-3">
        <div class="mb-3">
          <h4 class="fw-bold">Daftar Kategori</h4>
          <div class="list-group">
            <?php foreach ($kategori as $k => $v) : ?>
              <a class="list-group-item list-group-item-action" href="produk.php?kategori=<?= $k ?>">
                <i class="bi-check"></i>
                <?= $v ?>
              </a>
            <?php endforeach ?>
          </div>
        </div>
      </aside>

      <article class="col-lg-9">
        <h4 class="border-bottom pb-2 fw-bold">Produk Rekomendasi</h4>
        <div class="row">
          <?php foreach ($rekomendasi_produk as $i => $p) : ?>
            <div class="col-lg-3 col-sm-4 col-6">
              <a href="detail.php?id=<?= $i + 1 ?>" class="text-reset text-decoration-none">
                <div class="card mb-2">
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