<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <style>
        * {
            margin: 10px;
        }
    </style>
</head>

<body>
    <?php
    include "koneksi.php";
    $qry_get_member = mysqli_query($conn, "select * from member where id_member = '" . $_GET['id_member'] . "'");
    $dt_member = mysqli_fetch_array($qry_get_member);
    ?>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
        <h3>Ubah member</h3>
        <form action="proses_ubah_member.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_member" value="<?= $dt_member['id_member'] ?>">
            Nama :
            <input type="text" name="nama_member" value="<?= $dt_member['nama_member'] ?>" class="form-control">
            Alamat :
            <input type="text" name="alamat" value="<?= $dt_member['alamat'] ?>" class="form-control">
            Jenis Kelamin :
            <?php 
            $arr_gender=array('Laki-laki'=>'Laki-laki','Perempuan'=>'Perempuan');
            ?>
            <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_user['jenis_kelamin']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
            </select>
            Telepon :
            <input type="number" name="tlp" value="<?= $dt_member['tlp'] ?>" class="form-control">
            <input type="submit" name="simpan" value="Ubah member" class="btn btn-dark mt-3">
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>