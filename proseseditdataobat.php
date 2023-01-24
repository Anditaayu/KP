<?php 
    include ('connect.php');

    $id_obat = $_POST['id_obat'];
    $golongan = $_POST['golongan'];
    $namaobat = $_POST['namaobat'];
    $merkobat = $_POST['merkobat'];
    $satuan = $_POST['satuan'];
    $jumlah = $_POST['jumlah'];

    $query = mysqli_query($conn, "UPDATE dataobat SET golongan='$golongan',namaobat='$namaobat',merkobat='$merkobat',satuan='$satuan',jumlah='$jumlah' WHERE id_obat = '$id_obat' ")
    or die(mysqli_error($conn));

    if($query){
        echo "<script>alert('Data berhasil diubah!'); window.location.href='dataobat.php'</script>";
    }else{
        echo "<script>alert('Data gagal diubah!'); window.location.href='dataobat.php'</script>";
    }
?>