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
  //?>

    <h3> Input Obat Masuk </h3>

    <form method="POST" action="prosesobatmasuk.php">
        <!--Kode Transaksi-->
        <div class="mb-3">
            <label for="kodetransaksi" class="form-label">Kode Transaksi</label>
            <input type="text" name="kodetransaksi" class="form-control">
        </div>

        <!--Tanggal-->
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Masuk</label>
            <input type="date" name="tanggal" class="form-control">
        </div>

        <!--ID Obat-->
        <div class="mb-3">
            <label for="id_obat" class="tambahdata form-label">ID Obat </label>
            <select class="form-select" name="id_obat" aria-label="Default select example">
                <option class="pt-2" value="">Pilih</option>
                <?php 
              $id_obat = mysqli_query($conn, "SELECT id_obat FROM dataobat order by id_obat ASC;");
              while($data = mysqli_fetch_array($id_obat)){
            ?>
                <option value="<?php echo $data['id_obat'] ?>">
                    <?php echo $data['id_obat'] ?>
                </option>
                <?php } ?>
            </select>
        </div>

        <!--Jumlah Masuk-->
        <div class="mb-3">
            <label for="jumlahmasuk" class="form-label">Jumlah Masuk</label>
            <input type="number" name="jumlahmasuk" class="form-control">
        </div>

        <!--Expired-->
        <div class="mb-3">
            <label for="expired" class="form-label">Expired</label>
            <input type="date" name="expired" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
            
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>