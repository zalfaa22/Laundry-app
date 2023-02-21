<?php
if($_POST){
    $id_transaksi=$_POST['id_transaksi'];
    $status=$_POST['status'];
    $pembayaran= $_POST['pembayaran'];

    if( $status=$_POST['status'] == "dibayar"){
        $tgl_bayar=date('Y-m-d');
    }

    
    if(empty($status)){
        echo "<script>alert('status tidak boleh kosong');location.href='update_transaksi.php?id_transaksi=".$id_transaksi."';</script>";
    } 
    elseif(empty($pembayaran)){
        echo "<script>alert('pembayaran tidak boleh kosong');location.href='update_transaksi.php?id_transaksi=".$id_transaksi."';</script>";
    }
    else {
        include "koneksi.php";

            $update=mysqli_query($conn,"update transaksi set status='".$status."', pembayaran='".$pembayaran."', tgl_bayar='".$tgl_bayar."' where id_transaksi = '".$id_transaksi."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update paket');location.href='histori_transaksi.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket');location.href='update_transaksi.php?id_transaksi=".$id_transaksi."';</script>";
            }
        }
}

?>
