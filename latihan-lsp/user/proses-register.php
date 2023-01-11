<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$pass = $_POST['pass'];



$input = "INSERT INTO anggota VALUES (NULL, '$nama','$no_telp', '$alamat', '$email' , '$pass')";

$query_input = mysqli_query($koneksi, $input);

if($query_input){
    // jika sukses
    ?>
    <script lang="JavaScript">
        alert('Register berhasil');
        document.location= 'login.php';
    </script>
    <?php
}else{
    // jika gagal
    echo "Input data tidak berhasil seilahkan isi kembali";
}

?>
