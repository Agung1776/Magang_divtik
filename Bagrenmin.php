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
    <h1 align="center"><b>Bagrenmin.</b></h1>
</div>
    <div class="isi">             
            <ol >            
                <h4 align="center"> Bagrenmin bertugas menyusun perencanaan
                organisasi, manajemen logistik, personalia, kinerja, 
                serta mengelola dan melaksanakan pelayanan
                ketatausahaan dan urusan dalam di lingkungan
                Div TIK Polri.<br><br>  </h4>          
            <li>  
                Subbagren. <br><br>
                Subbagren bertugas
                menyusun dan menyiapkan perencanaan
                program dan anggaran Div TIK Polri
                termasuk analisis dan evaluasi
                pelaksanaannya.<br><br>
            </li>
            <br>
            <li>
                Subbagsumda. <br><br>
                Subbagsumda bertugas
                menyelenggarakan administrasi dan
                perawatan personel serta materiil logistik
                di lingkungan Div TIK Polri.<br><br>
            </li>
            <br>
            <li>
                Subbagbinfung. <br><br>
                Subbagbinfung bertugas menyelenggarakan
                fungsi pembinaan sistem dan metode Div TIK
                Polri.<br><br>
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