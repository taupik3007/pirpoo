<?php

include '../koneksi.php';

$id = $_POST['id'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"UPDATE `user` SET `password`='$password' WHERE `user_id` ='$id'");

header ("location:login.php");




?>


