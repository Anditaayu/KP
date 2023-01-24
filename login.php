<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>

<body>
<?php
                if(isset($_GET['login'])){
                    if($_GET['login'] == "gagal"){
                        echo '
                        <div>
                            <div class="eror alert-danger" role="alert"> Username dan password salah, silahkan login kembali!</div>
                        </div>
                        ';
                    }else if($_GET['login'] == "logout"){
                        echo'
                        <div>
                            <div class="berhasil alert-success" role="alert"> Logout berhasil!</div>
                        </div>
                        ';
                    }else if($_GET['login'] == "belum_login"){
                        echo '
                        <div>
                            <div class="eror alert-danger" role="alert"> Anda harus login terlebih dahulu untuk mengakses halaman admin, silahkan login!</div>
                        </div>
                        ';
                    }
                }
            ?>
    <img src="img/logo.png" id="logo">Dinas Komunikasi, Informatika dan Persandian Kota Yogyakarta
    <h1> Welcome </h1>
    <form method="POST" action="ceklogin.php">
        <!--Username-->
        <div class="mb-3">
            <input type="username" class="form-control" id="username" aria-describedby="username"
               name="username" placeholder="Username">
        </div>

        <!--Password-->
        <div class="mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" name="login" value="login" class="btn btn-primary">LOGIN</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>