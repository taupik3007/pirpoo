
<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        header("location: auth/login.php");
    }



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pirpoo Website</title>
    <link rel="icon" href="./public/assets/img/Logo pirpo.PNG" type="image">
    <link rel="stylesheet" href="./public/assets/css/homepage.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body>
    <!-- header starts -->
    <div class="header">
        <div class="header__left">
            <img src="image/PIRPOO.png" alt="" />
            <div class="header__input">
                <span class="material-icons"> search </span>
                <input type="text" placeholder="Cari di Pirpoo..." />
            </div>
        </div>



        <div class="header__right">
            <div class="header__info">
                <span class="material-icons"> notifications_active </span>
                <a href="./profile/detail.php">
                    <img class="user__avatar" src="./public/assets/img/pp.png" alt="" />
                </a>
                <h4>Park Jimin</h4>
            </div>
        </div>
    </div>
    <!-- header ends -->

    <!-- main body starts -->
    <div class="main__body">
        <!-- sidebar starts -->
        <div class="sidebar">


            <div class="sidebarRow">
                <h4>Home</h4>
            </div>

            <div class="sidebarRow">
                <h4>Konsultan</h4>
            </div>

            <div class="sidebarRow">
                <h4>Chat</h4>
            </div>

            <div class="sidebarRow">
                <h4>Notifikasi</h4>
            </div>

            <div class="sidebarRow">
                <h4>Grup</h4>
            </div>

            <div class="text-center-sidebar">
                <!--ini mah yang di samping-->
                <button class="big-btn" onclick="myFunction()">POST</button>
            </div>


        </div>
        <!-- sidebar ends -->

        <!-- feed starts -->
        <div class="feed">


            <!-- message sender starts -->

            <div class="messageSender">
                <div class="messageSender__top">
                    <img class="user__avatar" src="./public/assets/img/pp.png" alt="" />
                    <form>
                        <input class="messageSender__input" placeholder="apa yang anda pikirkan ?" type="text" />
                    </form>
                    <div class="btn-link p-4 text-center text-base">
                        <button class="big-btn" type="submit" onclick="postMessage()">Post</button>
                    </div>
                </div>
                <div class="messageSender__bottom">
                    <div class="messageSender__option">
                        <img src="image/images.png" alt="post_image" />
                    </div>

                    <div class="messageSender__option">
                        <img src="image/emoticon.png" alt="" />
                    </div>

                    <div class="messageSender__option">
                        <img src="image/link.png" alt="" />
                    </div>

                </div>
            </div>

            <!-- message sender ends -->

            <!-- post starts -->
            <div class="post">
                <div class="post__top">
                    <img class="user__avatar post__avatar" src="./public/assets/img/pp.png" alt="" />
                    <div class="post__topInfo">
                        <h3>User</h3>
                        <p>25 April at 20:30</p>
                    </div>
                </div>

                <div class="post__bottom">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the release of
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        software like
                        Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

                <div class="post__image">
                    <img src="./public/assets/img/post.png" alt="" />
                </div>

                <div class="post__options">
                    <div class="post__option">
                        <span class="material-icons"> thumb_up </span>
                        <p>Like</p>
                    </div>

                    <div class="post__option">
                        <span class="material-icons"> chat_bubble_outline </span>
                        <p>Comment</p>
                    </div>

                    <div class="post__option">
                        <span class="material-icons"> near_me </span>
                        <p>Share</p>
                    </div>
                </div>
            </div>
            <!-- post ends -->

            <!-- post starts -->
            <div class="post">
                <div class="post__top">
                    <img class="user__avatar post__avatar" src="./public/assets/img/pp.png" alt="" />
                    <div class="post__topInfo">
                        <h3>User</h3>
                        <p>25 April at 20:30</p>
                    </div>
                </div>

                <div class="post__bottom">
                    <p>Post Without Image</p>
                </div>

                <div class="post__options">
                    <div class="post__option">
                        <span class="material-icons"> thumb_up </span>
                        <p>Like</p>
                    </div>

                    <div class="post__option">
                        <span class="material-icons"> chat_bubble_outline </span>
                        <p>Comment</p>
                    </div>

                    <div class="post__option">
                        <span class="material-icons"> near_me </span>
                        <p>Share</p>
                    </div>
                </div>
            </div>
            <!-- post ends -->

            <!-- post starts -->
            <div class="post">
                <div class="post__top">
                    <img class="user__avatar post__avatar" src="./public/assets/img/pp.png" alt="" />
                    <div class="post__topInfo">
                        <h3>User</h3>
                        <p>25 April at 20:30</p>
                    </div>
                </div>

                <div class="post__bottom">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical
                        Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                        professor at
                        Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                        from a Lorem
                        Ipsum passage, and going through the cites of the word in classical literature, discovered the
                        undoubtable
                        source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"
                        (The Extremes
                        of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                        very popular
                        during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes
                        from a line in
                        section 1.10.32.

                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                        Sections
                        1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their
                        exact
                        original form, accompanied by English versions from the 1914 translation by H. Rackham.

                    </p>
                </div>

                <div class="post__image">
                    <img src="./public/assets/img/post.png" alt="" />
                </div>

                <div class="post__options">
                    <div class="post__option">
                        <span class="material-icons"> thumb_up </span>
                        <p>Like</p>
                    </div>

                    <div class="post__option">
                        <span class="material-icons"> chat_bubble_outline </span>
                        <p>Comment</p>
                    </div>

                    <div class="post__option">
                        <span class="material-icons"> near_me </span>
                        <p>Share</p>
                    </div>
                </div>
            </div>
            <!-- post ends -->
        </div>
        <!-- feed ends -->


        <!-- sidebar starts -->
        <div class="kanan">
            <div class="baris">
                <img class="ppkanan" src="./public/assets/img/profil.svg" alt="" />
            </div>

            <div class="sdleft">
                <h4>Trending</h4>
            </div>

            <div class="sddown">
                <h4>#Toxic</h4>
            </div>
            <div class="sddown">
                <h4>#Insecure</h4>
            </div>
            <div class="sddown">
                <h4>#Bullying</h4>
            </div>
            <div class="sddown">
                <h4>#Brokenhome</h4>
            </div>
            <div class="sddown">
                <h4>#Brokenheart</h4>
            </div>
            <div class="sddown">
                <h4>#Anxity</h4>
            </div>
            <div class="sddown">
                <h4>#Bipolar</h4>
            </div>




        </div>
        <!-- sidebar ends -->
        <div id="footer">
            <!-- Ini footer nya-->

        </div>
</body>

</html>