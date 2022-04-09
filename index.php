<?php
include "checkdevice.php";
if ($isMob()) {
  header('Location:m');
}else {
  header('Location:d');
}
?>
