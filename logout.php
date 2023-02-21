<?php
    session_start();
        $_SESSION['status_login']==false;
    session_destroy();


    header('location: login.php');
?>