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

    <h3> Edit Data Obat </h3>
    <?php
      $id_obat = $_GET['id_obat'];
      $data = mysqli_query($conn, "SELECT * FROM dataobat WHERE id_obat='$id_obat'");
      while($baru = mysqli_fetch_array($data)){
    ?>

    <form method="POST" action="proseseditdataobat.php">
        <!--ID Obat-->
        <div class="mb-3">
            <label for="id" class="form-label">ID Obat</label>
            <input type="text" class="form-control" name="id_obat" id="id" value="<?php echo $baru['id_obat'];?>"readonly required>
        </div>

        <!--Golongan Obat-->
        <div class="mb-3">
            <label for="golongan" class="tambahdata form-label">Golongan Obat </label>
            <select class="form-select" name="golongan" aria-label="Default select example">
            <?php 
              $golongan = mysqli_query($conn, "SELECT DISTINCT golongan FROM dataobat ORDER BY golongan ASC");
              while($r = mysqli_fetch_array($golongan)){
                if($baru['golongan']==$r['golongan']){
                    $select = "selected";
                }else{
                    $select = "";
                }
                echo "<option $select>".$r['golongan']."</option>";
            }
            ?>
            </select>
        </div>

        <!--Nama Obat-->
        <div class="mb-3">
            <label for="nama" class="tambahdata form-label">Nama Obat </label>
            <select class="form-select" name="namaobat" aria-label="Default select example">
            <?php 
              $namaobat = mysqli_query($conn, "SELECT DISTINCT namaobat FROM dataobat ORDER BY namaobat ASC");
              while($r = mysqli_fetch_array($namaobat)){
                if($baru['namaobat']==$r['namaobat']){
                    $select = "selected";
                }else{
                    $select = "";
                }
                echo "<option $select>".$r['namaobat']."</option>";
            }
            ?>
            </select>
        </div>

        <!--Merk Obat-->
        <div class="mb-3">
            <label for="merk" class="form-label">Merk Obat</label>
            <input type="text" class="form-control" name="merkobat" id="merk" value="<?php echo $baru['merkobat'];?>">
        </div>

        <!--Satuan Obat-->
        <div class="mb-3">
            <label for="satuan" class="tambahdata form-label">Satuan Obat </label>
            <select class="form-select" name="satuan" aria-label="Default select example">
            <?php 
              $satuan = mysqli_query($conn, "SELECT DISTINCT satuan FROM dataobat ORDER BY satuan ASC");
              while($r = mysqli_fetch_array($satuan)){
                if($baru['satuan']==$r['satuan']){
                    $select = "selected";
                }else{
                    $select = "";
                }
                echo "<option $select>".$r['satuan']."</option>";
            }
            ?>
            </select>
        </div>

        <!--Jumlah-->
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Obat</label>
            <input type="number" name="jumlah" class="form-control" value="<?php echo $baru['jumlah'];?>"readonly required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>