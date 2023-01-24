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

    <h3> Data Obat Keluar</h3>
    <div>
        <?php
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = mysqli_query($conn, "SELECT DISTINCT obatkeluar.kodetransaksi, obatkeluar.tanggal, obatkeluar.id_instansi, obatkeluar.jumlahkeluar, dataobat.id_obat, dataobat.namaobat, obatkeluar.expired FROM obatkeluar INNER JOIN dataobat ON obatkeluar.id_obat = dataobat.id_obat like '%".$cari."%'");				
            }else{
                $query = mysqli_query($conn, "SELECT DISTINCT obatkeluar.kodetransaksi, obatkeluar.tanggal, obatkeluar.id_instansi, obatkeluar.jumlahkeluar, dataobat.id_obat, dataobat.namaobat, obatkeluar.expired FROM obatkeluar INNER JOIN dataobat ON obatkeluar.id_obat = dataobat.id_obat ORDER BY obatkeluar.tanggal ASC");		
            }
            echo " Menampilkan <b>" .mysqli_num_rows($query). "</b> Data Obat";
        ?>

        <form class="d-flex" role="search">
            <input class="form-control me-2" value="" name="cari" type="search" aria-label="Cari" placeholder="Merk Obat">
            <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
        <a href="tambahobatkeluar.php"><button type="button" class="btn btn-primary">Tambah Data</button></a>
    </div>
    <table class="table ml-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Transaksi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">ID Instansi</th>
                <th scope="col">ID Obat</th>
                <th scope="col">Jumlah Keluar</th>
                <th scope="col">Expired</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            while($data = mysqli_fetch_array($query)){
            echo '
            <tr>
            <td> '.$no.' </td>
            ';
            $no++;
        ?>
            <td>
                <?php echo $data['kodetransaksi'];?>
            </td>
            <td>
                <?php echo $data['tanggal'];?>
            </td>
            <td>
                <?php echo $data['id_instansi'];?>
            </td>
            <td>
                <?php echo $data['id_obat'];?>
            </td>
            <td>
                <?php echo $data['jumlahkeluar'];?>
            </td>
            <td>
                <?php echo $data['expired'];?>
            </td>
            </tr>
            <?php
            }
        ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>