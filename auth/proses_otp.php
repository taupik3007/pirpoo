<?php
$id = $_POST['id'];
$otp = $_POST['otp'];

include '../koneksi.php';
$check_otp = mysqli_query($koneksi,"SELECT * FROM `otp` WHERE `otp` = '$otp' && `user_id` = '$id'");
echo $count_otp = mysqli_num_rows($check_otp);


if($count_otp >0){
    ?>
    <script type="text/javascript">
    alert("OTP yang anda masukan benar");
    window.location.href = "change-pw.php?id=<?php echo $id?>&otp=<?php echo $otp; ?>";
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
    alert("OTP yang anda masukan salah");
    window.location.href = "forgot-pw-otp.php?id=<?php echo $id;?>";
    </script>
    <?php
}

