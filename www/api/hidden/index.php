<?php
header('content-type:application/json');
include '../../../config/secrets.php';
$link = new mysqli("$hostName","$userName","$passWord","$dbName");
// if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
//   if ($_SERVER['HTTP_REFERER'] == "http://www.fastreed.com/signup/") {
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

//   }else {
//     $cantRead = array("Result"=>"Access Denied");
//     $cantReadDecode = json_encode($cantRead);
//     echo "$cantReadDecode";
//   }
// }else {
//   $cantRead = array("Result"=>"Access Denied");
//   $cantReadDecode = json_encode($cantRead);
//   echo "$cantReadDecode";
// }



?>
