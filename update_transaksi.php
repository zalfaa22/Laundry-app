<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body{
      background-color: #ADD8E6;
      margin-top: 60px;
      }
  </style>
</head>
<body>
<?php
    include "koneksi.php";
    $qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
    $dt_transaksi=mysqli_fetch_array($qry_get_transaksi);
?>
<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white">Update Transaksi</div>
    <div class="card-body">
    <form action="proses_update_transaksi.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_transaksi" value= "<?=$dt_transaksi['id_transaksi']?>">
        <div class="form-group">
          <label>Status</label>
          <?php 
          $arr_transaksi_status=array('baru'=>'baru','proses'=>'proses','selesai'=>'selesai','diambil'=>'diambil');
          ?>
          <select name="status" class="form-control">
              <option></option>
              <?php foreach ($arr_transaksi_status as $key_transaksi => $val_transaksi):
                  if($key_transaksi=$dt_transaksi['status']){
                      $selek="selected";
                  } else {
                      $selek="";
                  }
              ?>
              <option value="<?=$key_transaksi?>" <?=$selek?>><?=$val_transaksi?></option>
              <?php endforeach ?>
          </select>
        </div>

        <div class="form-group">
        <label>Pembayaran</label>
          <?php 
          $arr_transaksi=array('belum dibayar'=>'belum dibayar','dibayar'=>'dibayar');
          ?>
          <select name="pembayaran" class="form-control">
              <option></option>
                <?php foreach ($arr_transaksi as $key_transaksi => $val_transaksi):
                    if($key_transaksi==$dt_transaksi['status']){
                        $selek="selected";
                    } else {
                        $selek="";
                    }
                ?>
                <option value="<?=$key_transaksi?>" <?=$selek?>><?=$val_transaksi?></option>
                <?php endforeach ?>

              <?php 
              if($arr_transaksi_status['baru']||$arr_transaksi_status['proses']||$arr_transaksi_status['selesai']){
                $arr_transaksi['belum dibayar'];
                // foreach ($arr_transaksi as $key_transaksi => $val_transaksi):
                //   if($key_transaksi==$dt_transaksi['pembayaran']){
                //       $selek="selected";
                //   } else {
                //       $selek="";
                //   }
                  ?>
                  <?php
                  // endforeach;
              }elseif($arr_transaksi_status['diambil']){
                $arr_transaksi['dibayar'];
                // foreach ($arr_transaksi as $key_transaksi => $val_transaksi):
                //   if($key_transaksi==$dt_transaksi['pembayaran']){
                //       $selek="selected";
                //   } else {
                //       $selek="";
                //   
                ?>
                <option value="<?=$key_transaksi?>" <?=$selek?>><?=$val_transaksi?></option>
                <?php 
                // endforeach;
              }
              ?>
          </select>
        </div>
        <a href="histori_transaksi.php" class="btn btn-danger" type="submit" value="KEMBALI">Kembali</a>
        <input type="submit" name="simpan" value="Update" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
</body>
</html>