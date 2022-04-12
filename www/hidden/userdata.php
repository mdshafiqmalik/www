<?php
// api key = 67834gsd634gsa763g
// header('content-type:application/json');
include '../../config/secrets.php';
$link = new mysqli("$host_name","$user_name","$password","$database");
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
           $data[] = json_decode($DataDecode, true);
           $jason_merge = json_encode($data);
           echo $jason_merge;

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

?>
