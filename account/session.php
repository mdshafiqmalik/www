<?php
include_once '_.config/_s_db_.php';
   $db = new mysqli("$hostName","$userName","$passWord","$dbName");
   session_start();
   $userID = $_SESSION['userID'];
   $sql = 'SELECT * from fast_users where userID = "$userID"';
   $res = mysqli_query($db,$sql);
   if (mysqli_num_rows($res)){
     $row = $res->fetch_assoc();
     $userID = $row['userID'];
   }else {
     // code...
   }
 ?>
