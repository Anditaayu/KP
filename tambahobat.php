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

    <h3> Input Obat </h3>

    <form method="POST" action="prosestambahobat.php">
        <!--Golongan Obat-->
        <div class="mb-3">
            <label for="golongan" class="tambahdata form-label">Golongan Obat </label>
            <select class="form-select" name="golongan" aria-label="Default select example">
                <option class="pt-2" value="">Pilih</option>
                <?php 
              $golongan = mysqli_query($conn, "SELECT DISTINCT golongan FROM dataobat order by golongan ASC;");
              while($data = mysqli_fetch_array($golongan)){
            ?>
                <option value="<?php echo $data['golongan'] ?>">
                    <?php echo $data['golongan'] ?>
                </option>
                <?php } ?>
            </select>
        </div>

        <!--Nama Obat-->
        <div class="mb-3">
            <label for="nama" class="tambahdata form-label">Nama Obat </label>
            <select class="form-select" name="nama" aria-label="Default select example">
                <option class="pt-2" value="">Pilih</option>
                <?php 
              $namaobat = mysqli_query($conn, "SELECT DISTINCT namaobat FROM dataobat order by namaobat ASC");
              while($data = mysqli_fetch_array($namaobat)){
            ?>
                <option value="<?php echo $data['namaobat'] ?>">
                    <?php echo $data['namaobat'] ?>
                </option>
                <?php } ?>
            </select>
        </div>

        <!--Merk Obat-->
        <div class="mb-3">
            <label for="merk" class="form-label">Merk Obat</label>
            <input type="text" class="form-control" name="merk" id="merk">
        </div>

        <!--Satuan Obat-->
        <div class="mb-3">
            <label for="satuan" class="tambahdata form-label">Satuan Obat </label>
            <select class="form-select" name="satuan" aria-label="Default select example">
                <option class="pt-2" value="">Pilih</option>
                <?php 
              $satuan = mysqli_query($conn, "SELECT DISTINCT satuan FROM dataobat order by satuan ASC;");
              while($data = mysqli_fetch_array($satuan)){
            ?>
                <option value="<?php echo $data['satuan'] ?>">
                    <?php echo $data['satuan'] ?>
                </option>
                <?php } ?>
            </select>
        </div>

        <!--Jumlah-->
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Obat</label>
            <input type="number" name="jumlah" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>