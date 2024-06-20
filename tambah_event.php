<?php
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.mi
n.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title>Daftar</title>
</head>
<body>
<div class="container bg-light rounded" style="margin-top:10px">
<h2 align="center">Buat Event</h2>
    <form action="proses_simpan_event.php" method="POST" enctype="multipart/form-data">
        Nama Event:
        <input type="text" required name="nama" class="form-control"> <br>
        Isi:
        <textarea name="isi" class="form-control"></textarea><br>
        Tanggal:
        <input type="date" required name="tgl" class="form-control"> <br>
        Gambar:
        <input type="file" required name="gambar" class="form-control"> <br>
        <input type="submit" name="simpan" value="SIMPAN">
    </form>
    </div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bund
le.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>
<?php
include "footer.php";
?>