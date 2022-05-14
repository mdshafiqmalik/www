
<?php session_start();   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include '../components/rand.php' ?>
    <link rel="stylesheet" href="src/style.css?v=<?php echo($randVersion); ?>">
    <link rel="stylesheet" href="../assets/css/root.css?v=<?php echo($randVersion); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
  <div class="navigation">
    <span> <a id="backArrow" href="/">&#171;  <span>Back</span></a> </span>
  </div>
  <div id="userDiv" class="cont">

    <!-- Logged In -->


    <!-- Login  Section -->
    <?php
    if (isset($_SESSION['userID'])) {
      $userID = isset($_SESSION['userID']);
      ?>
      <div class="content">

      </div>
      <?php
    }else {
      include '../components/login.php';
    }
 ?>

    <!-- New Users -->
<!-- <div class="content">
  <span id="signUp" >Create An Account</span>
  <br>
  <form class="loginForm" action="" method="post">
    <div class="loginFields">
      <input id=""onkeyup="" type="email" name="" value="" placeholder="Full Name">
    </div>
    <div class="loginFields">
      <input id=""onkeyup="" type="email" name="" value="" placeholder="Enter Email Or Phone">
    </div>
    <div class="loginSubmit">
      <input type="submit" name="" value="SEND OTP">
    </div>
  </form>
</div> -->


  </div>

  <script src="src/fun.js?v=<?php echo $randVersion ?>" charset="utf-8"></script>
  <script src="../assets/js/jquery-3.6.0.js?v=<?php echo $randVersion ?>" charset="utf-8"></script>
  </body>
</html>
