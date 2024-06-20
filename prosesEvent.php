<?php
    $id_buku = $_POST["id_event"];
    $nama_buku = $_POST["nama"];
    $pengarang = $_POST["isi"];
    $tgl = $_POST["tgl"];

    include "koneksi.php";
    if ($_FILES['gambar']['tmp_name']) {
        $temp = $_FILES['gambar']['tmp_name'];
        $type = $_FILES['gambar']['type'];
        $size = $_FILES['gambar']['size'];
        $name = rand(0,9999).$_FILES['gambar']['name'];
        $folder = "img/";

        if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png'))
        {
            $query_foto = mysqli_query($conn, "SELECT * FROM event where id_event = '".$_POST['id_event']."'");
            $data_foto = mysqli_fetch_array($query_foto);
            unlink('img/'.$data_foto['gambar']);
            
            move_uploaded_file($temp, $folder . $name);
            $input = mysqli_query($conn, "UPDATE event SET 
            nama='".$nama_buku."', isi='".$pengarang."', gambar='".$name."',tgl='".$tgl."'
            where id_event='".$id_buku."'");

            if ($input) {
                echo "<script>alert('Berhasil');location.href='event.php';</script>";
            }
            else {
                // echo "<script>alert('Gagal');location.href='event.php';</script>";
            }
        }
    }
    else{
        $input = mysqli_query($conn, "UPDATE event SET nama='".$nama_buku."', isi='".$pengarang."' where id_event='".$id_buku."'");

        if ($input) {
            echo "<script>alert('Berhasil');location.href='event.php';</script>";
        }
        else {
            // echo "<script>alert('Gagal');location.href='event.php';</script>";
        }
    }
    
?>