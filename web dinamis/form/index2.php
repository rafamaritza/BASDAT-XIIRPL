<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan metode Post</title>
</head>
<body>
    <h1>Menggunakan metode POST</h1>
    <form method="POST">
        <!-- Passing data di dalam body request tanpa menampilkan secara URL -->
        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div>
        <label>Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <button>Login</button>
        </div>
        <?php
        $email = @$_POST['email'];
        $password = @$_POST['password'];

        echo "Email = {$email} <br>";
        echo "Password = {$password}";
        ?>
    </form>
</body>
</html>