<?php

if($_POST['submit'] == 'submit'){
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

}

if(empty($_POST['nama'])||empty($_POST['no_telp'])||empty($_POST['alamat'])||empty($_POST['email'])||empty($_POST['pass'])){
    ?>
    // warning 
    <script Lang="JavaScript">
        alert('Data harus di lengkapi yah');
        document.location= 'tambah_anggota.php';
    </script>
    <?php

}else{
    include '../koneksi.php';
}

$input = "INSERT INTO anggota VALUES (NULL, '$nama','$no_telp', '$alamat', '$email' , '$pass')";

$query_input = mysqli_query($koneksi, $input);

if($query_input){
    // jika sukses
    ?>
    <script lang="JavaScript">
        alert('Data anggota Berhasil Di Tambahakan');
        document.location= 'anggota.php';
    </script>
    <?php
}else{
    // jika gagal
    echo "Input data tidak berhasil seilahkan isi kembali";
}

?>
