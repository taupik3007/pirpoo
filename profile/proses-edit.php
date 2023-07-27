<?php
    include '../koneksi.php';
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $bio      = $_POST['bio'];
    $hobby     = $_POST['hobby'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];

    $data = mysqli_query($koneksi,"UPDATE `biodata` SET `email`='$email',`bio_description`='$bio',`hoby`='$hobby' WHERE `user_id` = '$user_id' ");

    header('Location: detail.php');

?>