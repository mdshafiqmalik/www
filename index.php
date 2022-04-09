<?php
require "checkdevice.php";
if ($isMobile()) {
  header('Location:m');
}else {
  header('Location:d');
}
?>
