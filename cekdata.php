<?php 
session_start();
    if($_POST){
        $nama_member=$_POST['nama_member'];
        include "koneksi.php";

        $qry_get_cek=mysqli_query($conn,"select * from member where nama_member='".$nama_member."'");
        
        if(mysqli_num_rows($qry_get_cek)>0){
            $dt_cek=mysqli_fetch_array($qry_get_cek);
        if($nama_member == $dt_cek['nama_member']){
            session_start();
            $_SESSION['id_member']=$dt_cek['id_member'];
            $_SESSION['nama_member']=$dt_cek['nama_member'];
            header('location: transaksi.php');
        }
    }else{
        echo "<script>alert('nama member tidak terdafatar');location.href='data.php';</script>";
    }

        
    }
?>
