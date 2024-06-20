<?php
        include "koneksi.php";   
        $query_hapus = mysqli_query($conn, "DELETE FROM event where id_event = '".$_GET['id_event']."'");
        if ($query_hapus) {
            echo "<script> alert('Berhasil dihapus'); location.href='event.php'; </script>";
        }
        else{
            echo "<script> alert ('Gagal dihapus'); location.href='event.php'; </script>";
        }
?>