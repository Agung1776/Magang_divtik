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
        .profil{
            width: 100%;
            background-color:black;
            color:white;
            padding:25px;
        }
        .isi{
            align:center;
            padding:100px;
            margin-top:-50px;
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
<div class="profil">
    <h1 align="center"><b>Bagsituspol.</b></h1>
</div>
    <div class="isi">            
        <ol>            
            <h4 align="center"> 
                Bagsituspol bertugas menyelenggarakan
                fungsi pembinaan situs utama (official
                website) dan portal Polri, mengelola domain
                Polri, memberikan bantuan teknis bidang
                situs serta menyelenggarakan sistem
                pengumpulan dan analisis data kepolisian.<br><br>  
            </h4>          
            <li>  
                Subbaginternet. <br><br>
                Subbaginternet bertugas
                membina, mengoperasionalkan dan
                mengendalikan program aplikasi website
                polri dan aplikasi untuk perangkat
                bergerak (Mobile Device) yang dijalankan
                dijaringan internet serta mengelola
                domain polri dan ruang NMC.<br><br>
            </li>
            <br>
            <li>
                Subbagintranet. <br><br>
                Subbagintranet bertugas membina
                mengoperasionalkan dan mengendalikan
                program aplikasi email Polri, portal Polri
                dan aplikasi basis data yang dijalankan
                dijaringan intranet Polri, pelayanan
                kebutuhan user ID dan user grup
                intranet dilingkungan Polri dan
                melaksanakan sistem pengumpulan,
                analisis data dan informasi bidang
                pembinaan dan operasional Polri.<br><br>
            </li>
            <br>
        </ol>    
    </div>
</div>
</body>
</html>
<?php
include "footer.php";
?>