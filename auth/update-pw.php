<?php

include '../koneksi.php';
echo $id = $_POST['id'];
$password = md5($_POST['password_new']);

$data = mysqli_query($koneksi,"UPDATE `user` SET `password`='$password' WHERE `user_id` = '$id'");

?>
<script type="text/javascript">
        alert("Berhasil Merubah Password");
        window.location.href = "login.php";
    </script>
<?php



