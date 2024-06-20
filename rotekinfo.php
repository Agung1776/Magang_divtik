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
    <img src="./img/karotekinfof.jpg" style="width:100%; height:900px;">
    </div>
    <div class="hitamkan">
    </div>
</head>
<body>
<div class="bg">
<div class="profil">
    <h1 align="center"><b>Rotekinfo</b></h1>
</div>
        <center><img src="./img/rotekinfo.jpg" alt="" style="margin-top:10px;"></center>
    <div class="isi">
        <ol>            
                <h4> Rotekinfo bertugas menyelenggarakan fungsi 
                pembinaan, pengendalian dan pengkajian serta 
                pemeliharaan Sistem dan Teknologi Informasi
                Kepolisian (Sistekinfopol), yang meliputi sistem
                pengumpulan dan analisis data, piranti lunak,
                aplikasi, situs, sarana prasarana dan keamanan
                sistem.</h4> <br><br>          
            <li>  
                Bagjiansis. <br><br>
                Bagjiansis bertugas mengkaji dan
                mengembangkan program aplikasi, sistem
                dan prosedur gudang data (datawarehouse). <br><br>
            </li>
            <br>
            <li>
                Bagsituspol. <br><br>
                Bagsituspol bertugas menyelenggarakan
                fungsi pembinaan situs utama (official website)
                dan portal Polri, mengelola domain
                Polri, memberikan bantuan teknis bidang
                situs serta menyelenggarakan sistem
                pengumpulan dan analisis data kepolisian. <br><br>
            </li>
            <br>
            <li>
                Bagduknis. <br><br>
                Bagduknis bertugas membina dan
                mengendalikan sistem dan teknologi
                informasi di lingkungan Polri, memberi
                dukungan teknis kepada Satker Mabes dan
                satuan kewilayahan, menyelenggarakan
                keamanan sistem dan tata kelola sarana
                prasarana teknologi informasi serta
                menyelenggarakan kerjasama dibidang
                teknologi informasi. <br><br>
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