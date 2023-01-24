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

    <h3> Verifikasi Obat Masuk</h3>

    <a href="far-verifikasi.php" class="w3-bar-item w3-button"><i class=""></i><div class="pl">Verifikasi Data</div></a>
    <a href="far-lihattransaksi.php" class="w3-bar-item w3-button"><i class=""></i><div class="pl">Lihat Transaksi</div></a>
    <div>
        <?php
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = mysqli_query($conn, "SELECT * FROM obatkeluar WHERE id_instansi like '%".$cari."%'");				
            }else{
                $query = mysqli_query($conn, "SELECT * FROM obatkeluar ORDER BY id_obat ASC");		
            }
            echo " Menampilkan <b>" .mysqli_num_rows($query). "</b> Data Obat Masuk";
        ?>

        <form class="d-flex" role="search">
            <input class="form-control me-2" value="" name="cari" type="search" aria-label="Cari" placeholder="Instansi">
            <button class="btn btn-outline-success" type="submit" name="search">Cari</button>
        </form>
    </div>
    <table class="table ml-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Transaksi</th>
                <th scope="col">Tanggal Distribusi</th>
                <th scope="col">ID Instansi</th>
                <th scope="col">ID Obat</th>
                <th scope="col">Jumlah Masuk</th>
                <th scope="col">Expired</th>
                <th scope="col">Keterangan</th>
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
                <?php $kodetransaksi = $data['kodetransaksi'];
                echo $kodetransaksi; ?>
            </td>
            <td>
                <?php $tanggal = $data['tanggal'];
                echo $tanggal; ?>
            </td>
            <td>
                <?php $id_instansi = $data['id_instansi'];
                echo $id_instansi; ?>
            </td>
            <td>
                <?php $id_obat = $data['id_obat'];
                echo $id_obat; ?>
            </td>
            <td>
                <?php $jumlahmasukfar = $data['jumlahkeluar'];
                echo $jumlahmasukfar; ?>
            </td>
            <td>
                <?php $expired = $data['expired'];
                echo $expired; ?>
            </td>
            <td>
                <button type="submit" href="far-prosesverifikasi.php" class="selesai">Terima</button>
                <button type="submit" href="far-prosesverifikasi.php" class="ditolak">Tolak</button>
            </td>
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