<?php
    session_start();
    include ('connect.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <?php 
  //      include('navbar.php'); 
  //  ?>

    <h3> Dashboard </h3>
    <!--Verifikasi Data-->
    <a href="far-verifikasi.php" class="w3-bar-item w3-button"><i class=""></i><div class="pl">Verifikasi Data</div></a>

    <!--Data Obat-->
    <a href="far-dataobat.php" class="w3-bar-item w3-button"><i class=""></i></i><div class="pl">Data Obat</div></a>

    <!--Pengajuan Stok-->
    <a href="far-pengajuanstok.php" class="w3-bar-item w3-button"><i class=""></i></i><div class="pl">Pengajuan Stok</div></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>