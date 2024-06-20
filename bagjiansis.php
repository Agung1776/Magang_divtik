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
    <h1 align="center"><b>Bagjiansis.</b></h1>
</div>
    <div class="isi">            
        <ol>            
            <h4 align="center"> 
                Bagjiansis bertugas mengkaji dan
                mengembangkan program aplikasi, sistem
                dan prosedur gudang data (datawarehouse).<br><br>  
            </h4>          
            <li>  
                Subbagjianbang. <br><br>
                Subbagjianbang bertugas mengkaji
                kebijakan dan strategi Rotekinfo,
                menyusun rencana pembangunan dan
                pengembangan aplikasi sesuai dengan
                perkembangan kebutuhan serta
                membina untuk mengintegrasikan
                program aplikasi dan perangkat lunak
                (S/W) teknologi informasi yang dimiliki
                Polri.<br><br>
            </li>
            <br>
            <li>
                Subbagsismet. <br><br>
                Subbagsismet bertugas menyusun
                piranti lunak atau peraturan mengenai
                standarisasi program aplikasi dan data
                informasi serta peraturan mengenai
                petunjuk pelaksanaan maupun petunjuk
                teknis dan SOP yang berkaitan dengan
                pengoperasian program aplikasi serta
                memberidukungan/bimbingan dalam
                bidang pembangunan dan pemeliharaan
                teknologi informasi kepada satuan kerja
                di tingkat Mabes Polri maupun satuan
                kewilayahan.<br><br>
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