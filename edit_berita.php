<?php
    $id_buku = $_POST["id_berita"];
    $nama_buku = $_POST["judul"];
    $pengarang = $_POST["isi"];
    $tipe = $_POST["tipe"];
    include "koneksi.php";
    if ($_FILES['gambar']['tmp_name']) {
        $temp = $_FILES['gambar']['tmp_name'];
        $name = rand(0,9999).$_FILES['gambar']['name'];
        $folder = "img/";

            $query_foto = mysqli_query($conn, "SELECT * FROM berita where id_berita = '".$_POST['id_berita']."'");
            $data_foto = mysqli_fetch_array($query_foto);
            unlink('img/'.$data_foto['gambar']);
            
            move_uploaded_file($temp, $folder . $name);
            $input = mysqli_query($conn, "UPDATE berita SET 
            judul='".$nama_buku."', isi='".$pengarang."', gambar='".$name."', tipe='".$tipe."'
            where id_berita='".$id_buku."'");

            if ($input) {
                echo "<script>alert('Berhasil');location.href='berita.php?id=0';</script>";
            }
            else {
                echo "<script>alert('Gagal');location.href='berita.php?id=0';</script>";
            }
    }
    else{
        $input = mysqli_query($conn, "UPDATE berita SET judul='".$nama_buku."', isi='".$pengarang."', tipe='".$tipe."' where id_berita='".$id_buku."'");

        if ($input) {
            echo "<script>alert('Berhasil');location.href='berita.php?id=0';</script>";
        }
        else {
            echo "<script>alert('Gagal');location.href='berita.php?id=0';</script>";
        }
    }
    
?>