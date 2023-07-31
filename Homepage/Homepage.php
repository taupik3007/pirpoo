<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        header("location: auth/login.php");
    }
    include '../koneksi.php';
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

    $show_post = mysqli_query($koneksi,"SELECT * FROM `post` INNER JOIN `user`  ON post.user_id = user.user_id where user.user_id ='$user_id' ORDER BY `post_id` DESC; ");


    // echo mysqli_num_rows($show_post);
?>
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
      <img src="image/PIRPOO.png" alt="" />
      <div class="header__input">
        <span class="material-icons"> search </span>
        <input type="text" placeholder="Cari di Pirpoo..." />
      </div>
    </div>

    <div class="header__right">
      <div class="header__info">
        <span class="material-icons"> notifications_active </span>
        <a href="../profile/detail.php">
                    <img class="user__avatar" src="image/pp.png" alt="" />
                </a>
        <h4><?php echo $_SESSION['username']; ?></h4>
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

      
        <!--ini mah yang di samping-->
        
        <a class="big-btn" href="../logout.php" ><button type="submit" onclick="myFunction()">Log Out</button></a>
        


    </div>
    <!-- sidebar ends -->

    <!-- feed starts -->
    <div class="feed">


      <!-- message sender starts -->
      <div class="messageSender">
        <div class="messageSender__top">
          <img class="user__avatar" src="image/pp.png" alt="" />
          <form class="messageSender__top" method="POST" action="proses_post.php">
          <input class="messageSender__input" name ="message" placeholder="apa yang anda pikirkan ?" type="text" />
          <input type="hidden" name="user_id" value = "<?php echo $_SESSION['user_id']?>?"> 
          <div>
          <button class="text-center-content" type="submit"  onclick="postMessage()" id="bedawarna">Post</button>
          </div>
          </form>
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
    <?php
      foreach($show_post as $post){
        ?>
          <div class="post">
        <div class="post__top">
          <img class="user__avatar post__avatar" src="image/pp.png" alt="" />
          <div class="post__topInfo">
            <h3><?php echo $post['username'] ?> <a href="index.php?page=home">.Ikuti</a></h3>
            <p><?php echo $post['created_at']?></p>
          </div>
          
          <img class="user__avatar post_avatar" src="image/icon 3.jpg" alt="" />
          
          
        </div>

        <div class="post__bottom">
          <p><?php echo $post['post_value'] ?></p>
        </div>
        <?php
          if($post['post_image'] == null){

          }else{
            ?>
              <div class="post__image">
          <img src="image/post.png" alt="" />
        </div>
            <?php
          }
        
        
        ?>

        
        

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
        <?php
      }
    
    
    ?>
      <!-- post starts -->
      
      <!-- post ends -->

      <!-- post starts -->
      
      <!-- post ends -->

      <!-- post starts -->
      
      <!-- post ends -->
    </div>
    <!-- feed ends -->


    <!-- sidebar starts -->
    <div class="kanan">
      <div class="baris">
        <img class="ppkanan" src="image/pp.png" alt="" />
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