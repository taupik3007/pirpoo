<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        header("location: ../auth/login.php");
    }
    include '../koneksi.php';
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

    $show_post = mysqli_query($koneksi,"SELECT * FROM `post` INNER JOIN `user`  ON post.user_id = user.user_id where user.user_id ='$user_id' ORDER BY `post_id` DESC; ");


    $jml_postingan= mysqli_num_rows($show_post);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user_id=1</title>
    <link rel="icon" type="image/png" href="../public/assets/img/Logo pirpo.PNG">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/profile.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="w-full flex flex-row flex-wrap">

        <div class="w-full bg-white h-screen flex flex-row flex-wrap justify-center">
            <!-- Begin Navbar -->

            <!-- Navbar toggle button -->
            <div
                class="bg-white shadow-lg border-t-4 border-indigo-500 absolute bottom-0 w-full md:w-0 md:hidden flex flex-row flex-wrap">
                <div class="w-full text-right">
                    <button class="p-2 fa fa-bars text-4xl text-gray-600"></button>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="w-0 md:w-1/4 lg:w-1/5 h-0 md:h-screen overflow-y-hidden bg-white border-2">
            <div class="flex items-center justify-between">
                        <a href="../Homepage/Homepage.php">
                            <img src="../public/assets/img/chevron-left.svg" alt="" class="w-8 h-auto">
                    </div>
                <!-- Profile picture and name -->
                <div class="p-5 bg-white sticky top-0">
                    <div class="flex justify-center items-center">
                        <img class="w-1/2 rounded-full shadow-lg justify-center" src="../public/assets/img/pp.png"
                            alt="Profile Picture">
                    </div>
                    <div class="pt-2 mt-4 w-full text-center text-xl text-black-600">
                    <?php echo $_SESSION['nama']; ?>
                    </div>
                </div>
                <div class="w-full">
                    <div class="flex justify-between items-center py-3 px-6">
                        <div class="text-black-600">
                            <span class="font-bold"><?php echo $jml_postingan; ?></span>
                            <h6 class="text-sm">Postingan</h6>
                        </div>
                        <div class="text-black-600">
                            <span class="font-bold">0</span>
                            <h6 class="text-sm">Pengikut</h6>
                        </div>
                        <div class="text-black-600">
                            <span class="font-bold">0</span>
                            <h6 class="text-sm">Mengikuti</h6>
                        </div>
                    </div>
                </div>
                <div class="w-70 p-4 flex justify-center items-center mx-auto">
                    <div>
                        <p class="text-gray-600 text-lg text-center">Bio:</p>
                        <?php 
                            include '../koneksi.php';
                            $user_id = $_SESSION['user_id'];
                            $data = mysqli_query($koneksi,"SELECT * FROM `biodata` where `user_id` = '$user_id' ");
                            $user = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM `user` where `user_id` = '$user_id'"));
                            foreach ($data as $data){
                                echo  $_SESSION['username'] . "<br>";
                                echo  $data['bio_description'] . "<br>";
                                echo "Hobby: " . $data['hoby'] . "<br>";
                                echo "Email: " . $data['email'] . "<br>";
                                echo "Phone: " . $user['phone'] . "<br>";
                                // ... tambahkan informasi lain yang ingin ditampilkan
                                echo "<br>";
                            }
                                
                        ?>
                    </div>
                </div>

               
                <!-- Navigation menu -->
                <div class="w-full h-screen antialiased flex flex-col hover:cursor-pointer mt-8">
                    <a class="hover:bg-light-300 bg-light-200 p-2 w-full text-base text-left text-black-600 font-semibold"
                        href="editprofile.php">
                        <i class="bi bi-person-fill pl-3 pr-2 float-left"></i>
                        Edit Profile
                    </a>
                    <a class="hover:bg-light-300 bg-light-200 p-2 w-full text-base text-left text-black-600 font-semibold"
                        href="../auth/forgot-pw.php">
                        <i class="bi bi-person-fill pl-3 pr-2 float-left"></i>
                        Edit Password
                    </a>
                    <a class="hover:bg-light-300 bg-light-200 p-2 w-full text-base text-left text-black-600 font-semibold"
                        href="">
                        <i class="bi bi-question-circle pl-3 pr-2 float-left"></i>
                        Help
                    </a>
                    <a href="../index.php" class="btn-link p-4 text-center text-base">
                        <button class="big-btn">Log out</button>
                    </a>
                </div>
            </div>

            <!-- End Navbar -->

            <!-- Main Content -->
            <div class="w-full md:w-3/4 lg:w-4/5 p-5 md:px-12 lg:24 h-full overflow-x-scroll antialiased">
                <!-- Create new post -->
                <!-- <div class="bg-white w-full shadow rounded-lg p-5">
                    <textarea class="bg-gray-200 w-full rounded-lg shadow border p-2" rows="5"
                        placeholder="Speak your mind"></textarea>

                    <div class="w-full flex flex-row flex-wrap mt-3">
                        <div class="w-1/3">
                            <select class="w-full p-2 rounded-lg bg-gray-200 shadow border float-left">
                                <option>Public</option>
                                <option>Private</option>
                            </select>
                        </div>
                        <div class="w-2/3">
                            <button type="button"
                                class="float-right bg-indigo-400 hover:bg-indigo-300 text-white p-2 rounded-lg">Submit</button>
                        </div>
                    </div>
                </div> -->

                <!-- Posts -->
                <div class="mt-3 flex flex-col">
                    <!-- Post 1 -->

                <?php
                    foreach($show_post as $post){
                        ?>
                        <div class="post">
                        <div class="post__top">
                            <img class="user__avatar post__avatar" src="../public/assets/img/pp.png" alt="" />
                            <div class="post__topInfo">
                                <h3 class="text-medium"><?php echo $post['name'] ?> <a href="index.php?page=home"
                                        class="text-blue-500">.Follow</a></h3>
                                <p class="text-small text-gray-500"><?php echo $post['created_at'] ?></p>
                            </div>
                            <img class="user__avatar post_avatar" src="icon 3.jpg" alt="" />
                        </div>
                        <div class="post__bottom">
                            <p class="text-justify"><?php echo $post['post_value'] ?></p>
                        </div>
                        
                        <div class="post__options">
                            <div class="post__option flex items-center">
                                <span class="material-icons text-xl">thumb_up</span>
                                <p class="text-medium">Like</p>
                            </div>
                            <div class="post__option flex items-center">
                                <span class="material-icons text-xl">chat_bubble_outline</span>
                                <p class="text-medium">Comment</p>
                            </div>
                            <div class="post__option flex items-center">
                                <span class="material-icons text-xl">near_me</span>
                                <p class="text-medium">Share</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                
                
                ?>



                    

                    <!-- Post 2 -->
                    

                    <!-- Post 3 -->
                   

                </div>
            </div>
        </div>

    </div>
</body>

</html>