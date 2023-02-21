<?php
$conn=mysqli_connect('localhost','root','','laundry'); /* masuk ke database laundry */

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    printf("");
}
?>