<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <h1>Daftar</h1>
    <form method="POST" action="prosesdaftar.php">
        <!--Nama-->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="nama" class="form-control" id="nama" name="nama" aria-describedby="nama">
        </div>

        <!--Instansi-->
        <div class="mb-3">
            <label for="instansi" class="form-label">Instansi</label>
            <input type="instansi" name="instansi" class="form-control" id="instansi">
        </div>

        <!--Username-->
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="username" name="username" class="form-control" id="username" aria-describedby="username">
        </div>

        <!--Password-->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <!--Role-->
        <div class="row">
            <div class="d-block">
                <label for="disabledTextInput" class="form-label">Role</label>
                <div class="form-check form-check-inline">
                    <input type="radio" id="Supplier" name="role" value="Supplier">
                    <label class="form-check-label" for="Supplier" style="padding-right: 8px;">Supplier</label>
                    <input type="radio" id="Farmasi" name="role" value="Farmasi">
                    <label class="form-checklabel" for="Farmasi" style="padding-right: 8px;">Farmasi</label>
                    <input type="radio" id="Supervisor" name="role" value="Supervisor">
                    <label class="form-checklabel" for="Supervisor">Supervisor</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>