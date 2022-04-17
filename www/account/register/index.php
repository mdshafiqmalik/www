<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css?id=1.4.3">
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
        <div id="gender" class="gender-details">
          <input class="genderSelect" type="radio"value="male" name="gender" id="dot-1" >
          <input class="genderSelect" type="radio"value="female" name="gender" id="dot-2" >
          <input class="genderSelect" type="radio"value="other" name="gender" id="dot-3" >
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="">
          <span id="tc" class="alert"></span>
          <br>
          <input type="checkbox" name="terms" value="true">
          By clicking here, I state that I have read and understood the <a href="../privacy">Privacy and Policy Agreements</a>
        </div>

        <div class="button">
          <input type="submit" value="Create An Account">
          <div class="loginLink">
            Already have an Account <a href="../login"> Log In</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="fun.js?v=0.0.0" charset="utf-8"></script>
<script src="fun1.js?v=0.1.2"></script>
</body>
</html>
