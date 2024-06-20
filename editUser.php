<?php
    include "header.php";
    include "koneksi.php";
    $query_user = mysqli_query($conn, "select * from user where id_user='".$_GET['id_user']."'");
    $data_user = mysqli_fetch_array($query_user);
?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Edit User</h1>
            <div class="card-body">
                <form method="POST" action="prosesUser.php">
                    <input type="hidden" name="id_user" value="<?=$data_user['id_user']?>">
                    <div class="mb-3">
                        <label for="nama_user" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_user" value="<?=$data_user['nama_user']?>" placeholder="Masukkan nama user" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">role</label>
                        <select name="role" id="role" value="<?=$data_user['role']?>">
                            <option value="<?=$data_user['role']?>">Pilih role</option>
                            <option value='user'>User</option>
                            <option value='admin'>Admin</option>
                            </select> <br>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?=$data_user['username']?>" placeholder="Masukkan username" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
include "footer.php"
?>
