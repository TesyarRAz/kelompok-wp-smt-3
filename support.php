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
            <a class="navbar-brand" href="index.php" style="font-size: 24px;">BAJUKITA</a>

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
                    <a class="nav-link active" href="support.php">
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
        <h4 class="text-center fw-bold">Tim Kami</h4>

        <section class="d-flex flex-column flex-md-row justify-content-between m-auto mt-5 p-5 rounded">
            <article class="col d-flex flex-column align-items-center text-center mb-5">
                <img src="images/big1.jpg" class="rounded-2" alt="ihsan" width="250" height="250">
                <span class="mt-2 mb-2" style="font-size: 18px">Muhammad Ihsan Permana</span>
                <span style="font-size: 15px;">15210103</span>
            </article>
            <article class="col d-flex flex-column align-items-center text-center mb-5">
                <img src="images/big1.jpg" class="rounded-2" alt="tesyar" width="250" height="250">
                <span class="mt-2 mb-2" style="font-size: 18px">Mohamad Tesyar Razbani</span>
                <span style="font-size: 15px;">15210264</span>
            </article>
            <article class="col d-flex flex-column align-items-center text-center mb-5">
                <img src="images/big1.jpg" class="rounded-2" alt="diki" width="250" height="250">
                <span class="mt-2 mb-2" style="font-size: 18px">M. Diki Ramlan</span>
                <span style="font-size: 15px;">15210278</span>
            </article>
            <article class="col d-flex flex-column align-items-center text-center mb-5">
                <img src="images/big1.jpg" class="rounded-2" alt="diki" width="250" height="250">
                <span class="mt-2 mb-2" style="font-size: 18px">Nurul Fauziah</span>
                <span style="font-size: 15px;">15210262</span>
            </article>
        </section>
    </main>

    <footer class="mt-auto">
        <div class="text-center py-2 bg-dark text-white">Copyright &copy; 2022 Kelompok 4</div>
    </footer>
</body>

</html>