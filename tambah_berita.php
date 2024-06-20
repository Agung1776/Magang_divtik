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
<h2 align="center">Tambah Berita</h2>
    <form action="proses_simpan_berita.php" method="POST" enctype="multipart/form-data">
        Judul:
        <input type="text" required name="judul" class="form-control"> <br>
        Isi:
        <textarea name="isi" class="form-control"></textarea><br>
        <div class="mb-3">
                        <label for="tipe" class="form-label">Tipe Gambar</label>
                        <select name="tipe" id="tipe" value="<?=$data_berita['tipe']?>">
                            <option value="<?=$data_berita['tipe']?>">Pilih tipe</option>
                            <option value='video'>Video</option>
                            <option value='gambar'>Gambar</option>
                        </select> <br>
                    </div>
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