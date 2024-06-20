<?php
session_start();
error_reporting(0);
if($_SESSION['status_login']==true){
?>
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
    .saran{
        background-color: #DCDCDC;
        min-width: 1000px;
        min-height: 225px;

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
<h2 align="center">Daftar Saran.</h2>
</div>
<div class="row">
    <?php   
    include "koneksi.php";
    $qry_saran=mysqli_query($conn, "select * from saran");

    while($dt_saran=mysqli_fetch_array($qry_saran)){
        ?>
            <center><div class="saran" >
                <div class="card-body">
                    <h5 class="card-title">Saran: <?=$dt_saran['saran']?></h5>
                </div>
                <a href="hapus_saran.php?id_saran=<?=$dt_saran['id_saran']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                </div></center>
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
}
if($_SESSION['status_login']==false){
    echo '<script>alert("Anda tidak memiliki akses.");location.href="home.php"</script>';
}
?>
