<?php

$phone = $_POST['phone'];
// if(!isset($phone)){
//     header("location: forgot-pw.php");
// }

include'../koneksi.php';
$check_phone = mysqli_query($koneksi,"SELECT `user_id`,`phone` FROM `user` where `phone` = '$phone'");

$count_number = mysqli_num_rows($check_phone);

if($count_number == 0){
    ?>
    <script type="text/javascript">
    alert("Nomor Tidak Ditemukan");
    window.location.href = "forgot-pw.php";
</script>
    <?php
}

$user_id= mysqli_fetch_array($check_phone);
$nomor =substr($user_id['phone'],1);
$id = $user_id['user_id'];

$random = rand(1000,9999);


echo $check_otp = mysqli_num_rows(mysqli_query($koneksi,"SELECT `otp` FROM `otp` WHERE `user_id` = '$id'"));

if($check_otp > 0){
    $delete_otp = mysqli_query($koneksi,"DELETE FROM `otp` WHERE `user_id` = '$id'");
}


$create_otp = mysqli_query($koneksi,"INSERT INTO `otp`( `otp`, `user_id`) VALUES ('$random','$id')");

$otp_pull = mysqli_fetch_array(mysqli_query($koneksi,"SELECT `otp` FROM `otp` WHERE `user_id` = '$id'"));

$otp = $otp_pull['otp'];
$token = "#76+prfe!QQ6vg4V99Xy";
$target = "62".$nomor;
$awikwok = "awikwok";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.fonnte.com/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
'target' => $target,
'message' => 'OTP anda adalah '.$otp,

),
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token"
  ),
));

$response = curl_exec($curl);

curl_close($curl);


header('location: forgot-pw-otp.php?id='.$id);



