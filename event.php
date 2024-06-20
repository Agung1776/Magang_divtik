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
    .event{
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
        min-height:500px;
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
</style>
<div class="poto">
<img src="./img/foto1.jpeg" style="width:100%; height:900px;">
</div>
<div class="hitamkan">
</div>
</head>
<body>
<div class="bg">
<div class="atas">
<h2 align="center">Daftar Event.</h2>
<?php
error_reporting(E_ERROR | E_PARSE);
if($_SESSION['status_login']==true){
?>
<a href="tambah_event.php" class="btn btn-primary">Tambah</a>
<?php
}
?>
</div>
<div class="row">
    <?php
    include "koneksi.php";
    $qry_event=mysqli_query($conn, "select * from event");
    while($dt_event=mysqli_fetch_array($qry_event)){
        ?>
        <a class="nv" href="lihat_event.php?id_event=<?=$dt_event['id_event']?>"><div class="col-md-9">
            <div class="event" >
                <center><img src="./img/<?=$dt_event['gambar']?>"class="gambar"></center>
                <div class="card-body">
                    <h5 class="card-title"><?=$dt_event['nama']?></h5>
                    <h6 class="card-text">Tanggal: <?=($dt_event['tgl'])?><h6>
                    <h6 class="card-text"><?=($dt_event['isi'])?><h6>
            <?php
                error_reporting(E_ERROR | E_PARSE);
                if($_SESSION['status_login']==true){
            ?>
                <a href="hapusEvent.php?id_event=<?=$dt_event['id_event']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                <a href="editEvent.php?id_event=<?=$dt_event['id_event']?>" class="btn btn-success">Edit</a>
            <?php
            }
            ?>  
                </div>
            </div>
        </div>
        </a>
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