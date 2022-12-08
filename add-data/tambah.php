<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Menambahkan Data</h1>
    <form action="proses.php" method="POST">
        <label>Masukan Nama</label>
        <input type="text" name="nama" >
        <br>
        <label>Masukan No Telp</label>
        <input type="number" name="no_telp" >
        <br>
        <label>Masukan Alamat</label>
        <input type="text" name="alamat" >
        <br>
        <label>Masukan Email</label>
        <input type="text" name="email" >
        <br>
        <input type="submit" value="submit">
        <br>
        <input type="reset" value="cancel">
    </form>
</body>
</html>