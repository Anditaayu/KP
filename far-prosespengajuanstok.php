<?php 
    include ('connect.php');

    $instansi_pemohon = $_POST['instansi_pemohon'];
    $idobat = $_POST['idobat'];
    $jumlahpermintaan = $_POST['jumlahpermintaan'];

    $query = mysqli_query($conn, "INSERT INTO pengajuanstok VALUES ('','$instansi_pemohon','$idobat','$jumlahpermintaan')") or die(mysqli_error($conn));

    if($query){
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='far-pengajuanstok.php'</script>";
    }else{
        echo "<script>alert('Data gagal ditambahkan!'); window.location.href='far-tambahpengajuanstok.php'</script>";
    }
?>