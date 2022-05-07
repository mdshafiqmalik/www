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
      <div class="menu"><img src="/'.$source.'/svgs/menu_NB.svg" alt=""> </div>
    </div>
  </div>
  <div class="subheader">
    <div><a href="/"><img id="home" class="submenu" src="/'.$svgFolder.'/home_NF.svg" alt=""></a></div>
    <!--<div><a href="channels.php"><img id="subscribe" class="submenu" src="/'.$svgFolder.'/subscribe.svg" alt=""></a></div>-->
    <div><a href="/"><img id="" class="submenu" src="/'.$svgFolder.'/bell_NF.svg" alt=""></a> </div>
    <div><a href="users"><img id="" class="submenu" src="/'.$svgFolder.'/user_notFilled.svg" alt=""></a> </div>
  </div>
</div>
'; ?>
