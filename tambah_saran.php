<?php
if($_POST){
    $saran=$_POST['saran'];
     include "koneksi.php";
         $simpan=mysqli_query($conn, "insert into saran value('', '$saran')");
         if($simpan){
             echo'<script>alert("Sukses");location.href="home.php"</script>';
         }
         else{
             echo '<script>alert("Gagal");location.href="home.php"</script>';
         }
    }

?>