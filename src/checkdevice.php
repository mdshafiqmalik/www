<?php
$isMob = function() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
};
if ($isMob()) {
  header('Location:https://www.shafiqhub.com/m');
  exit;
}else {
  header('Location:https://www.shafiqhub.com/d');
  exit;
}

 ?>
