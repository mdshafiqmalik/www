<?php
header('content-type:application/json');
include '../../../config/secrets.php';
$link = new mysqli("$hostName","$userName","$passWord","$dbName");
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
  $httpReferrer1 = "https://www.shafiqhub.com/signup/";
  $httpReferrer2 = "http://www.shafiqhub.com/signup/";
  $httpReferrer3 = "https://shafiqhub.com/signup/";
  $httpReferrer4 = "http://shafiqhub.com/signup/";
  $gethttpRef = $_SERVER['HTTP_REFERER'];
  if ($gethttpRef == $httpReferrer1 || $gethttpRef == $httpReferrer2 || $gethttpRef == $httpReferrer3 || $gethttpRef == $httpReferrer4) {
    if ($link->connect_error) {
      die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
    }

      $userDataSql =  "SELECT fastUsername, userEmail FROM member_secrets ";
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
    echo "Access Denied";
  }
}else {
  echo "Access Denied";
}

?>
