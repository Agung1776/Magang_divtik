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
    <h1 align="center"><b>Bagopsnalkom.</b></h1>
</div>
    <div class="isi">            
        <ol>            
            <h4 align="center"> 
                Bagopsnalkom bertugas menyelenggarakan
                dukungan teknis, personel dan materiil
                komunikasi elektronika dalam operasi
                kepolisian, pengendalian penggunaan
                frekuensi radio Polri, pemetaan infrastruktur
                jaringan komunikasi radio dan telepon,
                pencocokan dan penelitian tagihan jasa
                telekomunikasi, melaksanakan layanan
                sentral komunikasi, serta analisis dan
                evaluasi Siskomlek Polri yang diperbantukan.<br><br> 
            </h4>          
            <li>  
                Subbagbankom. <br><br>
                Subbagbankom bertugas
                memberikan bantuan dukungan teknis,
                materiil dan personil untuk tugas operasi
                Kepolisian, pelayanan sentral komunikasi
                serta melakukan analisis dan evaluasi
                Siskomlek Polriyangdiperbantukan.<br><br>
            </li>
            <br>
            <li>
                Subbagjarkom. <br><br>
                Subbagjarkom bertugas
                melaksanakan pengaturan frekuensi
                komunikasi radio Polri, pemantauandan
                pemetaan infrastruktur jaringan
                komunikasi radio dan telepon serta
                pencocokan dan penelitian tagihan jasa
                telekomunikasi.<br><br>
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