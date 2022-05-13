<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $password = $_POST['password'];
  if (mailOrPhone() == "mail") { // If User Entered Email Address
    $mail = $_POST['email'];
    if (empty($mail)||ctype_space($mail)) {
        header("Location: /account/?message=Please Enter Email Or Phone"); // Check if Email is empty
    }else {
      if (empty($password)||ctype_space($password)) { // Check if password is  empty
        header("Location: /account/?message=Please Enter Password");
      }else {
        $sanPassword = sanitizeData($password);
        $sanitizeEmail = sanitizeData($mail);
       }
    }
  }else{ // If User Entered Phone Number
    $phone = $_POST['phone'];
    if (empty($phone)||ctype_space($phone)) {
        header("Location: /account/?message=Please Enter Email Or Phone"); // Check if Phone is empty
    }else {
      if (empty($password)||ctype_space($password)) { // Check if password is  empty
        header("Location: /account/?message=Please Enter Password");
      }else {
        $sanPassword = sanitizeData($password);
        $sanitizeEmail = sanitizeData($phone);
       }
    }
  }
}else {
  header("Location: /account");
}


function mailOrPhone()
{
  if (isset($_POST['email'])) {
    return "mail";
  }else {
    return "phone";
  }
}

function sanitizeData($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
