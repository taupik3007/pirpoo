<?php
    $user_name =  $_POST['username'];
    $post_content = $_POST["message"]; 
    $post_date = date("Y-m-d H:i:s");

    include '../koneksi.php';

    
    $query = "INSERT INTO `posts`(`id`, `user_name`, `post_content`, `post_date`) VALUES ('$id','$user_name','$post_content','$post_date');
    
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Postingan berhasil disimpan.";
    } else {
        echo "Gagal menyimpan postingan: " . mysqli_error($koneksi);
    }

?> 
