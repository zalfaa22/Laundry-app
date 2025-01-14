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
    $qry_get_user = mysqli_query($conn, "select * from user where id_user = '" . $_GET['id_user'] . "'");
    $dt_user = mysqli_fetch_array($qry_get_user);
    ?>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
        <h3>Ubah User</h3>
        <form action="proses_ubah_user.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_user" value="<?= $dt_user['id_user'] ?>">
            Nama :
            <input type="text" name="nama_user" value="<?= $dt_user['nama_user'] ?>" class="form-control">
            Username :
            <input type="text" name="username" value="<?= $dt_user['username'] ?>" class="form-control">
            Password :
            <input type="text" name="password" value="<?= $dt_user['password'] ?>" class="form-control">
            Role :
            <?php 
            $arr_gender=array('admin'=>'admin','kasir'=>'kasir','owner'=>'owner');
            ?>
            <select name="role" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_user['role']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
            </select><br>
            <input type="submit" name="simpan" value="Ubah user" class="btn btn-dark mt-3">
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>