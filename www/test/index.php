<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
$source = "assets";
$svgFolder = $source."/svgs";
$r1= rand(0,10);
$r2= rand(0,10);
$r3= rand(0,10);
$r4 = rand(0,10);
$randVersion ="$r1"."."."$r2"."."."$r3".".".$r4;
 ?>
  <head>
  <meta charset="UTF-8">
  <meta property="og:type" content="website" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="msapplication-tap-highlight" content="no">
  <link href='./favicon.ico' rel='icon' sizes="32x32"  type='image/x-icon'/>
  <link href='./favicon.ico' sizes="16x16" rel='icon' type='image/x-icon'/>
  <link href='./favicon.ico' sizes="48x48"  rel='icon' type='shortcut icon'/>
  <link rel='apple-touch-icon' sizes="180x180" type='apple-touch-icon image_src' href=''/>
  <link rel="stylesheet" href="<?php echo $source ?>/style.css?v=<?php echo($randVersion); ?>">
  <title></title>
  <style media="screen">
  #home{
    filter: var(--svgblue);
  }
  </style>
  </head>
  <body>
    <div class="hd cont500">
      <div class="header">
      <div class="">
        <h1 class="logo">fastreed</h1>
      </div>
        <div class="menuTop">
          <div class="menu"><img src="./<?php echo $source ?>/svgs/menu_NB.svg" alt=""> </div>
        </div>
      </div>
      <div class="subheader">
        <div><img id="home" class="submenu" src="./<?php echo $svgFolder ?>/home_NF.svg" alt=""></div>
        <div><img id="" class="submenu" src="./<?php echo $svgFolder ?>/users_two.svg" alt=""></div>
        <div><img id="" class="submenu" src="./<?php echo $svgFolder ?>/bell_NF.svg" alt=""> </div>
        <div><img id="" class="submenu" src="./<?php echo $svgFolder ?>/user_notFilled.svg" alt=""> </div>
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
        <span>All</span>
        <span>how to?</span>
        <span>health</span>
        <span>blogging</span>
        <span>trading</span>
        <span>investment</span>
        <span>coding</span>
        <span>apps</span>
        <span>sports</span>
        <span>mobile</span>
        <span>desktop</span>
        <span>science</span>
        <span>technology</span>
        <span>software</span>
      </div>
    </div>
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
          <div class="postTitle">'.$titles[$i].'</div>
          <div class="extFoot">
            <span class="meta">'.$channels[$i].'</span>
            <p class="dot">&#x2022;</p>
            <span class="meta">'.$authors[$i].'</span>
            <p class="dot">&#x2022;</p>
            <span class="meta">'.$i.' hrs</span>
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
  </body>
</html>
