<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="twitter:" content="">
    <title></title>
  </head>
  <body>
    <?php
    include "src/checkdevice.php";
     $output = shell_exec("git pull fastreed main");
     echo "<pre>$output</pre>";
     ?>
  </body>
</html>
