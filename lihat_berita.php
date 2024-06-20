<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <style>
        .profil{
            height:;
            width: 1500px;;
            background-color:white;
            margin-left:10%;
            padding:25px;
        }
        p{
            word-wrap:break-word;
        }
        img{
            max-width:750px;
            max-height:750px;
        }
    </style>
</head>
<body>
<?php
    include "koneksi.php";
    $qry_berita=mysqli_query($conn, "select * from berita where id_berita='".$_GET['id_berita']."'");
    $dt_berita=mysqli_fetch_array($qry_berita)
        ?>
<div class="profil">
<h3 align="right"><?=$dt_berita['tgl']?></h3>
    <h3 align="right">Oleh: <?=$dt_berita['pembuat']?></h3>
    <h1 align="center"><b><?=$dt_berita['judul']?></b></h1> 
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
        <p><?=$dt_berita['isi']?></p>
</div>
</body>
</html>
<?php
include "footer.php";
?>