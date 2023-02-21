<?php 
include 'koneksi.php';
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
 
if(mysqli_query($conn, "INSERT INTO paket VALUES(NULL,'$jenis','$harga')")) {
	echo "<script>alert('Sukses menambahkan paket');location.href='tambah_paket.php';</script>";
}

?>