<?php

include '../koneksi.php';
$buku = mysqli_query($koneksi, "SELECT * FROM buku");
?>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="styles/admin.css" />
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
    </head>
    <body class="body">
        <nav class="navbar navbar-expand-lg navbar-light" style="background: #ffef13;">
            <div class="container">
            <a class="navbar-brand" href="#"><img src="images/bimba.png" width="60" alt=""></a><span>Perpustakaan biMBA AIUEO</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active me-3" href="index.php">Beranda</a>
                </li>          
                <li class="nav-item">
                    <a class="nav-link me-3" href="buku.php">Data Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3" href="anggota.php">Data Anggota</a>
                </li>
                <!-- Cek halaman apakah sudah login atau belum -->
                <?php
                    session_start();
                    if($_SESSION['status']!='login'){
                        header('location:login_admin.php?pesan=belum_login');
                    }
                ?>
                <a class="btn btn-outline-none">Halo,<?php echo $_SESSION['admin']?></a>
                <a href="../logout.php" class="btn btn-danger py-2 px-3" style="cursor: pointer;">Logout</a>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
    <h3>Tambah Data Buku</h3>
        <form action="proses_tambah_buku.php" method="POST">
            <label class="form-label">ID Katalog</label>
            <input type="text" name="id_katalog" class="form-control mb-3">

            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul_buku" class="form-control mb-3">
          
            <label class="form-label">Pengarang</label>
            <input type="text" name="pengarang" class="form-control mb-3">
        
            <label class="form-label">Tahun Terbit</label>
            <input type="date" name="thn_terbit" class="form-control mb-3">
         
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control">

            <label class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control">

            <input name="submit" type="submit" value="submit" class="mt-3 btn btn-sm btn-primary">
            <input name="reset" type="reset" value="Cancel" class="mt-3 btn btn-sm btn-danger">
        </form>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
