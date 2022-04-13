<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css?id=1.1.4">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="../login">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name </span><span id="nmAlert" class="alert"></span>
            <input id="nmInput" class="fields" type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username </span><span id="unAlert" class="alert"></span>
            <input id="unInput" class="fields"  type="text" placeholder="Enter your username" required><br>

          </div>
          <div class="input-box">
            <span class="details">Email </span><span id="emAlert" class="alert"></span>
            <input id="emInput"  class="fields" type="text" placeholder="Enter your email" required>

          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password </span><span id="psAlert" class="alert"></span>
            <input id="psInput"  class="fields" type="text" placeholder="Confirm your password" required>

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
<script src="style.js?v=0.0.1"></script>
</body>
</html>
