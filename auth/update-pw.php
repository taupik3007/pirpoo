<?php

include '../koneksi.php';
$id = $_POST['id'];
$password = md5($_POST['password_new']);

$data = mysqli_query($koneksi,"UPDATE `user` SET `password`='$password' WHERE `user_id` = '$id'");
header ("location:login.php");




?>


