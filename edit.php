<?php
    include "header.php";
    include "koneksi.php";
    $query_berita = mysqli_query($conn, "select * from berita where id_berita='".$_GET['id_berita']."'");
    $data_berita = mysqli_fetch_array($query_berita);
?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Edit Berita</h1>
            <div class="card-body">
                <form method="POST" action="edit_berita.php" enctype="multipart/form-data">
                    <input type="hidden" name="id_berita" value="<?=$data_berita['id_berita']?>">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?=$data_berita['judul']?>" placeholder="Masukkan Judul berita" required>
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea class="form-control" name="isi" row="3" placeholder="Masukkan isi" required><?=$data_berita['isi']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tipe" class="form-label">Tipe Gambar</label>
                        <select name="tipe" id="tipe" value="<?=$data_berita['tipe']?>">
                            <option value="<?=$data_berita['tipe']?>">Pilih tipe</option>
                            <option value='video'>Video</option>
                            <option value='gambar'>Gambar</option>
                        </select> <br>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">gambar</label>
                        <img src="./img/<?=$data_berita['gambar']?>" width="100"/></br>
                        <input type="file" class="form-control" name="gambar" value="<?=$data_berita['gambar']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
include "footer.php"
?>
