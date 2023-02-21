<?php
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <style>
        .container{
            width: 90%;
            margin: 0 auto;
            margin-top: 5vh;

        }
        .container h3{
            text-align: center;
            color : black;
        }
        .container .form-btn{
            margin-top: 3vh;
            background-color: Black;
            padding: 10px;
        }
        .container .form-btn:hover{
            background-color: red;
            color: navy;
        }
    </style>
</head>
<body>
    <div class="container">
    <h3>Daftar User</h3><br>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA USER</th><th>USERNAME</th><th>PASSWORD</th><th>ROLE</th><th>AKSI</th>
            </tr>
        </thead>
        <a href="tambah_user.php" class="btn btn-primary">Tambah User</a>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_user=mysqli_query($conn,"select * from user");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
            $no++;?>
            <tr>
                <td><?=$no?></td>
                <td><?=$data_user['nama_user']?></td>
                <td><?=$data_user['username']?></td>
                <td><?=$data_user['password']?></td>
                <td><?=$data_user['role']?></td>
                <td><a href="ubah_user.php?id_user=<?=$data_user['id_user']?>" class="btn btn-success">Ubah</a> | <a href="hapus_user.php?id_user=<?=$data_user['id_user']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
include "footer.php";
?>
