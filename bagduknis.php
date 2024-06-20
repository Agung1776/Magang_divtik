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
    <h1 align="center"><b>Bagduknis.</b></h1>
</div>
    <div class="isi">            
        <ol>            
            <h4 align="center"> 
                Bagduknis bertugas membina dan
                mengendalikan sistem dan teknologi
                informasi di lingkungan Polri, memberi
                dukungan teknis kepada Satker Mabes dan
                satuan kewilayahan, menyelenggarakan
                keamanan sistem dan tata kelola sarana
                prasarana teknologi informasi serta
                menyelenggarakan kerja sama dibidang
                teknologi informasi.<br><br>
            </h4>          
            <li>  
                Subbagkamsis. <br><br>
                Subbagkamsis bertugas mengelola
                sistem keamanan jaringan termasuk
                manajemen jaringan, penggunaan
                internet protocol (IP) publik dan
                bandwith, memberi dukungan teknis
                bidang teknologi informasi dan sistem
                keamanan jaringan kepada Satker di
                tingkat Mabes Polri maupun satuan
                kewilayahan.<br><br>
            </li>
            <br>
            <li>
                Subbagsarpras. <br><br>
                Subbagsarpras bertugas mengelola
                dan mengembangkan pusat data (data
                center), Pusat pemulihan aplikasi dan
                data dari bencana (disaster recovery
                center=DRC), Pusat Operasi jaringan
                (Network Operation Center=NOC) dan
                gudang data (data warehouse) Polri,
                menyediakan jaringan layanan akses
                internet dan intranet di jajaran Polri
                serta memelihara perangkat keras dan
                jaringan LAN.<br><br>
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