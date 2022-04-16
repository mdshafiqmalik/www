
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitizeData($_POST['fullname']);
    $userName = sanitizeData($_POST['username']);
    $userEmail = sanitizeData($_POST['email']);
    $userPass = sanitizeData($_POST['password']);
    $cPass = sanitizeData($_POST['cPassword']);
    $gender = sanitizeData($_POST['gender']);
    $terms = sanitizeData($_POST['terms']);
    function sanitizeEmail($x){
      if (filter_var($x, FILTER_SANITIZE_EMAIL) == true) {
        $i = filter_var($x, FILTER_SANITIZE_EMAIL);
      }else {
        $i = false;
      }
      return $i;
    }
    $sanName = filter_var($name,FILTER_SANITIZE_STRING);
    $sanUserName = filter_var($userName,FILTER_SANITIZE_STRING);
    $sanUserEmail = sanitizeEmail($userEmail);
    $sanGender = filter_var($gender,FILTER_SANITIZE_STRING);
    $sanTerms = filter_var($terms,FILTER_SANITIZE_STRING);

    echo $sanName."<br>";
    echo $sanUserName."<br>";
    echo $sanUserEmail."<br>";
    echo $sanGender."<br>";
    echo $sanTerms."<br>";

}else {
  header("Location: https://www.shafiqhub.com/register/index.php?message=RegisterYourself");
}


function sanitizeData($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
