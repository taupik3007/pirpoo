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
                <!-- Profile picture and name -->
                <div class="p-5 bg-white sticky top-0">
                    <div class="flex justify-center items-center">
                        <img class="w-1/2 rounded-full shadow-lg justify-center" src="../public/assets/img/pp.png"
                            alt="Profile Picture">
                    </div>
                    <div class="pt-2 mt-4 w-full text-center text-xl text-black-600">
                        Some Person
                    </div>
                </div>
                <div class="w-full">
                    <div class="flex justify-between items-center py-3 px-6">
                        <div class="text-black-600">
                            <span class="font-bold">123</span>
                            <h6 class="text-sm">Postingan</h6>
                        </div>
                        <div class="text-black-600">
                            <span class="font-bold">456</span>
                            <h6 class="text-sm">Pengikut</h6>
                        </div>
                        <div class="text-black-600">
                            <span class="font-bold">789</span>
                            <h6 class="text-sm">Mengikuti</h6>
                        </div>
                    </div>
                </div>
                <div class="w-70 p-4 flex justify-center items-center mx-auto">
                    <div>
                        <p class="text-gray-600 text-lg text-center">Bio:</p>
                        <p class="text-gray-600 text-sm pl-3 pr-2 text-justify">Ini adalah bio pengguna Some Person.
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed sagittis condimentum mauris, eu iaculis quam feugiat et. Vestibulum
                            ante ipsum primis
                            in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                    </div>
                </div>


                <!-- Navigation menu -->
                <div class="w-full h-screen antialiased flex flex-col hover:cursor-pointer mt-8">
                    <a class="hover:bg-light-300 bg-light-200 p-2 w-full text-base text-left text-black-600 font-semibold"
                        href="">
                        <i class="iset pl-3 pr-2 float-left"></i>
                        Settings
                    </a>
                    <a class="hover:bg-light-300 bg-light-200 p-2 w-full text-base text-left text-black-600 font-semibold"
                        href="">
                        <i class="ihelp pl-3 pr-2 float-left"></i>
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
                <div class="bg-white w-full shadow rounded-lg p-5">
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
                </div>

                <!-- Posts -->
                <div class="mt-3 flex flex-col">
                    <!-- Post 1 -->
                    <div class="bg-white mt-3">
                        <div class="bg-white border shadow p-5 text-xl text-gray-700 font-semibold">
                            A Pretty Cool photo from the mountains.
                        </div>
                        <img class="border rounded-t-lg shadow-lg"
                            src="https://images.unsplash.com/photo-1572817519612-d8fadd929b00?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80">
                        <div class="bg-white p-1 border shadow flex flex-row flex-wrap">
                            <div class="w-1/3 hover:bg-gray-200 text-center text-xl text-gray-700 font-semibold">Like
                            </div>
                            <div
                                class="w-1/3 hover:bg-gray-200 border-l-4 border-r- text-center text-xl text-gray-700 font-semibold">
                                Share</div>
                            <div
                                class="w-1/3 hover:bg-gray-200 border-l-4 text-center text-xl text-gray-700 font-semibold">
                                Comment
                            </div>
                        </div>

                    </div>

                    <!-- Post 2 -->
                    <div class="bg-white mt-3">
                        <div class="bg-white border shadow p-5 text-xl text-gray-700 font-semibold">
                            A Pretty Cool photo from the mountains.
                        </div>
                        <img class="border rounded-t-lg shadow-lg"
                            src="https://images.unsplash.com/photo-1572817519612-d8fadd929b00?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80">
                        <div class="bg-white p-1 rounded-b-lg border shadow flex flex-row flex-wrap">
                            <div class="w-1/3 hover:bg-gray-200 text-center text-xl text-gray-700 font-semibold">Like
                            </div>
                            <div
                                class="w-1/3 hover:bg-gray-200 border-l-4 border-r- text-center text-xl text-gray-700 font-semibold">
                                Share</div>
                            <div
                                class="w-1/3 hover:bg-gray-200 border-l-4 text-center text-xl text-gray-700 font-semibold">
                                Comment
                            </div>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="bg-white mt-3">
                        <div class="bg-white border shadow p-5 text-xl text-gray-700 font-semibold">
                            A Pretty Cool photo from the mountains.
                        </div>
                        <img class="border rounded-t-lg shadow-lg"
                            src="https://images.unsplash.com/photo-1572817519612-d8fadd929b00?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80">
                        <div class="bg-white p-1 rounded-b-lg border shadow flex flex-row flex-wrap">
                            <div class="w-1/3 hover:bg-gray-200 text-center text-xl text-gray-700 font-semibold">Like
                            </div>
                            <div
                                class="w-1/3 hover:bg-gray-200 border-l-4 border-r- text-center text-xl text-gray-700 font-semibold">
                                Share</div>
                            <div
                                class="w-1/3 hover:bg-gray-200 border-l-4 text-center text-xl text-gray-700 font-semibold">
                                Comment
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>