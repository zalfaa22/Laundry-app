<div  style="background-image: url(assets/film-near-photo-video-cameras.jpg);" class="bgpaket">
<?php 
    include "header.php";
?>
<div>
<br><h2 style="font-family: selidon;"><center>Daftar Paket<center></h2><br>
<?php
    if($_SESSION['role'] == "Admin"){
        ?>
        <div style="margin-bottom: 3%;">
            <a href="tampil_paket.php" class="btn btn-primary">Daftar paket</a>
            <a href="tambah_paket.php" class="btn btn-primary">Tambah paket</a>
        </div>
        <?php
    }
?>

<div class="row">
    <?php 
    include "koneksi.php";
    $qry_paket=mysqli_query($conn,"select * from paket");
    ?>

    <?php
        while($dt_paket=mysqli_fetch_array($qry_paket)){
    ?>
        <div class="col-md-3">
            <div class="card" style="margin-bottom: 4%;">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_paket['jenis']?></h5>
                <p class="card-text">IDR <?=substr($dt_paket['harga'], 0,20)?></p>
                <?php
                if($_SESSION['role'] == "Admin"){
                ?>
                <a href="ubah_paket.php?id_paket=<?=$dt_paket['id']?>" class="btn btn-primary">Ubah</a>
                <a href="hapus_paket.php?id_paket=<?=$dt_paket['id']?>" class="btn btn-danger">Hapus</a>
                <?php
                }
                ?>

            <?php

            if($_SESSION['role']=="Kasir"){
                ?>
                    <a href="pilih_paket.php?id_paket=<?=$dt_paket['id']?>" class="btn btn-primary">Pilih</a>
                <?php
            }
            ?>
                
                
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</div>
<?php 
    include "footer.php";
?>
</div>