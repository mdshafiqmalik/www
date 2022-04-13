<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css?id=1.2.2">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form id="#registerFrom" onsubmit="" action="../login">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name </span><span id="nmAlert" class="alert"></span>
            <input id="nmInput"  name="fullname"class="fields" type="text" placeholder="Enter your name" autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Username </span><span id="unAlert" class="alert"></span>
            <input id="unInput" name="username" class="fields"  type="text" placeholder="Enter your username" autocomplete="off" required><br>

          </div>
          <div class="input-box">
            <span class="details">Email </span><span id="emAlert" class="alert"></span>
            <input id="emInput" name="email" class="fields" type="email" placeholder="Enter your email" autocomplete="off" required>

          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" autocomplete="off" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password </span><span id="psAlert" class="alert"></span>
            <input id="psInput"  name="password" class="fields" type="text" placeholder="Confirm your password" autocomplete="off" required>

          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" required>
          <input type="radio" name="gender" id="dot-2" required>
          <input type="radio" name="gender" id="dot-3" required>
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
        <div class="button">
          <input type="submit" value="Register">
          <div class="loginLink">
            Already have an Account <a href="../login"> Log In</a>
          </div>
        </div>
      </form>
    </div>
  </div>
<script src="style.js?v=0.0.2"></script>
</body>
</html>
