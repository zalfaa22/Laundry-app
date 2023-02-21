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
            width: 80%;
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
    <h3>Daftar Member</h3><br>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA MEMBER</th><th>ALAMAT</th><th>JENIS KELAMIN</th><th>TELEPON</th>
            </tr>
        </thead>
        <a href="tambah_member.php" class="btn btn-primary">Tambah Member</a>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($conn,"select * from member");
            $no=0;
            while($data_member=mysqli_fetch_array($qry_member)){
            $no++;?>
            <tr>
                <td><?=$no?></td>
                <td><?=$data_member['nama_member']?></td>
                <td><?=$data_member['alamat']?></td>
                <td><?=$data_member['jenis_kelamin']?></td>
                <td><?=$data_member['tlp']?></td>
                

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
