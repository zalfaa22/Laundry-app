<!DOCTYPE html>
<html>
    <style>

        body { background:rgb(30,30,40); }
        form { max-width:420px; margin:50px auto; }

        .h3 {
            color:white;
            font-family: Helvetica, Arial, sans-serif;
            font-weight:500;
            font-size: 30px;
        }

        .form-control {
        color:white;
        font-family: Helvetica, Arial, sans-serif;
        font-weight:500;
        font-size: 18px;
        border-radius: 5px;
        line-height: 22px;
        background-color: transparent;
        border:2px solid #CC6666;
        transition: all 0.3s;
        padding: 13px;
        margin-bottom: 15px;
        width:100%;
        box-sizing: border-box;
        outline:0;
        }

        .form-control:focus { border:2px solid #EEF2E6; }

        textarea {
        height: 150px;
        line-height: 150%;
        resize:vertical;
        }

        [type="submit"] {
        font-family: 'Montserrat', Arial, Helvetica, sans-serif;
        width: 100%;
        background:#CC6666;
        border-radius:5px;
        border:0;
        cursor:pointer;
        color:white;
        font-size:24px;
        padding-top:10px;
        padding-bottom:10px;
        transition: all 0.3s;
        margin-top:-4px;
        font-weight:700;
        }
        [type="submit"]:hover { background:#CC4949; }
    </style>

<body>
    <h3>Tambah User</h3>
    <form action="proses_tambah_user.php" method="post">

        <input type="text" name="nama_user" value="" class="form-control" placeholder="Nama">
        <input type="text" name="username" value="" class="form-control" placeholder="Username">
        <input type="text" name="password" value="" class="form-control" placeholder="Password">
        <select name="role" class="form-control">
            <option>role</option>
            <option value="Admin">Admin</option>
            <option value="Kasir">Kasir</option>
            <option value="Owner">Owner</option>
        </select>
        <input type="submit" name="simpan" value="SUBMIT" />
    </form>
</body>
</html>

