<?php

include '../koneksi.php';

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
                <!-- Cek halaman apakah sudah login atau belum -->
                <?php
                    session_start();
                    if($_SESSION['status']!='login'){
                        header('location:login.php?pesan=belum_login');
                    }
                ?>
                <a class="btn btn-outline-none">Halo,<?php 
                include '../koneksi.php';
                $email = $_SESSION['email'];
                $anggota = mysqli_query($koneksi, "SELECT * FROM anggota WHERE email = '$email' ");
                foreach($anggota as $nama){
                    echo $nama['nama'];
                    // echo $nama['id_anggota'];
                }
                ?></a>
                
                <a href="../logout.php" class="btn btn-danger py-2 px-3" style="cursor: pointer;">Logout</a>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
    <h3>Customize profile</h3>
    <?php
            include '../koneksi.php';
            $id = $_GET['id_anggota'];
            $data = mysqli_query($koneksi,"select * from anggota where id_anggota = '$id'");
            while($meledak = mysqli_fetch_array($data)){
            ?>

        <form action="proses-update.php" method="POST">
            <input type="hidden" name="id_anggota" id="id_anggota" value="<?php echo $meledak ['id_anggota'];?>" class="form-control mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" value="<?php echo $meledak ['nama'];?>" class="form-control mb-3">
            <label class="form-label">No Telepon</label>
            <input type="number" name="no_telp" value="<?php echo $meledak ['no_telp'];?>" class="form-control mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" value="<?php echo $meledak ['alamat'];?>" class="form-control mb-3">
            <label class="form-label">[Password]</label>
            <input type="text" name="password" value="<?php echo $meledak ['password'];?>" disabled class="form-control mb-3">


            <input name="submit" type="submit" value="submit" class="mt-3 btn btn-sm btn-primary">
            <input name="reset" type="reset" value="Cancel" class="mt-3 btn btn-sm btn-danger">
        </form>
        <?php
            }
        ?>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
