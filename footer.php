<!-- </div> -->
<style>
    .footer{
        width:100%;
        background-color:black;
        color: white;
        Height:500px;
        margin-top:100px;
        padding:100px;
    }
    .gmbr{
        margin-left:185px;
    }
    .left{
        width:500px;
        margin-left:200px;
    }
    .right{
        margin-top:-175px;
        margin-left:1000px
    }
    .saran{
        
        width: 350px;
        height: 150px;
        border-radius: 5px;
    }
    .kirim{
        border-radius: 5px;
        width: 350px;

    }
</style>
<div class="footer">
    
    <div class="left">
    <div class="gmbr">
    <img src="./img/lambang.jpeg" alt="" style="width:125px; height:125px;">
    </div>
    <h5 align="center">Divisi TIK</h5>
    <h5>Tentang kami</h5>
        <h6>Nomor Telepon: (Masukan nomor telepon)  <br>
            <br>
            Email: MasukanEmail@gmail.com <br> 
        </h6>
    </div>
    <?php
        if($_SESSION['status_login']==false){
    ?>
    <div class="right">
    <h1>Saran:</h1>
    <form action="tambah_saran.php" method="POST">
        <textarea name="saran" class="saran"></textarea> <br>
        <input type="submit" name="simpan" value="Kirim" class="kirim">
    </form>
    </div>
    <?php
        }
    ?>
</div>
</body>
</html>