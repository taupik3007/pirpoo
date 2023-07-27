<?php 
	
	include '../koneksi.php';

	$username = $_POST['username'];
	"<br>".$password = $_POST['password'];

	$encrypt= md5($password);

	// $check_username=mysqli_query($koneksi, "SELECT * FROM `user` WHERE `username` = '$username'");
	$check_username=mysqli_query($koneksi, "SELECT * FROM `user` WHERE `username` = '$username'");
	$check_user= mysqli_num_rows($check_username);

	if ($check_user == 1) {
	 	// code...
	 	// $check_password =mysqli_query($koneksi, "SELECT * FROM `user` WHERE `username` = '$username' && `password` = '$encrypt'");
		 $check_password =mysqli_query($koneksi, "SELECT * FROM `user` WHERE `username` = '$username' && `password` = '$encrypt'");
	 	// echo "username ada";
	 	$check_psw= mysqli_num_rows($check_password);
	 	if ($check_psw == 1) {
	 		$data = mysqli_fetch_array($check_password);
	 		// echo "berhasil login";
	 		// code...

	 		session_start();
			$_SESSION['user_id']= $data['user_id'];
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data['name'];
	 		// $_SESSION['username'] = $username;
	 		// $_SESSION['nama'] = $data['nama'];
	 		header("location:../Homepage/Homepage.php");

	 	}else{

	?>
        <script type="text/javascript">
        alert("password salah");
        window.location.href = "login.php";
    </script>
        <?php

			
	 } 
	}else{
		 ?>
		 <script type="text/javascript">
		 alert("Username Tidak Ditemukan");
		 window.location.href = "login.php";
	 </script>
		 <?php
	 }





 ?>
