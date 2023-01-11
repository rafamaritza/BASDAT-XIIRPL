<?php
 include '../koneksi.php';


if($_POST['submit'] == 'submit'){
    $id = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
}

$input = "UPDATE anggota SET
nama = '$nama',
no_telp = '$no_telp',
alamat = '$alamat' WHERE id_anggota = '$id'";

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
