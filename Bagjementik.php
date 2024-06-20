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
    <h1 align="center"><b>Bagjemen TIK.</b></h1>
</div>
        <center><img src="./img/bagjementik.jpg" alt="" style="margin-top:10px;"></center>
    <div class="isi">            
        <ol>            
                <h4 align="center"> Bagjemen TIK bertugas merencanakan dan menyusun
                rencana induk TIK Polri, sistem pengamanan
                infrastruktur TIK Polri mengelola risiko, dan
                melakukan audit terhadap kinerja TIK Polri serta
                monitoring dan evaluasi sistem TIK Polri..<br><br>  </h4>          
            <li>  
                Subbagrenpamsis. <br><br>
                Subbagrenpamsis bertugas menyususn
                rencana induk TIK Polri dan kebijakan serta
                prosedur keamanan informasi dan komunikasi,
                mensosialisasikan peraturan dan regulasi tentang
                keamanan informasi dan komunikasi.<br><br>
            </li>
            <br>
            <li>
                Subbagmonev. <br><br>
                Subbagmonev, yang bertugas menyelenggarakan
                monitoring dan evaluasi terhadap infrastruktur,
                aplikasi dan keamanan sistem TIK yang telah
                tergelar di Polri.<br><br>
            </li>
            <br>
            <li>
                Subbagstandardisasi. <br><br>
                Subbagstandardisasi bertugas
                menyelenggarakan tata kelola risiko dan
                melakukan audit terhadap kinerja TIK Polri.<br><br>
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