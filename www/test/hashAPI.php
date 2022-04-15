<?php
header('content-type:application/json');
if (isset($_GET['string'])&&isset($_GET['hash'])) {
  $string = $_GET['string'];
  $hashed = $_GET['hash'];
  if (password_verify($string, $hashed)) {
    $array = array("Result"=>"true");
    $jsonArray = json_encode($array);
    echo "$jsonArray";
  }else {
    $array = array("Result"=>"false");
    $jsonArray = json_encode($array);
    echo "$jsonArray";
  }
}else {
  $array = array("Result"=>"Please Provide Password and its Hash ?hash=$2y$8jfrh648hucb673yudud7843ewu47bdhcjs&string=MyPassword");
  $jsonArray = json_encode($array);
  echo "$jsonArray";
}

 ?>
