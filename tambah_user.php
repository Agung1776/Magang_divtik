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
<h2 align="center">Tambah User.</h2>
    <form action="proses_simpan_user.php" method="POST">
        Nama User:
        <input type="text"  name="nama_user" class="form-control" required> <br>
        Role:
        <select name="role" id="role">
            <option value='user'>User</option>
            <option value='admin'>Admin</option>
        </select> <br>
        Username:
        <input type="text" name="username" class="form-control" required> <br>
        Password:
        <input type="text" name="password" class="form-control" required> <br>
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