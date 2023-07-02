<?php

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$phone = $_POST["phone"];
$password = md5($_POST['password']);

include '../koneksi.php';

$chek_username = mysqli_query($koneksi,"SELECT `username` FROM `user` where  `username` = '$username'");
$chek_already = mysqli_num_rows($chek_username);
$chek_upper = mysqli_fetch_array($chek_username);


if($chek_already > 1){
    if($chek_upper['username'] == $username){
        ?>
        <script type="text/javascript">
        alert("Username Telah terdaftar");
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

