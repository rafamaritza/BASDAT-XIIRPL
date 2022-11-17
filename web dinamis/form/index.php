<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Get dan Post</title>
</head>
<body>
    <form action="" >
        <div >
            <label>Nama</label><br>
            <input type="text" name="nama" placeholder="masukin nama">
        </div>
        <div>
        <label>Email</label><br>
            <input type="text" name="email" placeholder="masukin email">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        <?php
            // @ berfungsi untuk mengubah nilai menjadi null jika form tidak di isi
            $nama = @$_GET['nama'];
            $email = @$_GET['email'];

            echo "Nama = {$nama} <br>";
            echo "email = {$email}";
        ?>
    </form>
</body>
</html>