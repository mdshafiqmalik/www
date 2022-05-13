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


    <!-- Logged Out -->
    <?php

    ?>

    <?php endif; ?>
    <div class="content">
      <span id="login" >Login In</span>
      <br>

      <form class="loginForm" action="login.php" method="post">
        <div id="message"class="">

          <span id=""> <?php
          if (isset($_GET['message'])) {
            $message = $_GET['message'];
             echo "$message";
          }
           ?> </span>
        </div>
        <div class="loginFields" id="emailField">
          <select name="countryCode" id="countryCode" style="display:none;">
            <?php include '../components/countryCodes.php'; ?>
</select>
          <input id="emailOrPassword" type="text" onkeyup="changeField()"name="username" value="" placeholder="Username or Phone">
        </div>
        <div class="loginFields">
          <input id="password" type="password" name="password" value="" placeholder="Password">
          <span class="status">
            <img onclick="change()" id="eyeClosed"src="../assets/pics/svgs/eye_closed.svg" style="display:block;"alt="">
            <img onclick="change()" id="eyeOpened"src="../assets/pics/svgs/eye_show.svg" style="display:none;"alt="">
          </span>
        </div>
        <div class="loginSubmit">
          <input type="submit" name="" value="LOGIN">
          <a href="#">Forgotten Password?</a>
        </div>
        <div class="or">
          <span class=''>Or</span>
        </div>
      </form>
      <!-- <div class="createAccount"> -->
        <button class="createAccount">
          <span>Create An Account </span>
          <img width="13px" width="13px"src="../assets/pics/svgs/plus.svg" alt="">
        </button>
      <!-- </div> -->
    </div>

    <!-- New Users -->

  </div>

  <script src="src/fun.js?v=<?php echo $randVersion ?>" charset="utf-8"></script>
  <script src="../assets/js/jquery-3.6.0.js?v=<?php echo $randVersion ?>" charset="utf-8"></script>
  </body>
</html>
