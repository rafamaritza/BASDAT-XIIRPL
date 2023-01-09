<?php
include '../koneksi.php';
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$id'");

if($hapus){
    // jika sukses
    ?>
    <script lang="JavaScript">
        alert('Data Buku Berhasil Di Hapus');
        document.location= 'buku.php';
    </script>
    <?php
}else{
    // jika gagal
    echo "Data Buku Gagal Di Hapus";
}
?>