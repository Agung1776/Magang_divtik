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
    <h1 align="center"><b>Depoharkan.</b></h1>
</div>
        <center><img src="./img/depoharkan.jpg" alt="" style="margin-top:10px;"></center>
    <div class="isi">            
                
        <ol >            
                <h4 align="center"> Depoharkan bertugas menyelenggarakan fungsi<br>
                penerimaan, inventarisasi, distribusi materiil,
                pemeliharaan, dan perbaikan peralatan komlek, komputer,
                dan sarpras informatika.<br><br>  </h4>          
            <li>  
                Subbaggudang. <br><br>
                Subbaggudang, bertugas melaksanakan fungsi
                inventarisasi, penerimaan, dan pendistribusian materiil
                komlek, komputer, dan informatika.<br><br>
            </li>
            <br>
            <li>
                Subbagharkan. <br><br>
                Subbagharkan, bertugas melaksanakan fungsi 
                pemeliharaan dan perbaikan peralatan komlek,
                komputer, dan informatika. <br><br>
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