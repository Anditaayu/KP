<?php 
    include ('connect.php');

    $kodetransaksi = $_POST['kodetransaksi'];
    $tanggal = $_POST['tanggal'];
    $id_instansi = $_POST['id_instansi'];
    $id_obat = $_POST['id_obat'];
    $jumlahkeluar = $_POST['jumlahkeluar'];
    $expired = $_POST['expired'];

    $data = mysqli_query($conn, "SELECT * FROM dataobat WHERE id_obat = $id_obat;");
    $stok = mysqli_fetch_array($data);
    $jumlah = $stok['jumlah'];
    $akhir = $jumlah-$jumlahkeluar;

    $query = mysqli_query($conn, "INSERT INTO obatkeluar VALUES ('$kodetransaksi','$tanggal','$id_instansi','$id_obat','$jumlahkeluar','$expired')") or die(mysqli_error($conn));

    if($query){
        $update = mysqli_query($conn, "UPDATE dataobat SET jumlah='$akhir' WHERE id_obat = $id_obat");
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='dataobatkeluar.php'</script>";
    }else{
        echo "<script>alert('Data gagal ditambahkan!'); window.location.href='dataobatkeluar.php'</script>";
    }
?>