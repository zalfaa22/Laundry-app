<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Paket</h3>
    <form action="proses_tambah_paket.php" method="post" enctype="multipart/form-data">
        Jenis Paket :
        <input type="text" name="jenis" value="" class="form-control">
        Harga : 
        <input type="text" name="harga" value="" class="form-control">
        <input type="submit" name="Simpan" value="Tambah paket" class="btn btn-primary">
        <a href="tampil_paket.php" class="btn btn-primary">Kembali</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>