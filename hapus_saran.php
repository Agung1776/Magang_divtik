<?php
        include "koneksi.php";   
        $query_hapus = mysqli_query($conn, "DELETE FROM saran where id_saran = '".$_GET['id_saran']."'");
        if ($query_hapus) {
            echo "<script> alert('Berhasil dihapus'); location.href='saran.php'; </script>";
        }
        else{
            echo "<script> alert ('Gagal dihapus'); location.href='saran.php'; </script>";
        }
?>