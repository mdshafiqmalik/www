<!DOCTYPE html>
<?php

$r1= rand(0,10);
$r2= rand(0,10);
$r3= rand(0,10);
$r4 = rand(0,10);
$randVersion ="$r1"."."."$r2"."."."$r3".".".$r4; ?>
<html lang="en" dir="ltr">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css?v=<?php echo($randVersion); ?>">
  <link rel="stylesheet" href="assets/root.css?v=<?php echo($randVersion); ?>">
  <script src="assets/fun.js?v=<?php echo($randVersion); ?>" charset="utf-8"></script>
  <title></title>
  <style media="screen">
  body{
    overflow-x: hidden;
    overflow-y: hidden;
  }
  #home{
    filter: var(--svgblue);
  }
  </style>
  </head>

  <body onload="onLoad()">
    <div id="onLoad">
      <div class="onloadLogo">

      </div>
      <div class="lion">
        <img height="40px" width="70px"src="assets/lion.png" alt="">
      </div>
      <div class="mke">
        Make In India
      </div>

    </div>
    <!-- <div class="loader"><div id="loader"></div> </div> -->
    <div class="mainCont">
      <div class="hd cont500">
        <div class="header">
        <div class="">
          <h1 class="logo">fastreed</h1>
        </div>
          <div class="menuTop">
            <div class="menu"><img src="./assets/svgs/menu_NB.svg" alt=""> </div>
          </div>
        </div>
        <div class="subheader">
          <div><a href="index.php"><img id="home" class="submenu" src="./assets/svgs/home_NF.svg" alt=""></a></div>
          <div><a href="channels.php"><img id="channels" class="submenu" src="./assets/svgs/users_two.svg" alt=""></a></div>
          <div><img id="" class="submenu" src="./assets/svgs/bell_NF.svg" alt=""> </div>
          <div><img id="" class="submenu" src="./assets/svgs/user_notFilled.svg" alt=""> </div>
        </div>
      </div>
      <div class="tagandSearch cont500 ">

        <div class="search">
          <div id="search">
          <span>&#128269;</span>
            <input id="" type="search" name="" value="" placeholder=" Search Here....">
          </div>

        </div>
        <div class="tags">

          <select class="filterOpt" name="filterOpt" id="filterOpt">

            <option value="" disabled selected>Filter </option>
            <option value="trending">Trending</option>
            <option value="mostActive">Channels</option>
            <option value="newlyAdded">Newer</option>
            <option value="atoz">A to Z</option>
          </select>
          <span onclick="allActive()" class="tagActive" id="all">All</span>

          <span class="stags" id="how-to" onclick="goTo('how-to')">how to?</span>
          <span class="stags" id="health" onclick="goTo('health')">health</span>
          <span class="stags" id="blogging" onclick="goTo('blogging')">blogging</span>
          <span class="stags" id="trading" onclick="goTo('trading')">trading</span>
        </div>
      </div>
      <?php
      $source = "assets";
      $svgFolder = $source."/svgs";

      if (isset($_GET["tag"])) {
        $tag = $_GET["tag"];
        echo '
        <script type="text/javascript">
        document.getElementById("'.$tag.'").classList.add("tagActive");
        document.getElementById("all").classList.remove("tagActive");
        </script>
         ';
      }else {
      }
      ?>

      <?php
      $authors = array("Md Shafiq","Md Raqib","William Cathey","Mark Zukerberg","Rohit Sharma");
      $channels = array("Shafiq Hub","Blogging Tips","Crazy writer","Bloomberg","Rohit Hub");
      $titles =  array("6 proven way to be happy in your life","How to read and remember with amazing memory","How to write catchy letter to anyone","How to propse your girl romantically?","7 places to visit in kashmir this summer");

      for ($i=0; $i < 5; $i++) {
        echo '
        <!--Post: '.$i.' -->
        <div class="posts cont500">
          <div class="postBody">
            <div class="postPic"> <img src="'.$i.'.jpg" alt=""> </div>
            <div class="postTitle"><a id="postTitle" href=""> '.$titles[$i].'</a></div>
            <div class="extFoot">
              <span class="meta"><a id="channelName"  href="">'.$channels[$i].'</a></span>
              <p class="dot">&#x2022;</p>
              <span   class="meta"><a id="authorName" href="">'.$authors[$i].'</a></span>
              <p class="dot">&#x2022;</p>
              <span id="pubTime" class="meta">'.$i.' hrs</span>
            </div>
          </div>
          <div class="postFooter">
            <div class="footItems" id="react">
              <div id="like" class="react"><img  class="footImages"  src="'.$svgFolder.'/thumbs-up.svg" alt=""></div>
              <div id="likeCount" class="react rt footImages fontFam b sm ml_d4em">9k</div>
            </div>
            <div class="footItems" >
              <img id="comment"class="footImages"  src="'.$svgFolder.'/comment_notFilled_2.svg" alt="">
              <div id="comentCount" class=" react rt footImages fontFam b sm ml_d4em">1.2k</div>
            </div>
            <div class="footItems" id="share">
              <img  class="footImages" src="'.$svgFolder.'/share_en.svg" alt="">
            </div>
          </div>
        </div>';
      }
       ?>
    </div>
    <!-- <div class="postMeta">
      <div class="writerPic">
        <div class="pic">
          <img src="<?php //echo $source ?>/author.jpg" onerror="this.src='<?php //echo $source ?>/wt.jpg'";>
        </div>
      </div>
      <div class="writerDetail">
        <span id="channelName">Writing Blogs</span>
        <span id="name">William Cathey</span>
        <span id="dot">&#x2022;</span>
        <span id="Subscribe" >Subscribe</span>
      </div>
      <div class="options"> <img src="<?php //echo $svgFolder ?>/hori_dots.svg" alt=""> </div>
    </div> -->
    <script type="text/javascript">
    function onLoad(){
      setTimeout(function(){
         // document.getElementById('onLoad').style.display= "none";
         document.getElementsByTagName("body")[0].style.overflowX = "scroll";
         document.getElementsByTagName("body")[0].style.overflowY = "scroll";
      },800);
    }

    </script>
  </body>
</html>
