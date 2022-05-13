<?php
include '_.config/_s_db_.php';
   $db = new mysqli("$hostName","$userName","$passWord","$dbName");
   session_start();
   $userID = $_SESSION['userID'];
   $sql = 'SELECT * from fast_users where userID = "$userID"';
   $result = mysqli_query($db,$sql);
   if (mysqli_num_rows($result)){
     $row = $result->fetch_assoc();
     $userID = $row['userID'];
   }else {
     // code...
   }
 ?>
