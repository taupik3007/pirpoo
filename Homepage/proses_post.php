<?php
    $user_id =  $_POST['user_id'];
    $post_content = $_POST["message"]; 
    $post_date = date("Y-m-d H:i:s");

    include '../koneksi.php';

    
    $query = mysqli_query($koneksi,"INSERT INTO `post`(`user_id`, `post_value`,  `created`, `updated_at`) VALUES ('$user_id','$post_content','$post_date','$post_date')");

    header('location:homepage.php');
    ?> 