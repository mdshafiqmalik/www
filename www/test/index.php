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
  #onLoad .logo{
    /* font-size: 1.2em; */
  }
  #home{
    filter: var(--svgblue);
  }
  </style>
  </head>
  <body onload="onLoad()" >
<!-- On Load -->
   <div id="onLoad">
          <span class="logo">fR</span>
          <div class="nation">
            <div class="lion">
              <img height="37px" width="65px"src="assets/lion.png" alt="">
            </div>
            <div class="mke">
              proudly Make In India
            </div>
          </div>
    </div>


    <!-- <div class="loader"><div id="loader"></div> </div> -->
    <div class="mainCont">
      <?php include 'components/header.php'; ?>

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
            <option value="" disabled>Filter </option>
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
