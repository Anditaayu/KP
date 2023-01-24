<?php 
    include ('connect.php');

    $golongan = $_POST['golongan'];
    $nama = $_POST['nama'];
    $merk = $_POST['merk'];
    $satuan = $_POST['satuan'];
    $jumlah = $_POST['jumlah'];

    $query = mysqli_query($conn, "INSERT INTO dataobat VALUES ('','$golongan','$nama','$merk','$satuan','$jumlah')")
    or die(mysqli_error($conn));

    if($query){
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='dataobat.php'</script>";
    }else{
        echo "<script>alert('Data gagal ditambahkan!'); window.location.href='dataobat.php'</script>";
    }
?>