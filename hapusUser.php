<?php
        include "koneksi.php";   
        $query_hapus = mysqli_query($conn, "DELETE FROM user where id_user = '".$_GET['id_user']."'");
        if ($query_hapus) {
            echo "<script> alert('Berhasil dihapus'); location.href='user.php'; </script>";
        }
        else{
            echo "<script> alert ('Gagal dihapus'); location.href='user.php'; </script>";
        }
?>