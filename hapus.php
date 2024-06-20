<?php
        include "koneksi.php";   
        $query_hapus = mysqli_query($conn, "DELETE FROM berita where id_berita = '".$_GET['id_berita']."'");
        if ($query_hapus) {
            echo "<script> alert('Berhasil dihapus'); location.href='berita.php?id=0'; </script>";
        }
        else{
            echo "<script> alert ('Gagal dihapus'); location.href='berita.php?id=0'; </script>";
        }
?>