<?php
    include '../koneksi.php';

    $username = $_POST['username'];
    $bio      = $_POST['bio'];
    $hobby     = $_POST['hobby'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];

    $data = mysqli_query($koneksi,"INSERT INTO `biodata`(`username`, `bio_description`, `hoby`, `email`, `phone`) VALUES ('$username','$bio','$hobby','$email','$phone')");

    header('Location: detail.php');

?>