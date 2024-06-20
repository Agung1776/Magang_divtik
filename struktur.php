<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi</title>
    <style>
        .struktur{
            width: 100%;
            background-color:black;
            color:white;
            padding:25px;
        }
        .gstruktur{
            margin-left:25%;
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
        .bagrenmin{
            margin-left: -6px;
            margin-bottom: -1px;
        }
        .rotekinfo{
            margin-left: -6px;
            margin-bottom: 1px;
        }
        .divtik{
            margin-left: -55px;
            margin-bottom: -1px;
        }
        .depo{
            margin-left: 1px;
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
    <div class="struktur">

    <h1 align="center"><b>Struktur Organisasi</b></h1>
    </div>
    <div class="gstruktur">
    <img src="./img/Struktur Divtik-2.jpg" alt=""><br>
    <div>
    <a href="Bagjementik.php"><img src="./img/Bagjemen2.jpg" alt="" style="margin-top: -1085px;"></a>
    <a href="Bagrenmin.php"><img src="./img/Bagrenmin2.jpg" alt="" style="margin-top: -1084px; margin-left: 40px;"></a>
    <a href="rotekkom.php"><img src="./img/Rotekkom2.jpg" alt="" style="margin-top: -755px; margin-left: -692px;"></a>
    <a href="rotekinfo.php"><img src="./img/Rotekinfo2.jpg" alt="" style="margin-top: -762px; margin-left: 194px;"></a>
    <a href="Depoharkan.php"><img src="./img/Depoharkan2.jpg" alt="" style="margin-top: -301px; margin-left: -313px;"></a>
    <a href="bagjiansiskom.php"><img src="./img/Bagjiansiskom.jpg" alt="" style="margin-top: -493px; margin-left: -456px;"></a>
    <a href="bagopsnalkom.php"><img src="./img/Bagopsnalkom.jpg" alt="" style="margin-top: -493px; margin-left: 2px;"></a>
    <a href="bagmatkom.php"><img src="./img/Bagmatkom.jpg" alt="" style="margin-top: -490px; margin-left: 16px;"></a>
    <a href="bagjiansis.php"><img src="./img/Bagjiansis.jpg" alt="" style="margin-top: -520px; margin-left: 10px;"></a>
    <a href="bagsituspol.php"><img src="./img/Bagsituspol.jpg" alt="" style="margin-top: -524px; margin-left: 3px;"></a>
    <a href="bagduknis.php"><img src="./img/Bagduknis.jpg" alt="" style="margin-top: -526px; margin-left: 1px;"></a>
    <a href="Depoharkan.php"><img src="./img/Deop.jpg" alt="" style="margin-top: -201px; margin-left: -458px;"></a>
    </div>
    </div>

</div>
</body>
</html>
<?php
include "footer.php";
?>