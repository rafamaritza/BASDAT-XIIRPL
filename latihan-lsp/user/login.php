<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Admin - Perpustakaan biMBA AIUEO</title>
    <link rel="stylesheet" href="styles/user.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body style="background: #ff9999;">
    <div class="container">
        <div class="login">
            <div class="row justify-content-center align-items-center">
                <div class="col-6">
                    <div class="page-login">
                        <div class="col-10">
                            <div class="content">
                            <span style="margin-left: 20px;"><a class="navbar-brand fw-600" href="#">User <span style="color:#3E00FA">Accses</span></a></span><br />
                                <img src="images/bimba.png" alt="" width="80px"><span>Perpustakaan biMBA AIUEO</span>
                                <h3>biMBA AIUEO - Pilihan si Kecil!</h3>
                        </div>
                        <div class="card card-login p-4">
                            <form action="proses.php" method="POST">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" id="" class="form-control mb-3" />
                                <label class="form-label">Password</label>
                                <input type="password" name="pass" id="" class="form-control mb-2" />
                                <button class="btn btn-login" type="submit">Login</button>
                                <div class="text-center text-user">
                                    Admin Acces? <a href="../admin/login_admin.php">Klik disini ! </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mt-5">
                <img src="images/img-login.png" alt="" width="550"/>
            </div>
        </div>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>