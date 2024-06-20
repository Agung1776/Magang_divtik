<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        .judul{
            height:;
            width: 100%;
            background-color:black;
            color:white;
            padding:25px;
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
<div class="judul">
    <h1 align="center"><b>Visi dan Misi Divisi Teknologi, Informasi dan<br> Komunikasi Kepolisian Republik Indonesia.</b></h1>
</div>
</div>
</body>
</html>
<?php
include "footer.php";
?>