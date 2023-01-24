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
    <!--Data Obat-->
    <div class="card" style="width: 18rem;">
    <div class="card-header">
            <?php
                $query = mysqli_query($conn, "SELECT * FROM dataobat");				
                $dataobat = mysqli_num_rows($query);
                
                echo $dataobat. "<br> Data Obat"
            ?>
    </div>
    <div class="list-group list-group-flush">
        <a href="tambahobat.php"><p>Tambah</p></a>
    </div>

    <!--Obat Masuk-->
    <div class="card" style="width: 18rem;">
    <div class="card-header">
    <?php
                $query = mysqli_query($conn, "SELECT * FROM obatmasuk");				
                $dataobat = mysqli_num_rows($query);
                
                echo $dataobat. "<br> Data Obat Masuk"
            ?>
    </div>
    <div class="list-group list-group-flush">
        <a href="tambahobatmasuk.php"><p>Tambah</p></a>
    </div>
    </div>

    <!--Obat Keluar-->
    <div class="card" style="width: 18rem;">
    <div class="card-header">
        <?php
                $query = mysqli_query($conn, "SELECT * FROM obatkeluar");				
                $dataobat = mysqli_num_rows($query);
                
                echo $dataobat. "<br> Data Obat Keluar"
            ?>
    </div>
    <div class="list-group list-group-flush">
        <a href="tambahobatkeluar.php"><p>Tambah</p></a>
    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>