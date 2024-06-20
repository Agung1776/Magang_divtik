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
    <img src="./img/karotekkom.jpeg" style="width:100%; height:900px;">
    </div>
    <div class="hitamkan">
    </div>
</head>
<body>
<div class="bg">
<div class="profil">
    <h1 align="center"><b>Rotekkom</b></h1>
</div>
        <center><img src="./img/rotekkom.jpg" alt="" style="margin-top:10px;"></center>
    <div class="isi">
        <ol>            
                <h4>
                Rotekkom bertugas mengkaji dan mengembangkan
                sistem dan metode komunikasi elektronika,
                memberikan bantuan dan jaringan komunikasi,
                mendukung operasi kepolisian, menyelenggarakan
                invetarisasi, distribusi dan penghapusan materiil
                komunikasi.</h4> <br><br>        
            <li>  
                Bagjiansiskom. <br><br>
                Bagjiansiskom bertugas mengkaji secara
                teknis rencana pembangunan dan
                pengembangan Siskomlek Polri dan
                pembinaan sistem dan metode dengan
                menyiapkan peyusunan petunjuk teknis dan
                pelaksanaan dalam bentuk peraturan
                kepolisian untuk pengoperasian Siskomlek. <br><br>
            </li>
            <br>
            <li>
                Bagopsnalkom. <br><br>
                Bagopsnalkom bertugas menyelenggarakan
                dukungan teknis, personel dan materiil
                komunikasi elektronika dalam operasi
                kepolisian, pengendalian penggunaan
                frekuensi radio Polri, pemetaan infrastruktur
                jaringan komunikasi radio dan telepon,
                pencocokan dan penelitian tagihan jasa
                telekomunikasi, melaksanakan layanan
                sentral komunikasi, serta analisis dan
                evaluasi Siskomlek Polri yang diperbantukan. <br><br>
            </li>
            <br>
            <li>
                Bagduknis. <br><br>
                Bagmatkom bertugas menyelenggarakan
                fungsi inventarisasi, mengevaluasi,
                menyusun rencana distribusi, dan
                penghapusan materiil komunikasi. <br><br>
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