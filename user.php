<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .nv:hover{
        text-decoration:none;
        color:inherit;
        cursor:auto;
    }
    .nv{
        text-decoration:none;
        color:inherit;
        cursor:auto;
        margin-top:50px;
    }
    .atas{
        background-color:black;
        color:white;
        width:100%;
        padding:10px;
    }
    .user{
        margin-left:500px;


    }
    .gambar{
        max-height:400px;
    }
    .btn-primary{
        float:right;
        margin-top:-30px;
        margin-left:-100px;
        background-color:;
    }
    .poto{
        z-index:0;
        height:500px;
        position: relative;
    }
    .bg{
        width:100%;
        height:100%;
        background-color:white;
        z-index: 1;
        position: relative;
        min-height:400px;
    }
    .hitamkan{
        width:100%;
        height:500px;
        background-color:black;
        z-index: 1;
        position: relative;
        opacity: 0.5;
        margin-top:-500px;

    }
    form{
        width:500px;
    }

</style>
<div class="poto">
<img src="./img/foto.jpeg" style="width:100%; height:900px;">
</div>
<div class="hitamkan">
</div>
</head>
<body>
<div class="bg">
<div class="atas">
<h2 align="center">Daftar User.</h2>
<form method="GET" action="user.php">
<input type="text" name= cari class="form-control" style="width:400px;" placeholder="Cari menggunakan nama." value="<?=$_GET['cari']?>">
<button type="submit" class="btn btn-primary" style="margin-top:-38px;">Cari</button>
</form>
<?php
error_reporting(E_ERROR | E_PARSE);
if($_SESSION['status_login']==true){
?>
<a href="tambah_user.php" class="btn btn-primary">Tambah</a>
<?php
}
?>
</div>
<div class="row">
    <?php   
    include "koneksi.php";
    $qry_user=mysqli_query($conn, "select * from user where nama_user LIKE '%".$_GET['cari']."%' ORDER by nama_user DESC LIMIT 5");

    while($dt_user=mysqli_fetch_array($qry_user)){
        ?>
            <div class="user" >
                <div class="card-body">
                    <h5 class="card-title">Nama: <?=$dt_user['nama_user']?></h5>
                    <h6 class="card-text">Role: <?=($dt_user['role'])?><h6>
                    <h6 class="card-text">Username: <?=($dt_user['username'])?><h6>
            <?php
                error_reporting(E_ERROR | E_PARSE);
                if($_SESSION['status_login']==true){
            ?>
                <a href="hapusUser.php?id_user=<?=$dt_user['id_user']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                <a href="editUser.php?id_user=<?=$dt_user['id_user']?>" class="btn btn-success">Edit</a>
                <a href="gantiPassword.php?id_user=<?=$dt_user['id_user']?>" class="btn btn-secondary">Ganti password</a>
            <?php
            }
            ?>  
                </div>
            </div>
        </div>
        <br>
        <?php
    }
    ?>
</div>
</div>
</body>
</html>
<?php
include "footer.php";
?>