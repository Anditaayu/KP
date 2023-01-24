<?php 
    include ('connect.php');

    $nama = $_POST['nama'];
    $instansi = $_POST['instansi'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = mysqli_query($conn, "INSERT INTO user VALUES ('','$nama','$instansi','$username','$password','$role')")
    or die(mysqli_error($conn));

    if($query){
        echo "<script>alert('User berhasil ditambahkan!'); window.location.href='login.php'</script>";
    }else{
        echo "<script>alert('User gagal ditambahkan!'); window.location.href='admin.php'</script>";
    }
?>