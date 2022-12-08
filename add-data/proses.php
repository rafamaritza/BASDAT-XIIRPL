<?php
// cek buttn , sudah terpencet atau belm
if($_POST['submit'] == 'submit'){
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

}
// validasi data koosong
if(empty($_POST['id'])||empty($_POST['no_telp'])||empty($_POST['alamat'])||empty($_POST['email'])){
    ?>
    // warning 
    <script Lang="JavaScript">
        alert('Data harus di lengkapi yah');
        dookument.location= 'tambah.php';
    </script>
    <?php

}else{
    include 'koneksi.php';
}

//fungsi input ke tebelnya yah
$input = "INSERT INTO anggota VALUES ('', '$nama','$no_telp', '$alamat', '$email' , '')";

$query_input = mysqli_query($koneksi, $input);

// cek data masuk atau tidak 
if($query_input){
    // jika sukses
    ?>
    <script lang="JavaScript">
        alert('Berhasil')
    </script>
    <?php
}else{
    // jika gagal
    echo "Input data tidak berhasil seilahkan isi kembali";
}

?>
