<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="scr/style.css?id=1.4.5">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <title>FastReed - Create An Account</title>
   </head>
<body>

  <div class="container">
    <div class="title">Create An Account</div>
    <div id="finalMessageDiv">
      <p id="finalMessage">
<?php if (isset($_GET['message'])) {
       echo $_GET['message'];

       echo '<script>
         $("#finalMessageDiv").addClass("FMD");
       </script>';
} ?>

      </p>
    </div>
    <div class="content">
      <form method="post" id="#registerFrom" onsubmit="return finalSubmit()" action="registration.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name </span><span id="nmAlert" class="alert"></span>
            <input id="nmInput"  name="fullname"class="fields" type="text" placeholder="Enter your name" autocomplete="off" >
          </div>
          <div class="input-box">
            <span class="details">Username </span><span id="unAlert" class="alert"></span>
            <input id="unInput" name="username" class="fields"  type="text" placeholder="Enter your username" autocomplete="off" ><br>

          </div>
          <div class="input-box">
            <span class="details">Email </span><span id="emAlert" class="alert"></span>
            <input id="emInput" name="email" class="fields" type="email" placeholder="Enter your email" autocomplete="off" >

          </div>
          <div class="input-box">
            <span class="details">Password </span><span id="psAlert" class="alert"></span>
            <input id="psInput" name="password"type="text" placeholder="Enter your password" autocomplete="off" >
          </div>
          <div class="input-box">
            <span class="details">Confirm Password </span><span id="confirmPassAlert" class="alert"></span>
            <input id="confirmPassInput"  name="cPassword" class="fields" type="text" placeholder="Confirm your password" autocomplete="off" >

          </div>
        </div>
        <div class="">
          <span id="tc" class="alert"></span>
          <br>
          <input type="checkbox" name="terms" value="true">
          By clicking here, I state that I have read and understood the <a href="../../privacy">Privacy and Policy Agreements</a>
        </div>

        <div class="button">
          <input type="submit" value="Create An Account">
          <div class="loginLink">
            Already have an Account <a href="../"> Log In</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="src/fun.js?v=0.0.0.1" charset="utf-8"></script>
<script src="src/fun1.js?v=0.0.0.5"></script>
</body>
</html>
