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
    <div class="content">
      <span id="login" >Login In</span>
      <br>
      <form class="loginForm" action="" method="post">
        <div class="loginFields">
          <input type="text" name="" value="" placeholder="Enter Email"required>
          <span class="status"></span>
        </div>
        <div class="loginFields">
          <input type="password" name="" value="" placeholder="Enter Password"required>
          <span class="status"><img src="../assets/pics/svgs/eye_closed.svg" alt=""></span>
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
  </body>
</html>
