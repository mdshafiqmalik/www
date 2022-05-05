<?php
$source = "assets";
$svgFolder = $source."/svgs";

echo '
<div class="hd cont500">
  <div class="header">
  <div class="">
    <h1 class="logo">fastreed</h1>
  </div>
    <div class="menuTop">
      <div class="menu"><img src="./'.$source.'/svgs/menu_NB.svg" alt=""> </div>
    </div>
  </div>
  <div class="subheader">
    <div><a href="/"><img id="home" class="submenu" src="./'.$svgFolder.'/home_NF.svg" alt=""></a></div>
    <div><a href="channels.php"><img id="channels" class="submenu" src="./'.$svgFolder.'/users_two.svg" alt=""></a></div>
    <div><img id="" class="submenu" src="./'.$svgFolder.'/bell_NF.svg" alt=""> </div>
    <div><img id="" class="submenu" src="./'.$svgFolder.'/user_notFilled.svg" alt=""> </div>
  </div>
</div>
'; ?>
