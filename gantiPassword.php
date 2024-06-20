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
                <form method="POST" action="prosesPass.php">
                    <input type="hidden" name="id_user" value="<?=$data_user['id_user']?>">
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="text" class="form-control" name="password" placeholder="Masukkan password baru." required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
include "footer.php"
?>
