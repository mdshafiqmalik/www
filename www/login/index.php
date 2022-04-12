<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
      const xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST","../hidden/userdata.php");

      xmlhttp.onload = function(){
        const myobj = JSON.parse(this.responseText);
        console.log(myobj);
      }
      xmlhttp.send();
    </script>
  </body>
</html>
