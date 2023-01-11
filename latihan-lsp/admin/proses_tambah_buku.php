<?php

if($_POST['submit'] == 'submit'){
    $id_katalog = $_POST['id_katalog'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $thn_terbit = $_POST['thn_terbit'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];

}

if(empty($_POST['id_katalog'])||empty($_POST['judul_buku'])||empty($_POST['pengarang'])||empty($_POST['thn_terbit'])||empty($_POST['penerbit'])||empty($_POST['harga'])){
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

$input = "INSERT INTO buku VALUES (NULL, '$id_katalog','$judul_buku', '$pengarang', '$thn_terbit' , '$penerbit', '$harga')";

$query_input = mysqli_query($koneksi, $input);

if($query_input){
    // jika sukses
    ?>
    <script lang="JavaScript">
        alert('Data Buku Berhasil Di Tambahakan');
        document.location= 'buku.php';
    </script>
    <?php
}else{
    // jika gagal
    echo "Input data tidak berhasil seilahkan isi kembali";
}

?>
