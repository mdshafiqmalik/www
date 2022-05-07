<?php
$authors = array("Md Shafiq","Md Raqib","William Cathey","Mark Zukerberg","Rohit Sharma");
$channels = array("Shafiq Hub","Blogging Tips","Crazy writer","Bloomberg","Rohit Hub");
$titles =  array("6 proven way to be happy in your life","How to read and remember with amazing memory","How to write catchy letter to anyone","How to propse your girl romantically?","7 places to visit in kashmir this summer");
for ($i=0; $i < 5; $i++) {
  echo '
  <!--Post: '.$i.' -->
  <div class="posts cont500">
    <div class="postBody">
      <div class="postPic"> <img src="/assets/pics/other/'.$i.'.jpg" alt=""> </div>
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
        <div id="like" class="react"><img  class="footImages"  src="/assets/pics/svgs/thumbs-up.svg" alt=""></div>
        <div id="likeCount" class="react rt footImages fontFam b sm ml_d4em">9k</div>
      </div>
      <div class="footItems" >
        <img id="comment"class="footImages"  src="/assets/pics/svgs/comment_notFilled_2.svg" alt="">
        <div id="comentCount" class=" react rt footImages fontFam b sm ml_d4em">1.2k</div>
      </div>
      <div class="footItems" id="share">
        <img  class="footImages" src="/assets/pics/svgs/share_en.svg" alt="">
      </div>
    </div>
  </div>';
}
 ?>
