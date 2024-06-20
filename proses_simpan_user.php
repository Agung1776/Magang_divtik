<?php
if($_POST){
    $nama_user=$_POST['nama_user'];
    $role=$_POST['role'];
    $username=$_POST['username'];
    $password=$_POST['password'];
     include "koneksi.php";
         $simpan=mysqli_query($conn, "insert into user value('', '$nama_user', '$role', '$username', '".md5($password)."')");
         mysqli_error($conn);
         if($simpan){
             echo'<script>alert("Sukses");location.href="user.php"</script>';
         }
         else{
         }
    }

?>