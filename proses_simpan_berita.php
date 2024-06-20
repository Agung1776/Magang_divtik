<?php
session_start();
if($_POST){
    $judul=$_POST['judul'];
    $isi=$_POST['isi'];
    $tipe=$_POST['tipe'];
    $file_name=$_FILES['gambar']['name'];
    $file_tmp=$_FILES['gambar']['tmp_name'];
    $upload=move_uploaded_file($file_tmp, 'img/'.$file_name);
    if($upload==true){
        include "koneksi.php";
        $simpan=mysqli_query($conn, "INSERT INTO `berita`(`id_berita`, `judul`, `isi`, `pembuat`, `tipe`, `gambar`, `tgl`) VALUES ('', '$judul', '$isi', '".$_SESSION['nama_user']."', '$tipe', '$file_name','".date('Y-m-d-G-i-s')."')");
        mysqli_error($conn);
        if($simpan){
             echo'<script>alert("Sukses");location.href="berita.php?id=0"</script>';
             
        }
        else{
             echo '<script>alert("gagal");location.href="tambah_berita.php?"</script>';
        }
    }
    else {
         echo '<script>alert("Gagal upload");location.href="tambah_berita.php?"</script>';
    }
}
?>