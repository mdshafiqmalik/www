<?php


$link = new mysqli("localhost","root","","fastreed_db");
if ($link->connect_error) {
  die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
}
if (isset($_POST)) {
 if (isset($_POST['submit'])) {
   $firstname = $_POST['firstName'];
   $lastname = $_POST['lastName'];
   $username = $_POST['userName'];
   $usersecret = $_POST['userSecret'];
   $userRole = $_POST['role'];
   $userid = rand(1111111111, 9999999999);
   $hashedSecret = password_hash($usersecret, PASSWORD_DEFAULT);

   $sql = "INSERT INTO member_secrets VALUES ('$userid', '$username', '$firstname', '$lastname', '$hashedSecret', CURRENT_TIMESTAMP,'$userRole')";
    if ($res = mysqli_query($link, $sql)) {
      echo "Data Stored SUccesfully";
      header("location:?registerMessage=sucess");
    }else {
      echo "data Not stored". '<br>'.mysqli_error($link);
    }
   }
   mysqli_close($link);
}

  unset($_POST);
 ?>
