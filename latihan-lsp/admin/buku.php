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
    <h3>Data Buku</h3>
        <a href="tambah_buku.php" class="btn btn-sm btn-primary mb-3">Tambah Buku</a>
        <table border="1" class="table table-striped">
            <tr>
                <th>NO</th>
                <th>ID Buku</th>
                <th>ID Katalog</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
                <th>Aksi</th>
            </tr>
            <?php $i=1;?>
                <?php while($data=mysqli_fetch_array($buku)): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["id_buku"];?></td>
                <td><?= $data["id_katalog"];?></td>
                <td><?= $data["judul_buku"];?></td>
                <td><?= $data["pengarang"];?></td>
                <td><?= $data["thn_terbit"];?></td>
                <td><?= $data["penerbit"];?></td>
                <td>
                    <a href="edit_buku.php?id_buku=<?php echo $data['id_buku'];?>" class="btn btn-sm btn-success">Edit</a>
                    <a href="hapus_buku.php?id=<?=$data['id_buku']?>"onClick="return confirm('Anda Yakin Ingin Hapus Data?')" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
                <?php endwhile; ?>
        </table>
    </div>
        
        
        
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
