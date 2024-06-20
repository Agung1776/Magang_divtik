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
            margin-top:50px;
            margin-left:15%;
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
    <h1 align="center"><b>Profil Divisi Teknologi, Informasi dan<br> Komunikasi Kepolisian Republik Indonesia.</b></h1>
</div>
    <div class="isi">
        <ol>
            <li>  
                Melaksanakan pengelolaan dan pengendalian situs
                Polri, email Polri dan aplikasi lainnya serta ruang Pusat
                Manajemen Jaringan (Network Management Center).
            </li>
            <br>
            <li>
                Memberikan petunjuk teknis dalam pembangunan
                dan perawatan aplikasi, website yang dibangun dan
                dikelola oleh Satker di tingkat Mabes Polri dan Satuan
                Kewilayahan.
            </li>
            <br>
            <li>
                Penyediaan nama domain dan subdomain serta
                penempatan (hosting) bagi Satker tingkat Mabes Polri
                maupun satuan kewilayahan yang membutuhkan.
            </li>
            <br>
            <li>
                Melaksanakan pembinaan dan pembangunan
                sistem informasi untuk mengumpulkan, analisis data
                dan informasi bidang pembinaan dan operasional Polri.
            </li>
            <br>
            <li>
                Menyusun dan memelihara kontrol dan
                prosedur untuk melindungi arus informasi di
                seluruh jaringan. <br>
            </li>
            <br>
            <li>
                Mendefinisikan dan membangun proses
                manajemen control keamanan informasi.
            </li>
        </ol>
    </div>
</div>
</body>
</html>
<?php
include "footer.php";
?>