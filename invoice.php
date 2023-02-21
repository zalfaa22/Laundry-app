<!DOCTYPE html>
<html>

<head>
  <title>Cetak Laporan</title>
 <link rel="stylesheet" type="text/css" href="invoice.css">
</head>

<body>
  <center><h2 class="align-center">LAPORAN TRANSAKSI LAUNDRY</h2></center>
  <center><h3>CLEAN LAUNDRY</h3></center>
  <center><p class="header">Email: cleanlaundry@gmail.com</p></center>
  <br>
  <hr style="width:100%" , size="3" , color=black>
  <hr>

  <h4>Customers :</h4>
  <table>
    <?php
    include "koneksi.php";
    $sql = 'select * from transaksi join detail_transaksi on detail_transaksi.id_transaksi=transaksi.id_transaksi join member on member.id_member = transaksi.id_member where transaksi.id_transaksi = '  . $_GET['id_transaksi'] ;
    $result = mysqli_query($conn, $sql);
    ?>
    <?php if ($data_detail_transaksi = mysqli_fetch_assoc($result)) { ?>

      <tbody>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">No Transaksi</td>
          <td class="fw-bold fs-6"><?= $data_detail_transaksi['id_transaksi'] ?></td>

        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Nama Lengkap</td>
          <td class="fw-bold fs-6"><?= $data_detail_transaksi['nama_member'] ?></td>
        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Jenis Kelamin</td>
          <td class="fw-bold fs-6"><?= $data_detail_transaksi['jenis_kelamin'] ?></td>
        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Telepon</td>
          <td class="fw-bold fs-6"><?= $data_detail_transaksi['telp'] ?></td>
        </tr>
        <tr>
        <?php 
                    $qry_detail=mysqli_query($conn,"select * from detail_transaksi where detail_transaksi.id_transaksi = '".$_GET['id_transaksi']."'");
                    $jumlah = 0;
                    while($dt_detail=mysqli_fetch_array($qry_detail)){
                        ?>
                        <tr>              
                            <?php
                                $jumlah += $dt_detail['qty'];
                            ?> 
                        </tr>
                        <?php 
                    }?>
                    <tr><td>Jumlah</td><td colspan="2"><?=$jumlah?>Kg</td></tr>
        </tr>
        <?php 
                    $qry_detail=mysqli_query($conn,"select * from detail_transaksi join paket on detail_transaksi.id_paket = paket.id_paket where detail_transaksi.id_transaksi = '".$_GET['id_transaksi']."'");
                    $total = 0;
                    while($dt_detail=mysqli_fetch_array($qry_detail)){
                        ?>
                        <tr>              
                            <?php
                                $total += $dt_detail['harga'] * $dt_detail['qty'];
                            ?> 
                        </tr>
                        <?php 
                    }
                    ?>
                    <tr><td>Total Pembayaran</td><td colspan="2"><?=$total?></td></tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Status Pembayaran</td>
          <td class="fw-bold fs-6"><?= $data_detail_transaksi['pembayaran'] ?></td>

        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Status Order</td>
          <td class="fw-bold fs-6"><?= $data_detail_transaksi['status'] ?></td>
        </tr>
        <tr>
          <td class="col-lg-4 fw-bold text-muted">Tanggal Diambil</td>
          <td class="fw-bold fs-6"><?= $data_detail_transaksi['batas_waktu'] ?></td>
        </tr>

      <?php
    }
      ?>
      </tbody>
  </table>

  <br><br>
  <div class="date">
    <?php
    echo date('l, d-m-Y');
    ?><br>
  </div>
  <br><br>

  <h4>Keterangan :</h4>
  <ol style="text-align: justify">
    <li>Pekerjaan dilakukan sesuai jam kerja yaitu hari Senin – Sabtu dari pukul 07:00 – 19:00. Diluar jam tersebut, maka pekerjaan tidak dilakukan. Hari minggu tidak dihitung sebagai hari layanan.</li>
    <li>Jumlah berat yang ditimbang dan dijadikan nota adalah jumlah berat yang diterima pada saat diterima baik basah maupun kering</li>
    <li>Bukti tagihan yang sah di dalam transaksi kami adalah melalui nota digital atau nota fisik</li>
    <li>Kami tidak bertanggung jawab apabila terjadi kehilangan / kerusakan pada laundry bersih yang tidak diambil selama 1 bulan di workshop kami.</li>
    <li>Kami menggunakan bahan detergent dan parfum dengan standar laundry tanpa mengetahui jenis alergi yang anda miliki. Segala jenis penggunaan sabun atau parfum milik pribadi tidak diperkenankan untuk digunakan di laundry kami dan apabila terjadi reaksi alergi pada kulit bukan menjadi tanggung jawab FastLaundry</li>
    <li>Pengaduan harap disampaikan secara tertulis di ke email fastlaundry@gmail.com dengan melampirkan nomor nota, video unboxing serta keluhan yang dialami.</li>
  </ol>
 <!-- <script>
    window.print();
  </script> -->
</body>

</html>