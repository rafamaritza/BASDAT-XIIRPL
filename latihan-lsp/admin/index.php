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
    <div class="container mt-5">
        <h3>Halo, selamat datang <?php echo $_SESSION["admin"]; ?> di Perpustakaan biMBA AIUEO<br /></h3>
                </br> </br> </br> 
        <center><img src="images/org-bimba.png" ></center>
    </div>
        
        
        
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>