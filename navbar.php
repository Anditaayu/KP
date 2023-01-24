<?php
    session_start();
    include ('connect.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title><?php echo $_SESSION['role'] ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <?php 
                    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
                    echo $_SESSION['role'] 
        ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><?php 
                    echo $_SESSION['username'] 
                ?></a>
            </li>     
        </ul>
        </div>
    </div>
    </nav>  

    <!-- Sidebar-->
    <div class="w3-sidebar w3-bar-block" id="sidebar">
        <ul class="nav side-menu mt-5">
            <p>Welcome, <?php echo $_SESSION['username'] ?><br> Dinkes Kota Jogja </br></p>
            <hr> 
            <div class = "menu">
            <hr>
            <p> Menu </p>
            <a href="dashboard.php" class="w3-bar-item w3-button"><i class=""></i><div class="pl">Dashboard</div></a>
            <a href="dataobat.php" class="w3-bar-item w3-button"><i class=""></i><div class="pl">Data Obat</div></a>
            <a href="obatmasuk.php" class="w3-bar-item w3-button"><i class=""></i></i><div class="pl">Data Obat Masuk</div></a>
            <a href="output.php" class="w3-bar-item w3-button"><i class=""></i></i><div class="pl">Data Obat Keluar</div></a>
            <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="w3-bar-item w3-button"><i class="fa fa-sign-out fa-2x fasb"></i>Logout</a>
            </div>
        </ul>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>