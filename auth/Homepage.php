<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pirpoo Website</title>
    <link rel="icon" href="image/Logo pirpo.PNG" type="image"> 
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  </head>
  <body>
    <!-- header starts -->
    <div class="header">
      <div class="header__left">
        <img
          src="image/PIRPOO.png"alt="" />
        <div class="header__input">
          <span class="material-icons"> search </span>
          <input type="text" placeholder="Cari di Pirpoo" />
        </div>
      </div>

     

      <div class="header__right">
        <div class="header__info">
          <img
            class="user__avatar"
            src="image/pp.png"
            alt=""
          />
          <h4>waduuh</h4>
        </div>
        <span class="material-icons"> notifications_active </span>
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

        <div class="text-center">
          <button type="submit" onclick="myFunction()">POST</button>
      </div>

       
      </div>
      <!-- sidebar ends -->

      <!-- feed starts -->
      <div class="feed">
        

        <!-- message sender starts -->
        <div class="messageSender">
          <div class="messageSender__top">
            <img
              class="user__avatar"  src="image/pp.png"  alt=""/>         
            <form>
              <input class="messageSender__input" placeholder="apa yang anda pikirkan ?" type="text" />
            </form>
            <div class="text-center">
              <button type="submit" onclick="postMessage()">Post</button>
          </div>
              </div>
              
          
          <div class="messageSender__bottom">
            <div class="messageSender__option">
              <img
              src="image/images.png"
              alt=""/>
            </div>

            <div class="messageSender__option">
              <img
              src="image/emoticon.png"
              alt=""/>
            </div>

            <div class="messageSender__option">
              <img
              src="image/link.png"
              alt=""/>
            </div>

          </div>
        </div>
          
        <!-- message sender ends -->

        <!-- post starts -->
        <div class="post">
          <div class="post__top">
            <img
              class="user__avatar post__avatar"
              src="image/pp.png"
              alt=""
            />
            <div class="post__topInfo">
              <h3>waduuh</h3>
              <p>25 April at 20:30</p>
            </div>
          </div>

          <div class="post__bottom">
            <p>Message</p>
          </div>

          <div class="post__image">
            <img
              src="image/post.png"
              alt=""
            />
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
            <img
              class="user__avatar post__avatar"
              src="image/pp.png"
              alt=""
            />
            <div class="post__topInfo">
              <h3>waduuh</h3>
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
            <img
              class="user__avatar post__avatar"
              src="image/pp.png"
              alt=""
            />
            <div class="post__topInfo">
              <h3>waduuh</h3>
              <p>25 April at 20:30</p>
            </div>
          </div>

          <div class="post__bottom">
            <p>Message</p>
          </div>

          <div class="post__image">
            <img src="image/post.png" alt="" />
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
      <div class="sidebar">
        <div class="sidebarRow">
          <img
            class="avatar__"
            src="image/profil.svg"
            alt=""
          />
          
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
  </body>
</html>