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
  //?>

    <h3> Pengajuan Stok </h3>

    <form method="POST" action="far-prosespengajuanstok.php">
            
        <!-- Instansi Pemohon-->
        <div class="mb-3">
            <label for="instansi_pemohon" class="tambahdata form-label">Instansi Pemohon</label>
            <select class="form-select" name="instansi_pemohon" aria-label="Default select example">
                <option class="pt-2" value="">-- Pilih Instansi Pemohon --</option>
                <?php 
              $instansi_pemohon = mysqli_query($conn, "SELECT instansi FROM user order by instansi ASC;");
              while($data = mysqli_fetch_array($instansi_pemohon)){
            ?>
                <option value="<?php echo $data['instansi'] ?>">
                    <?php echo $data['instansi'] ?>
                </option>
                <?php } ?>
            </select>
        </div>
    
        <!--ID Obat-->
        <div class="mb-3">
            <label for="idobat" class="tambahdata form-label">ID Obat</label>
            <select class="form-select" name="idobat" aria-label="Default select example">
                <option class="pt-2" value="">-- Pilih ID Obat --</option>
                <?php 
              $idobat = mysqli_query($conn, "SELECT * FROM dataobat order by id_obat ASC, merkobat ASC;");
              while($data = mysqli_fetch_array($idobat)){
            ?>
                <option value="<?php echo $data['id_obat'] ?>">
                    <?php echo $data['id_obat'] ?> || <?php echo $data['merkobat']?>
                </option> 
                <?php } ?>
            </select>
        </div>

        <!--Jumlah Permintaan-->
        <div class="mb-3">
            <label for="jumlahpermintaan" class="form-label">Jumlah Permintaan</label>
            <input type="number" name="jumlahpermintaan" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>