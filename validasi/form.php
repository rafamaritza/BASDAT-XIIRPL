<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validasi form</title>
</head>
<body>
    <form action="prosses.php">
        <div style="margin-top: 10px;">
            <label>Nama(Harus input nama)</label><br>
            <input type="text" name="nama">
        </div>
        <div style="margin-top: 10px;">
        <label>Email(Harus input @)</label><br>
            <input type="text" name="email">
        </div>
        <div style="margin-top: 10px;">
        <label>Username(Tidak boleh regex</label><br>
            <input type="text" name="username">
        </div>
        <div style="margin-top: 10px;">
        <label>Usia(Harus angka)</label><br>
            <input type="text" name="email">
        </div>
        <div style="margin-top: 10px;">
        <button>Submit</button>
        </div>
    </form>
</body>
</html>