<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <style>
        .profil{
            height:;
            width: 1500px;;
            background-color:white;
            margin-left:10%;
            padding:25px;
        }
        h4{
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
    $qry_event=mysqli_query($conn, "select * from event where id_event='".$_GET['id_event']."'");
    $dt_event=mysqli_fetch_array($qry_event)
        ?>
<div class="profil">   
    <center><img src="./img/<?=$dt_event['gambar']?>"class="gambar"></center>
    <h3 align="center"><?=$dt_event['tgl']?></h3>
    <h2 align="center"><b><?=$dt_event['judul']?></b></h2>
    <h3 align="center"><?=$dt_event['isi']?></h3>
</div>
</body>
</html>
<?php
include "footer.php";
?>