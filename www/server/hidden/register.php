<?php
header('content-type:application/json');
include '../../../config/__sec__p.php';
$link = new mysqli("$hostName","$userName","$passWord","$dbName");
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
$thisHttp = $_SERVER['HTTP_REFERER'];
$url1 = "http://www.fastreed.com/register/";
$url2 = "https://www.fastreed.com/register/";
$url3 = "http://fastreed.com/register/";
$url4 = "https://fastreed.com/register/";
if ($thisHttp == $url1 || $thisHttp == $url2|| $thisHttp == $url3|| $thisHttp == $url4) {
    if ($link->connect_error) {
      die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
    }
      $userDataSql =  "SELECT membUsername, membEmail FROM member_details ";
        if (mysqli_query($link, $userDataSql)) {
           $res = mysqli_query($link,$userDataSql);
           if (mysqli_num_rows($res)>0) {
             $userArray = array();
             while ($row = mysqli_fetch_assoc($res)) {
               $userArray[] = $row;
             }
               $DataDecode = json_encode($userArray);
               echo $DataDecode;

           }else {
             $noData = array("Result"=>"No Data Found");
             $noDataDecode = json_encode($noData);
             echo "$noDataDecode";
           }
        }else {
          $cantRead = array("Result"=>"Cannot Read or connect");
          $cantReadDecode = json_encode($cantRead);
          echo "$cantReadDecode";
        }

  }else {
    $cantRead = array("Result"=>"Access Denied");
    $cantReadDecode = json_encode($cantRead);
    echo "$cantReadDecode";
  }
}else {
  $cantRead = array("Result"=>"Access Denied");
  $cantReadDecode = json_encode($cantRead);
  echo "$cantReadDecode";
}



?>
