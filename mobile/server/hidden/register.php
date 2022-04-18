<?php
include 'config/info_m.php';  // Unique
header('content-type:application/json');
include '../../../config/__sec__p.php';
$link = new mysqli("$hostName","$userName","$passWord","$dbName");
$inputValue = $_GET["username"];
// if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
// $thisHttp = $_SERVER['HTTP_REFERER'];
// $url1 = "http://"."$domain"."/account/register/";
// $url2 = "https://"."$domain"."/account/register/";
// if ($thisHttp == $url1 || $thisHttp == $url2) {
    if ($link->connect_error) {
      die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
    }
      $userDataSql =  "SELECT * FROM member_details Where membUsername = '".$inputValue."' ";
        if (mysqli_query($link, $userDataSql)) {
          $result = mysqli_query($link, $userDataSql);
          if (mysqli_num_rows($result)) {
            $found = array("Result"=>true);
            $foundJSON = json_encode($found);
            echo "$foundJSON";
          }else {
            $notFound = array("Result"=>false);
            $notFoundJSON = json_encode($notFound);
            echo "$notFoundJSON";
          }
        }else {
          $cantRead = array("Result"=>"Cannot Read or connect");
          $cantReadDecode = json_encode($cantRead);
          echo "$cantReadDecode";
        }

  // }else {
  //   $cantRead = array("Result"=>"Access Denied");
  //   $cantReadDecode = json_encode($cantRead);
  //   echo "$cantReadDecode";
  // }
// }else {
//   $cantRead = array("Result"=>"Access Denied");
//   $cantReadDecode = json_encode($cantRead);
//   echo "$cantReadDecode";
// }



?>
