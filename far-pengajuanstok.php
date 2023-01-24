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
  //      include('far-navbar.php'); 
  //  ?>

    <h3> Data Pengajuan Stok </h3>
    <div>
        <?php
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = mysqli_query($conn, "SELECT * FROM pengajuanstok WHERE idobat like '%".$cari."%'");				
            }else{
                $query = mysqli_query($conn, "SELECT * FROM pengajuanstok ORDER BY idobat ASC");		
            }
            echo " Menampilkan <b>" .mysqli_num_rows($query). "</b> Data Pengajuan Obat";
        ?>

        <form class="d-flex" role="search">
            <input class="form-control me-2" value="" name="cari" type="search" aria-label="Cari" placeholder="ID Obat">
            <button class="btn btn-outline-success" type="submit" name="search">Cari</button>
        </form>
        <a href="far-tambahpengajuanstok.php"><button type="button" class="btn btn-primary">Tambah Pengajuan Stok</button></a>
    </div>
    <table class="table ml-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Pengajuan</th>
                <th scope="col">Instansi Pemohon</th>
                <th scope="col">ID Obat</th>
                <th scope="col">Jumlah Permintaan</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 0;
            while($data = mysqli_fetch_array($query)){
            $no++;
            ?>
            <td>
                <?php echo $no;?>
            </td>
            <td>
                <?php echo $data['id_pengajuan'];?>
            </td>
            <td>
                <?php echo $data['instansi_pemohon'];?>
            </td>
            <td>
                <?php echo $data['idobat'];?>
            </td>
            <td>
                <?php echo $data['jumlahpermintaan'];?>
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