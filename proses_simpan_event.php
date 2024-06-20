<?php
session_start();
if($_POST){
    $nama=$_POST['nama'];
    $isi=$_POST['isi'];
    $tgl=$_POST['tgl'];
    $file_name=$_FILES['gambar']['name'];
    $file_tmp=$_FILES['gambar']['tmp_name'];
    $upload=move_uploaded_file($file_tmp, 'img/'.$file_name);
    if($upload==true){
        include "koneksi.php";
        $simpan=mysqli_query($conn, "insert into event value('', '$nama', '$isi', '$tgl', '$file_name')");
        mysqli_error($conn);
        if($simpan){
             echo'<script>alert("Sukses");location.href="event.php"</script>';
        }
        else{
             echo '<script>alert("Gagal");location.href="tambah_event.php"</script>';
        }
    }
    else {
     //     echo '<script>alert("Gagal upload");location.href="tambah_event.php"</script>';
    }
}
?>