<?php
    include "header.php";
    include "koneksi.php";
    $query_event = mysqli_query($conn, "select * from event where id_event='".$_GET['id_event']."'");
    $data_event = mysqli_fetch_array($query_event);
?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Edit Event</h1>
            <div class="card-body">
                <form method="POST" action="prosesEvent.php" enctype="multipart/form-data">
                    <input type="hidden" name="id_event" value="<?=$data_event['id_event']?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?=$data_event['nama']?>" placeholder="Masukkan nama event" required>
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea class="form-control" name="isi" row="3" placeholder="Masukkan isi" required><?=$data_event['isi']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tgl" value="<?=$data_event['tgl']?>" placeholder="Masukkan tgl event" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">gambar</label>
                        <img src="./img/<?=$data_event['gambar']?>" width="100"/></br>
                        <input type="file" class="form-control" name="gambar" value="<?=$data_event['gambar']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
include "footer.php"
?>
