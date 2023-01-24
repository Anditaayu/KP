<?php
    session_start();
    include ('connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' && password = '$password'") or die (mysqli_error($connect));
    $cek = mysqli_num_rows($query);

    if($cek > 0){
        $data = mysqli_fetch_assoc($query);
        // cek role Supplier
        if($data['role']=="Supplier"){
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "Supplier";
            header("location:homesupplier.php");

        // cek role Farmasi
        }else if($data['role']=="Farmasi"){
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "Farmasi";
            header("location:homefarmasi.php");
           
        // cek role Supervisor
        }else if($data['role']=="Supervisor"){
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "Supervisor";
          //  header("location:login.php");
            echo "<script>alert('Supervisor'); window.location.href='login.php'</script>";
        }else{
         //   header("location:login.php?pesan=gagal");
            echo "<script>alert('Gagal1'); window.location.href='login.php'</script>";
        }
    }else{
    //    header("location:login.php?pesan=gagal");
        echo "<script>alert('Eror bestie'); window.location.href='login.php'</script>";
    }
?>