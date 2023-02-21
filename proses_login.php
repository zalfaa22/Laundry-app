<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from user where username = '".$username."' and password = '".md5($password)."' and role = '".$role."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();

                if($dt_login['role']=="Owner"){
                    $_SESSION['id_user']=$dt_login['id_user'];
                    $_SESSION['nama']=$dt_login['nama'];
                    $_SESSION['role']= "Owner";
                    $_SESSION['status_login']=true;
                    header("location: home.php");
                }else if($dt_login['role'] == "Admin"){
                    $_SESSION['id_user']=$dt_login['id_user'];
                    $_SESSION['nama']=$dt_login['nama'];
                    $_SESSION['role']= "Admin";
                    $_SESSION['status_login']=true;
                    header("location: home.php");
                }else if($dt_login['role'] == "Kasir"){
                    $_SESSION['id_user']=$dt_login['id_user'];
                    $_SESSION['nama']=$dt_login['nama'];
                    $_SESSION['role']= "Kasir";
                    $_SESSION['status_login']=true;
                    header("location: home.php");
                }
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>
