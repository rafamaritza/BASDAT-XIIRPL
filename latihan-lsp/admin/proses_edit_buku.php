<?php



if($_POST['submit'] == 'submit'){
    $id_buku = $_POST['id_buku'];
    $id_katalog = $_POST['id_katalog'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $thn_terbit = $_POST['thn_terbit'];
    $penerbit = $_POST['penerbit'];

}

if(empty($_POST['id_katalog'])||empty($_POST['judul_buku'])||empty($_POST['pengarang'])||empty($_POST['thn_terbit'])||empty($_POST['penerbit'])){
    ?>
    // warning 
    <script Lang="JavaScript">
        alert('Data harus di lengkapi yah');
        document.location= 'tambah_buku.php';
    </script>
    <?php

}else{
    include '../koneksi.php';
}

$input = "UPDATE buku SET id_katalog='$id_katalog',judul_buku='$judul_buku', pengarang='$pengarang', thn_terbit='$thn_terbit' , penerbit='$penerbit' WHERE id_buku='$id_buku'";

$query_input = mysqli_query($koneksi, $input);

if($query_input){
    // jika sukses
    ?>
    <script lang="JavaScript">
        alert('Data Buku Berhasil Di Ubah');
        document.location= 'buku.php';
    </script>
    <?php
}else{
    // jika gagal
    echo "Data Buku Gagal Di Ubah";
}

?>
