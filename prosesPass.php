<?php
    $id_user = $_POST["id_user"];
    $password = $_POST["password"];

    include "koneksi.php";
   
        $input = mysqli_query($conn, "UPDATE user SET password= '".md5($password)."' where id_user='".$id_user."'");

        if ($input) {
            echo "<script>alert('Berhasil');location.href='user.php';</script>";
        }
        else {
            echo "<script>alert('Gagal');location.href='user.php';</script>";
        }    
?>