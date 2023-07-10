<?php

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$phone = $_POST["phone"];
$password = md5($_POST['password']);

include '../koneksi.php';

$chek_username = mysqli_query($koneksi,"SELECT `username` FROM `user` where  `username` = '$username'");
$chek_already = mysqli_num_rows($chek_username);
$chek_upper = mysqli_fetch_array($chek_username);



if($chek_already > 0){
    if($chek_upper['username'] == $username){
        ?>
        <script type="text/javascript">
        alert("Username Telah terdaftar");
        window.location.href = "register.php";
    </script>
        <?php
    }

}

$chek_phone = mysqli_query($koneksi,"SELECT `phone` FROM `user` where  `phone` = '$phone'");
$chek_already = mysqli_num_rows($chek_phone);
$chek_upper = mysqli_fetch_array($chek_phone);
if($chek_already > 0){
    if($chek_upper['phone'] == $phone){
        ?>
        <script type="text/javascript">
        alert("Nomor Telepon Telah terdaftar");
        window.location.href = "register.php";
    </script>
        <?php
    }

}


$insert = mysqli_query($koneksi,"INSERT INTO `user`( `username`, `password`, `phone`, `usr_role_id`, `name`) VALUES ('$username','$password','$phone','3','$fullname')");


?>
        <script type="text/javascript">
        alert("berhasil terdaftar");
        window.location.href = "register.php";
    </script>
        <?php

