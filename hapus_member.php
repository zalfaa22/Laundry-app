<?php

$id=$_GET['id_member'];
    if($id){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from member where id_member='".$id."'");
    if($qry_hapus){
        echo "<script>alert('Sukses hapus');location.href='tampil_member.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus');location.href='tampil_member.php';</script>";
}
}
?>