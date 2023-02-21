<?php 
session_start();
include "koneksi.php";
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
    $role = $_SESSION['role'];
    $query = $qry_login=mysqli_query($conn,"SELECT * FROM `user` WHERE role = '".$role."' ");
    $header = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid bg:#B1D7B4">
        <a class="navbar-brand" href="#">LAUNDRYKU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        if($_SESSION['role'] == "Admin"){
        ?>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_paket.php">Paket</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_user.php">User</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_member.php">Member</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="data.php">Transaksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="histori_transaksi.php">Histori</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                  </li>
                </ul>
              </div>
              <?php
            }
        ?>

        <?php
        if($_SESSION['role'] == "Kasir"){
        ?>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_member2.php">Member</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_paket2.php">Paket</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="data.php">Transaksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="histori_transaksi.php">Histori</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                  </li>
                </ul>
              </div>
              <?php
            }
        ?>

        <?php
        if($_SESSION['role'] == "Owner"){
        ?>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="histori_transaksi2.php">Histori</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                  </li>
                </ul>
              </div>
              <?php
            }
        ?>
        
      </div>
    </nav>
  <div class="container rounded" style="margin-top:10px">
  
