<?php
    $id_user = $_POST["id_user"];
    $nama_user = $_POST["nama_user"];
    $role = $_POST["role"];
    $username = $_POST["username"];

    include "koneksi.php";
   
        $input = mysqli_query($conn, "UPDATE user SET nama_user='".$nama_user."', role='".$role."', username='".$username."' where id_user='".$id_user."'");

        if ($input) {
            echo "<script>alert('Berhasil');location.href='user.php';</script>";
        }
        else {
            echo "<script>alert('Gagal');location.href='user.php';</script>";
        }    
?>