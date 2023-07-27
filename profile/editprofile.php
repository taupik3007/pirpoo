<?php
       session_start();

       if(!isset($_SESSION['user_id'])){
           header("location: auth/login.php");
       }
       $user_id = $_SESSION['user_id'];

       include '../koneksi.php';
       $user = mysqli_query($koneksi,"SELECT * FROM `user` where `user_id` = '$user_id'");
       $mydata=mysqli_fetch_array($user);
       $bio = mysqli_query($koneksi,"SELECT * FROM `biodata` where `user_id` = '$user_id'");
       $mybio = mysqli_fetch_array($bio);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_id=1</title>
    <link rel="icon" type="image/png" href="../public/assets/img/Logo pirpo.PNG">
    <link rel="stylesheet" href="../public/assets/css/editprofile.css">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css2?family=Montserrat+Alternates:3b11a4;700;800&display=swap" rel="stylesheet">

</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-dark">
        <div class="container mx-auto">
            <div class="bg-white rounded-lg p-3 border border-gray-300">
                <div class="flex items-center justify-center">
                    <img src="../public/assets/img/pp.png" alt="" class="w-1/5 h-auto mb-4">
                </div>
                <h1 class="text-3xl font-bold mb-2 text-center text-3b11a4">
                    Edit Profile
                </h1>
                <form class="space-y-6" action="proses-edit.php" method="POST">
                    <input type="hidden" name= "user_id" value= "<?php echo $user_id;?>">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" minlength="8" name="username" readonly="" id="username" value="<?php echo $mydata['username']; ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-3b11a4 dark:focus:border-3b11a4 focus:outline-none focus:ring-0 focus:border-3b11a4 peer"
                            placeholder=" " required />
                        <label for="username"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-3b11a4 peer-focus:dark:text-3b11a4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="bio" id="bio" value="<?php echo $mybio['bio_description'] ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-3b11a4 dark:focus:border-3b11a4 focus:outline-none focus:ring-0 focus:border-3b11a4 peer"
                            placeholder=" " required />
                        <label for="bio"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-3b11a4 peer-focus:dark:text-3b11a4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bio</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="hobby" id="hobby" value="<?php echo $mybio['hoby'] ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-3b11a4 dark:focus:border-3b11a4 focus:outline-none focus:ring-0 focus:border-3b11a4 peer"
                            placeholder=" " required />
                        <label for="hobby"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-3b11a4 peer-focus:dark:text-3b11a4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hobby</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="email" name="email" id="email" value="<?php echo $mybio['email'] ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-3b11a4 dark:focus:border-3b11a4 focus:outline-none focus:ring-0 focus:border-3b11a4 peer"
                            placeholder=" " required />
                        <label for="email"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-3b11a4 peer-focus:dark:text-3b11a4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="tel" name="phone" id="phone" value = "<?php echo $mydata['phone'] ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-3b11a4 dark:focus:border-3b11a4 focus:outline-none focus:ring-0 focus:border-3b11a4 peer"
                            placeholder=" " required pattern="[0-9]+" />
                        <label for="phone"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-3b11a4 peer-focus:dark:text-3b11a4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone</label>
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="./detail.php">
                            <img src="../public/assets/img/chevron-left.svg" alt="" class="w-8 h-auto">
                        </a>
                        <img src="../public/assets/img/PIRPOO.png" alt="" class="w-1/5 h-auto">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 px-4 text-center dark:bg-3b11a4 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js">
    </script>
</body>

</html>