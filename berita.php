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
    .berita{
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
    .center {
    text-align: center;
    margin-top: 300px;
    }

    .pagination {
    display: inline-block;
    }

    .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 0 4px;
    }

    .pagination a:hover:not(.active) {background-color: #ddd;}
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
<h2 align="center">Daftar berita.</h2>
<form method="GET" action="berita.php">
<input type="hidden" name="id" value="0">
<input type="text" name= cari class="form-control" style="width:400px;" placeholder="Cari menggunakan Judul." value="<?=$_GET['cari']?>">
<button type="submit" class="btn btn-primary" style="margin-top:-38px;">Cari</button>
</form>
<?php
error_reporting(E_ERROR | E_PARSE);
if($_SESSION['status_login']==true){
?>
<a href="tambah_berita.php" class="btn btn-primary">Tambah</a>
<?php
}
?>
</div>
<div class="row">
    <?php   
    include "koneksi.php";
        if($_GET['cari']==null){
        $qry_berita=mysqli_query($conn, "select * from berita where judul LIKE '%".$_GET['id']."%' ORDER by tgl DESC LIMIT 5");
        }
        if($_GET['cari']!=null){
            $qry_berita=mysqli_query($conn, "select * from berita where judul LIKE '%".$_GET['cari']."%' ORDER by tgl DESC LIMIT 5 OR ORDER by tgl DESC LIMIT 5");
        }
        else{
            $qry_berita=mysqli_query($conn, "select * from berita ORDER by tgl DESC LIMIT 5 OFFSET ".$_GET['id']."");
        }
 
    while($dt_berita=mysqli_fetch_array($qry_berita)){
        ?>
        <a class="nv" href="lihat_berita.php?id_berita=<?=$dt_berita['id_berita']?>"><div class="col-md-9">
            <div class="berita" >
                <?php
                if($dt_berita['tipe']=="gambar"){
                ?>
                <center><img src="./img/<?=$dt_berita['gambar']?>"class="gambar"></center>
                <?php
                }
                ?>
                <?php
                if($dt_berita['tipe']=="video"){
                ?>
                <center><video width="320" height="240" controls>
                <source src="./img/<?=$dt_berita['gambar']?>">
                </video></center>
                <?php
                }
                ?>
                <div class="card-body">
                    <h5 class="card-title"><?=$dt_berita['judul']?></h5>
                    <h6 class="card-text">Oleh: <?=($dt_berita['pembuat'])?><h6>
                    <h6 class="card-text"><?=($dt_berita['tgl'])?><h6>
            <?php
                error_reporting(E_ERROR | E_PARSE);
                if($_SESSION['status_login']==true){
            ?>
                <a href="hapus.php?id_berita=<?=$dt_berita['id_berita']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                <a href="edit.php?id_berita=<?=$dt_berita['id_berita']?>" class="btn btn-success">Edit</a>
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
<div class="center">
<div class="pagination">
  <a href="berita.php?id=0">1</a>
  <a href="berita.php?id=5">2</a>
  <a href="berita.php?id=10">3</a>
</div>
</div>
</div>
</body>
</html>
<?php
include "footer.php";
?>