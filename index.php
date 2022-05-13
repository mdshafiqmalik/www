

<?php
include 'account/session.php';
echo $userID;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    include 'components/rand.php';
    $style_css ="assets/css/style.css?v=$randVersion";
    $root_css = "assets/css/root.css?v=$randVersion";
    $fun_js = "assets/js/fun.js?v=$randVersion";
     ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo($style_css); ?>">
  <link rel="stylesheet" href="<?php echo($root_css); ?>">
  <script src="<?php echo($fun_js); ?>" charset="utf-8"></script>
  <title></title>

  <style media="screen">
  body{
    overflow-x: hidden;
    overflow-y: hidden;
  }
  #onLoad .logo{
    /* font-size: 1.2em; */
  }
  #home{
    filter: var(--svgblue);
  }
  </style>
  </head>
  <body onload="onLoad()" >
    <script type="text/javascript">
    function preLoadFunc(){
      document.body.scrollTop = '100px';
      document.documentElement.scrollTop = '100px';
    }
    window.onpaint = preLoadFunc();

    </script>
<!-- On Load -->
   <div id="onLoad">
     <div class="onloadLogo"> <img width="47px" height="47px"src="assets/pics/other/R_logo.svg" alt="">
     </div>
     <div class="nation">
       <div class="lion">
         <img height="37px" width="65px"src="assets/pics/other/lion.png" alt="">
       </div>
       <div class="mke">
         Make In India
       </div>
     </div>
    </div>


    <!-- <div class="loader"><div id="loader"></div> </div> -->
    <div class="mainCont">
    <?php
    include 'components/header.php';
    ?>
      <!-- Search and Tag -->

      <div class="tagandSearch cont500 ">
        <div class="search">
          <div id="search">
          <span>&#128269;</span>
            <input id="" type="search" name="" value="" placeholder=" Search Here....">
          </div>
        </div>
        <div class="tags">
          <select class="filterOpt" name="filterOpt" id="filterOpt">
            <option value="">Filter </option>
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
      <?php include 'posts.php'; ?>

    </div>
  </body>
</html>
