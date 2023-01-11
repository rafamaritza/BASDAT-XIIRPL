<?php

include '../koneksi.php';
$buku = mysqli_query($koneksi, "SELECT * FROM buku");
?>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="styles/user.css" />
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
                    <a class="nav-link me-3" href="buku.php">Buku</a>
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
              
                <li class="nav-item">
                        <a href="update-anggota.php?id_anggota=<?php echo$nama['id_anggota'] ?>" class="nav-link me-3">Customize</a>
                </li>
                <a href="../logout.php" class="btn btn-danger py-2 px-3" style="cursor: pointer;">Logout</a>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
    <h3>Data Buku</h3>
        <table border="1" class="table table-striped">
            <tr>
                <th>NO</th>
                <th>ID Buku</th>
                <th>ID Katalog</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
                <th>Harga</th>
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
                <td><?= $data["harga"];?></td>
                <td><a href="keranjang.php?id_buku=<?php echo $data['id_buku']; ?>">Add to Cart</a></td>        
            </tr>
            <?php $i++; ?>
                <?php endwhile; ?>
                
                
        </table>
        <center><h1> Total Semua Harga Buku :
                <?php
                $db = mysqli_query($koneksi, "SELECT * FROM buku;");
                while ($r = mysqli_fetch_array($db)) {
                    $harga[] = $r['harga'];
                }
                $totalHarga = array_sum($harga);
                echo "Rp. " . number_format($totalHarga) . " ,-";

                ?>
            </h1></center>
    </div>
        
        
        
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
