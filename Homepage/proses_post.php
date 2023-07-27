<?php
    $user_id =  $_POST['user_id'];
    $post_content = $_POST["message"]; 
    $post_date = date("Y-m-d H:i:s");

    include '../koneksi.php';

    
    $query = mysqli_query($koneksi,"INSERT INTO `post`(`user_id`, `post_value`, `updated_at`,`created_at`) VALUES ('$user_id','$post_content','$post_date','$post_date')");

    ?>
    <script type="text/javascript">
        alert("berhasil post");
        window.location.href = "homepage.php";
    </script>